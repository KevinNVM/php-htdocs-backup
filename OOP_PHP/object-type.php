<?php

// Jualan produk
// Komik
// Game

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} | {$produk->harga}";

        return $str;
    }
}




$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);
$produk2 = new Produk("Uncharted", "Neil Duckman", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Game : " . $produk1->getLabel();
echo "<BR>";
echo "Game : " . $produk2->getLabel();
echo "<BR>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
