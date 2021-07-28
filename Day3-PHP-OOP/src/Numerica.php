<?php

namespace App;

class Numerica
{
    public array $number;

    public function __construct($number){
        $this->number=$number;
    }

    public function first(){
        return $this->number[0];
    }
    
    public function last(){
        return $this->number[count($this->number)-1];
    }

    public function min(){
        return min($this->number);
    }

    public function max(){
        return max($this->number);
    }

    public function sum(){
        return array_sum($this->number);
    }

    public function rsort(){
        $sorted=$this->number;
        rsort($sorted);
        return $sorted;
    }

    public function sort(){
        $sorted=$this->number;
        sort($sorted);
        return $sorted;
    }

    public function odd(){
        $temps=$this->number;
        foreach($temps as $key => $value){
            if($value %2==0){
                unset($temps[$key]);
            }
        }
        return $temps;
    }

    public function even(){
        $temps=$this->number;
        foreach($temps as $key => $value){
            if($value %2!=0){
                unset($temps[$key]);
            }
        }
        return $temps;
    }

    public function greaterThan($pivot){
        $temps=$this->number;
        foreach($temps as $key => $value){
            if($value <= $pivot){
                unset($temps[$key]);
            }
        }
        return $temps;
    }

    public function greaterThanEqual($pivot){
        $temps=$this->number;
        foreach($temps as $key => $value){
            if($value < $pivot){
                unset($temps[$key]);
            }
        }
        return $temps;
    }

    public function lessThan($pivot){
        $temps=$this->number;
        foreach($temps as $key => $value){
            if($value >= $pivot){
                unset($temps[$key]);
            }
        }
        return $temps;
    }

    public function lessThanEqual($pivot){
        $temps=$this->number;
        foreach($temps as $key => $value){
            if($value > $pivot){
                unset($temps[$key]);
            }
        }
        return $temps;
    }
}
