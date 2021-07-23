<?php
session_start();
if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'login'){
        $users = json_decode(file_get_contents('users.json'), true);
        $user = array_filter(
            $users, 
            fn ($user) => $user['username'] == $_POST['password'] && $user['password'] == $_POST['password']
        );
        if (sizeof($user)==1){
            $_SESSION['username'] = $_POST['username'];
            echo "Selamat Datang";
        }
        else 
        {
            echo "Login Gagal";
            session_destroy();
        }
        unset($_POST);
    }
    elseif ($_POST['submit'] == 'logout') {
        session_destroy();
        unset($_POST);
    }
}


?>
<form method="POST">
    <?php if (session_status() == 1){ ?>
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        
        <button name="submit" value="login">Login</button>
    <?php } else { ?>
        <button name="submit" value="logout">Log Out</button>
    <?php } ?>
</form>
