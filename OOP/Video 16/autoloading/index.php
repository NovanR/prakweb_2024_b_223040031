<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000, 100);
$produk2 = new Game("God of war","Matt Sophos","Sony Interactive Entertainment",500000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


