<?php


class CetakInfoProduk
{
    public $daftarProduk = array();
    public function tambahproduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK:" . PHP_EOL;
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()}" . PHP_EOL;
        }
        return $str;
    }
}