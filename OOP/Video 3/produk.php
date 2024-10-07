<?php 


class Produk {
    
    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "God of war";
// $produk2->tambahProperty = "Ahihihi";

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

$produk4 = new Produk();
$produk4->judul = "God of war";
$produk4->penulis = "Matt Sophos";
$produk4->penerbit = "Sony Interactive Entertainment";
$produk4->harga = 500000;

echo "Komik: ". $produk3->getLabel();
echo "<br>";
echo "Game: ". $produk4->getLabel();

