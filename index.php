<?php

require('./Property-Constant.php');
use pbo\marketplace\produk;

//  objek
$produk = new produk();

$produk -> setKode('P0001') ->setNama('Laptop') ->setHarga('1000000')->setStok('5');

//hasil
echo"produk: Rp." .$produk->getNama();
echo"<br>";
echo"Harga: Rp." .$produk->getHarga();
echo"<br>";
echo"stok: " .$produk->getStok();
echo"<br>";
echo"Pajak: Rp." .$produk->pajak()."%";
echo"<br>";
echo"<br>";
echo"Total Harga setelah pajak: Rp." .$produk->total();
?>