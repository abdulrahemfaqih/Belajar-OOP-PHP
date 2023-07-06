<?php

class Produk {
   private $judul;
   private $penulis;
   private $penerbit;
   private $harga;
   private $diskon = 0;


   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
   }

   public function getLabel() {
      return "{$this->penulis}, {$this->penerbit}";
   }

   public function setDiskon($diskon) {
      return $this->diskon = $diskon;
   }

   public function setJudul($judul) {
      if (!is_string($judul)) {
         throw new Exception("judul harus berupa string");
      }
      return $this->judul = $judul;
   }

   public function setPenulis($penulis) {
      if (!is_string($penulis)) {
         throw new Exception("penulis harus berupa string");
      }
      return $this->penulis = $penulis;
   }

   public function setHarga($harga) {
      if (!is_int($harga)) {
         throw new Exception("harga harus berupa integer");
      }
      return $this->harga = $harga;
   }

   public function setPenerbit($penerbit) {
      if (!is_string($penerbit)) {
         throw new Exception("penerbit harus berupa string");
      }
      return $this->penerbit = $penerbit;
   }

   public function getJudul() {
      return $this->judul;
   }

   public function getPenulis() {
      return $this->penulis;
   }

   public function getPenerbit() {
      return $this->penerbit;
   }

   public function getHarga() {
      return 'Rp. ' . $this->harga - ($this->harga * ($this->diskon / 100));
   }

   public function getDiskon() {
      $this->diskon;
   }

   public function getInfoProduk() {
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
   }
}


class Komik extends Produk {
   public $jmlHalaman;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
   }

   public function getInfoProduk() {
      $str = "Komik :" . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";
      return $str;
   }
}

class Game extends Produk {
   public $waktuMain;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->waktuMain = $waktuMain;
   }

   public function getInfoProduk() {
      $str = "Game :" . parent::getInfoProduk() . "- {$this->waktuMain} Jam";
      return $str;
   }
}



class CetakInfoProduct {
   public function cetak(Produk $produk) {
      $str = "<br>{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
      return $str;
   }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 1000);
$produk2 = new Game("Free Fire", "Abdul Rahem Faqih", "Garena", 10000, 200000);

echo "Komik: " . $produk1->getLabel() . "<br>";
echo "Game: " . $produk2->getLabel() . "<br>";
echo "<hr>";
$infoProduk1 = new CetakInfoProduct();
echo $produk1->getInfoProduk();
echo '<br>';
echo $produk2->getInfoProduk();
echo '<br>';
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";
$produk1->setJudul("One Piece");
echo $produk1->getJudul();
echo "<hr>";

$produk1->setHarga(5000);
echo $produk1->getHarga();
$produk1->setDiskon(50);
echo " -> " . $produk1->getHarga();
