<?php
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