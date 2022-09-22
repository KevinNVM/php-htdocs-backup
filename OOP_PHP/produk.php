<?php

// Jualan produk
// Komik
// Game

class Produk {
    public $judul = "judul",  $penulis = "penulis", $penerbit = "penerbit", $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "GTA V";
// $produk2->penerbit = "Rockstar";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "GTA V";
$produk3->penulis = "Rockstar Games";
$produk3->penerbit = "Rockstar North";
$produk3->harga = "USD $30";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "Rp 250.000";

echo "Game : " . $produk3->getLabel();
echo "<BR>";
echo "Game : " . $produk4->getLabel();