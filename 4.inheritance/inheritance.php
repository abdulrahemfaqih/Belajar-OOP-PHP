<?php

class Produk
{
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  public $jmlHalaman;
  public $waktuMain;
  public $tipe;


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

  public function getLabel()
  {
    return "{$this->penulis}, {$this->penerbit}";
  }
  // public function getInfoProduk()
  // {
  //   $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
  //   return $str;
  // }
}


class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
    return $str;
  }
}

class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam";
    return $str;
  }
}



class CetakInfoProduct
{
  public function cetak(Produk $produk)
  {
    $str = "<br>{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 100, 0, "Komik");
$produk2 = new Game("Free Fire", "Abdul Rahem Faqih", "Garena", 0, 0, 0, "Game");

echo "Komik: " . $produk1->getLabel() . "<br>";
echo "Game: " . $produk2->getLabel() . "<br>";
echo "<hr>";
$infoProduk1 = new CetakInfoProduct();
echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
