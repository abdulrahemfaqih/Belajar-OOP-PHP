<?php

class Produk {
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  } 

  public function getLabel() {
    return "{$this->penulis}, {$this->penerbit}";
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000);
$produk2 = new Produk("Free Fire", "Abdul Rahem Faqih", "Garena", "free");

echo "Komik: " . $produk1->getLabel() . "<br>";
echo "Game: " . $produk2->getLabel();
