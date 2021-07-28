<?php

namespace App;

class Item
{
    public $id,$name,$price,$qty;

    public function __construct($kode,$nama,$harga){
        $this->id=$kode;
        $this->name=$nama;
        $this->price=$harga;
        $this->qty=1;
    }

}
