<form method="POST" enctype="multipart/form-data">

  <input name="nama" placeholder="Nama">
  <input name="mail" placeholder="Email">
  <input name="telp" placeholder="Telepon">
  <input type="file" name="profile" placeholder="Profile">
  <input type="file" name="dokumen" placeholder="Dokumen">

  <button>Submit</button>

</form>

<?php
if($_POST){
  $file = fopen('data/user.csv', 'a');
  fwrite($file,$_POST['nama'].','.$_POST['mail'].','.$_POST['telp'].','.$_POST['nama'].'.'.pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION).','.$_POST['nama'].'.'.pathinfo($_FILES['dokumen']['name'], PATHINFO_EXTENSION).PHP_EOL);
  fclose($file);
  move_uploaded_file(
      $_FILES['profile']['tmp_name'], 
      'data/profile/'.$_POST['nama'].'.'.pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION)
    );
  move_uploaded_file(
      $_FILES['dokumen']['tmp_name'], 
      'data/dokumen/'.$_POST['nama'].'.'.pathinfo($_FILES['dokumen']['name'], PATHINFO_EXTENSION)
    );
    unset($_POST);
  }  
