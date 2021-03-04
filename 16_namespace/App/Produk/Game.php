<?php

class game extends Produk implements infoProduk
{
    public $wtkMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $wtkMain)
    {
        // construct from parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wtkMain = $wtkMain;
    }
    public function getInfoProduk()
    {
        $str = "Game :" . parent::getInfoLengkap() . " {$this->wtkMain} Jam.";
        return $str;
    }
}