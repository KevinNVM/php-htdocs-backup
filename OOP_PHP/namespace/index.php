<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
// $produk2 = new Game("Uncharted", "Neil Duckman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk( $produk1 );
// $cetakProduk->tambahProduk( $produk2 );


// echo $cetakProduk->cetak();

// echo '<br class="user-select-none">';
// echo '<br class="user-select-none">';

// echo '<hr>';

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser;
echo '<br class="user-select-none">';
new ProdukUser;


