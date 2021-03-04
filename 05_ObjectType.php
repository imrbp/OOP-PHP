<?php


// just like a struct in C

class Produk{
    // Komik dan game
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;



    public function __construct($judul, $penulis, $penerbit, $harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        
    }

    // this-> mengambil property dari var scope luar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        return "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";
    }
}

$produk3 = new Produk("Naruto", "Masashi kisimoto", "Shonen Jump", 30000);
$produk4 = new Produk("Seven Deadly Sins", "Gatu sokap","Netmarble",0);

// echo "Komik : $produk3->judul, $produk3->penerbit";
// echo PHP_EOL . "Game : $produk4->judul, $produk4->penerbit";


$infoProduk = new CetakInfoProduk();
echo $infoProduk->cetak($produk4);