<?php

// Jualan produk
// Komik
// Game

class Produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} ({$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman} Halaman";
        } else if ($this->tipe == "game") {
            $str .= " ~ {$this->waktuMain} Jam";
        }

        return $str;
    }

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
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




$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Duckman", "Sony Computer", 250000, 0, 50, "game");

echo $produk2->getInfoLengkap();
