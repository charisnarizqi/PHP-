<?php

require_once 'bentuk.php';
class lingkaran extends bentuk{
    public $phi = 3.14;
    public $jari2 = 5;

    public function namaBidang(){
        echo 'Lingkaran';
    }
    public function luasBidang(){
        return ($this->phi * pow($this->jari2, 2));
    }
    public function kelilingBidang(){
        return ($this->phi * (2 * $this->jari2));
    }
}