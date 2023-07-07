<?php
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