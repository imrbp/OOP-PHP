<?php

// menciptakan hierarki antar kelas (parent and child)
// Childe class, mewarisi semua properti dan method dari parent-nya
// child class, memperluas fungsionalitas dari parent-nya

// Implementation of inheritance

// keyword == extends
class Produk{
    // Komik dan game
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalamn;
    public $wtkMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalamn, $wtkMain){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHlm = $jmlHalamn;
        $this->wtkMain = $wtkMain;

    }

    // this-> mengambil property dari var scope luar
    public function getLabel() {
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

class komik extends Produk {
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) | {$this->jmlHlm} Halaman.";
        return $str;
    }
}

class game extends Produk {
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) | {$this->wtkMain} Jam.";
        return $str;
    }
}



// masukin produk 3 dan 4 ke dalam class
$produk3 = new komik("Naruto", "Masashi kisimoto", "Shonen Jump", 30000, 100, null);
$produk4 = new game("Seven Deadly Sins", "Gatu sokap","Netmarble",0, null, 50);

echo "{$produk3->getInfoProduk()}" . PHP_EOL;
echo "{$produk4->getInfoProduk()}" . PHP_EOL;