<?php

// class ContohStatic
// {
//   public static $angka = 1;

//   public static function halo()
//   {
//     return "Halo " . self::$angka++;
//   }
// }

// echo ContohStatic::$angka;
// echo '<br class="user-select-none">';
// echo ContohStatic::halo();
// echo '<br class="user-select-none">';
// echo ContohStatic::halo();


class Contoh
{
  public static $angka = 1;

  public function halo()
  {
    return "Halo " . self::$angka++ . "<br>";
  }
}

$obj = new Contoh;

echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo '<br class="user-select-none">';
echo '<br class="user-select-none">';

$obj2 = new Contoh;

echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
