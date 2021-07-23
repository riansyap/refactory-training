<?php

function ulangTahun($tanggal) {
    $now = new DateTime();
    $lahir = new DateTime($tanggal);
    $ulangtahun = new DateTime();
    $ulangtahun->setDate(date('Y'), $lahir->format('m'), $lahir->format('d'));
  
    if ($now<=$ulangtahun){
        $diff = $now->diff($ulangtahun);
    }
    else $diff = $now->diff($ulangtahun->modify('+1 year'));
    
  
    return $diff->format('%R%a hari');
}


echo ulangTahun('2009-07-01');