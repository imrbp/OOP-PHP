<?php


class Produk{
    // Komik dan game
    public $judul;
    public $penulis;
    public $penerbit;
    public $harga;


    // this-> mengambil property dari var scope luar
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }


}

// Property
// Merepresantisikan data/ keaddaan dari sebuah object
// variable yang ada di dalam object (member variable)

// $produk1 = new Produk();

// $produk1->judul = "Naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// var_dump($produk2->judul);


// Method
// Merepresantikan prilaku dari sebauh object
// Function yang ada di dalam object

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;


echo "Komik : $produk3->judul, $produk3->penerbit";
echo PHP_EOL;
echo $produk3->getLabel();

$produk4 = new Produk();
$produk4->judul = "Seven deadly sins";
$produk4->penulis = "Gatau sokap";
$produk4->penerbit = "Netmarble";
$produk4->harga = "Free";
echo PHP_EOL . "Game : $produk4->judul";


?>