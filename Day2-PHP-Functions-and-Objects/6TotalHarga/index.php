<?php
$bills = json_decode(file_get_contents('bill.json'), true);
$total = 0;
foreach ($bills as $bill){
    $total+=$bill['price']*$bill['qty'];
}
echo $total;