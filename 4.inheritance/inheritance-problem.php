<?php

class Produk {
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  public $jmlHalaman;
  public $waktuMain;
  public $tipe;


  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
    $this->tipe = $tipe;

  } 

  public function getLabel() {
    return "{$this->penulis}, {$this->penerbit}";
  }

  public function cetakInfoLengkap() {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else {
      $str .= " ~ {$this->waktuMain} Jam.";
    }

    return $str;
  }
}

class CetakInfoProduct {
  public function cetak(Produk $produk) {
    $str = "<br>{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100, 0, "Komik");
$produk2 = new Produk("Free Fire", "Abdul Rahem Faqih", "Garena", 0, 0, 0, "Game");

echo "Komik: " . $produk1->getLabel() . "<br>";
echo "Game: " . $produk2->getLabel();

$infoProduk1 = new CetakInfoProduct();
echo $infoProduk1->cetak($produk1);

echo $produk1->cetakInfoLengkap();


