<?php

interface infoProduk
{
   public function getInfoProduk();
}

abstract class Produk
{
   protected $judul;
   protected $penulis;
   protected $penerbit;
   protected $harga;
   protected $diskon = 0;


   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
   {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
   }

   public function getLabel()
   {
      return "{$this->penulis}, {$this->penerbit}";
   }

   public function setDiskon($diskon)
   {
      return $this->diskon = $diskon;
   }

   public function setJudul($judul)
   {
      if (!is_string($judul)) {
         throw new Exception("judul harus berupa string");
      }
      return $this->judul = $judul;
   }

   public function setPenulis($penulis)
   {
      if (!is_string($penulis)) {
         throw new Exception("penulis harus berupa string");
      }
      return $this->penulis = $penulis;
   }

   public function setHarga($harga)
   {
      if (!is_int($harga)) {
         throw new Exception("harga harus berupa integer");
      }
      return $this->harga = $harga;
   }

   public function setPenerbit($penerbit)
   {
      if (!is_string($penerbit)) {
         throw new Exception("penerbit harus berupa string");
      }
      return $this->penerbit = $penerbit;
   }

   public function getJudul()
   {
      return $this->judul;
   }

   public function getPenulis()
   {
      return $this->penulis;
   }

   public function getPenerbit()
   {
      return $this->penerbit;
   }

   public function getHarga()
   {
      return 'Rp. ' . $this->harga - ($this->harga * ($this->diskon / 100));
   }

   public function getDiskon()
   {
      $this->diskon;
   }

   abstract public function getInfo();
}


class Komik extends Produk implements infoProduk
{
   public $jmlHalaman;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->jmlHalaman = $jmlHalaman;
   }

   public function getInfo()
   {
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
   }

   public function getInfoProduk()
   {
      $str = "Komik :" . $this->getInfo() . " - {$this->jmlHalaman} Halaman";
      return $str;
   }
}

class Game extends Produk implements infoProduk
{
   public $waktuMain;

   public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
   {
      parent::__construct($judul, $penulis, $penerbit, $harga);
      $this->waktuMain = $waktuMain;
   }

   public function getInfo()
   {
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      return $str;
   }

   public function getInfoProduk()
   {
      $str = "Game :" . $this->getInfo() . "- {$this->waktuMain} Jam";
      return $str;
   }
}



class CetakInfoProduct
{
   public $daftarProduk = [];

   public function tambahProduk(Produk $produk)
   {
      $this->daftarProduk[] = $produk;
   }

   public function cetak()
   {
      $str = "Daftar Produk :  <br>";
      $i = 1;
      foreach ($this->daftarProduk as $produk) {
         $str .= "$i.  {$produk->getInfoProduk()} <br>";
         $i++;
      }
      return $str;
   }
}


$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 1000);
$produk2 = new Game("Free Fire", "Abdul Rahem Faqih", "Garena", 10000, 200000);

$cetakProduk = new CetakInfoProduct();
for ($i = 1; $i <= 2; $i++) {
   $produkVariable = "produk" . $i;
   $cetakProduk->tambahProduk($$produkVariable);
}
echo $cetakProduk->cetak();
