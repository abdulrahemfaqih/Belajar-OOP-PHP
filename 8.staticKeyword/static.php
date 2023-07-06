<?php


class ContohStatic {
   public static $angka = 0;
   public static $greeting = "Hi, Welcome ";

   public static function sayHi($name) {
      return self::$greeting . $name . " anda telah berkunjung " . self::$angka++ . " kali";
   }
}


class Contoh {
   public static $angka = 0;
   public $greeting = "Hi, Welcome ";

   public function sayHi($name) {
      return $this->greeting . $name . " anda telah berkunjung " . self::$angka++ . " kali";
   }
}

function nextLine() {
   echo "<br>";
}
function line() {
   echo "<div style='border:2px solid red;margin:1rem 0 0 0;width:400px;'></div>";
}


echo ContohStatic::sayHi("Faqih");
nextLine();
echo ContohStatic::sayHi("Faqih");
nextLine();
echo ContohStatic::sayHi("Faqih");
line();
$obj1 = new Contoh();
nextLine();
echo $obj1->sayHi("faqih");
nextLine();
echo $obj1->sayHi("faqih");
nextLine();
echo $obj1->sayHi("faqih");
line();
$obj2 = new Contoh();
nextLine();
echo $obj1->sayHi("faqih");
nextLine();
echo $obj1->sayHi("faqih");
nextLine();
echo $obj1->sayHi("faqih");




