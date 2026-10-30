<?php

require('./Property-Constant.php');
use pbo\marketplace\produk;

//  objek
$produk = new produk('p0001','laptop',1000000,5);
//hasil
echo"produk: Rp." .$produk->nama;
echo"<br>";
echo"Harga: Rp." .$produk->harga;
echo"<br>";
echo"stok: Rp." .$produk->stock;
echo"<br>";
echo"Pajak: Rp." .$produk->pajak()."%";
echo"<br>";
echo"<br>";
echo"Total Harga setelah pajak: Rp." .$produk->total();
?>