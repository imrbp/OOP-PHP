<?php

// menciptakan hierarki antar kelas (parent and child)
// Childe class, mewarisi semua properti dan method dari parent-nya
// child class, memperluas fungsionalitas dari parent-nya

// Why inheritance??

class Produk{
    // Komik dan game
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;
    public $jmlHalamn;
    public $wtkMain;
    public $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalamn, $wtkMain, $tipe){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHlm = $jmlHalamn;
        $this->wtkMain = $wtkMain;
        $this->tipe = $tipe;

    }

    // this-> mengambil property dari var scope luar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) | ";
        if ($this->tipe == "komik") {
            $str .= "{$this->jmlHlm} Halaman.";
        } else {
            $str .= "{$this->wtkMain} Jam.";
        }

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


// masukin produk 3 dan 4 ke dalam class
$produk3 = new Produk("Naruto", "Masashi kisimoto", "Shonen Jump", 30000, 100, null, "komik");
$produk4 = new Produk("Seven Deadly Sins", "Gatu sokap","Netmarble",0, null, 50, "game");

// print produk 3 melalui class cetakinfoproduk

echo $produk3->getInfoLengkap() . PHP_EOL;
echo $produk4->getInfoLengkap() . PHP_EOL;
