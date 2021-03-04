<?php

class komik extends Produk implements infoProduk
{
    public $jmlHlm;
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalamn)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jlmHlm = $jmlHalamn;
    }
    public function getInfoProduk()
    {
        $str = "Komik :" . parent::getInfoLengkap() . " {$this->jmlHlm} Halaman.";
        return $str;
    }
}