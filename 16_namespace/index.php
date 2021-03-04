<?php

require_once 'App/Produk/init.php';

$produk1 = new komik("Naruto", "Masashi kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new game("Seven Deadly Sins", "Gatu sokap", "Netmarble", 0, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahproduk($produk1);
$cetakProduk->tambahproduk($produk2);

echo $cetakProduk->cetak();