<?php 
abstract class Produk
{
  protected
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  
  public function getJudul()
  {
    
    return $this->judul;
  }
  
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }
  
  public function setDiskon($diskon)
  {
    $this->diskon = $diskon;
  }
  
  public function getDiskon()
  {
    return $this->diskon;
  }
  
  public function setHarga($harga)
  {
    $this->harga = $harga;
  }
  
  public function setJudul($judul)
  {
    if (!is_string($judul)) {
      throw new Exception("Error Processing Request");
    }
    $this->judul = $judul;
  }
  
  public function getPenulis()
  {
    return $this->penulis;
  }
  
  public function getPenerbit()
  {
    return $this->penerbit;
  }
  
  public function setPenulis($penulis)
  {
    if (!is_string($penulis)) {
      throw new Exception("Error Processing Request");
    }
    $this->$penulis = $penulis;
  }
  
  public function setPenerbit($penerbit)
  {
    if (!is_string($penerbit)) {
      throw new Exception("Error Processing Request");
    }
    $this->$penerbit = $penerbit;
  }
  
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }
    
  abstract public function getInfo();
}