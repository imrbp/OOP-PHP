<?php

class Produk
{
    // Komik dan game
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // this-> mengambil property dari var scope luar
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) | ";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        return "{$produk->judul} | {$produk->getLabel()} | Rp.{$produk->harga}";
    }
}

class komik extends Produk{
    public $jmlHlm;
    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalamn)    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jlmHlm = $jmlHalamn;
    }
    public function getInfoProduk()
    {
        $str = "Komik :" . parent::getInfoLengkap() . " {$this->jmlHlm} Halaman.";
        return $str;
    }
}

class game extends Produk{
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

// masukin produk 3 dan 4 ke dalam class
$produk1 = new komik("Naruto", "Masashi kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Seven Deadly Sins", "Gatu sokap", "Netmarble", 0, 50);

echo "{$produk1->getInfoProduk()}" . PHP_EOL;
echo "{$produk2->getInfoProduk()}" . PHP_EOL;