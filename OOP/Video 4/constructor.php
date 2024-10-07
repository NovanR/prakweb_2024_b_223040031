<?php 


class Produk {
    
    public $judul = "Judul",
           $penulis = "Penulis",
           $penerbit = "Penerbit",
           $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// $produk2 = new Produk();
// $produk2->judul = "God of war";
// $produk2->tambahProperty = "Ahihihi";

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("God of war","Matt Sophos","Sony Interactive Entertainment",500000);

echo "Komik: ". $produk1->getLabel();
echo "<br>";
echo "Game: ".  $produk2->getLabel();

