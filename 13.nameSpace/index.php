<?php

require_once "App/init.php";

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 10000, 1000);
// $produk2 = new Game("Free Fire", "Abdul Rahem Faqih", "Garena", 10000, 200000);

// $cetakProduk = new CetakInfoProduct();
// for ($i = 1; $i <= 2; $i++) {
//    $produkVariable = "produk" . $i;
//    $cetakProduk->tambahProduk($$produkVariable);
// }
// echo $cetakProduk->cetak();

// alias
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

$user1 = new ProdukUser();
echo "<br>";
$user2 = new ServiceUser();



