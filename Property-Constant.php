<?php

class produk {
    //Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stock;
    public const PAJAK = 0.11;
}
//  objek
$produk = new produk();
$produk->kode = 'p0001';
$produk->nama = 'Laptop';
$produk->harga = '10000000';
$produk->stok = '5';

//hitung pajak
$pajak = produk :: PAJAK * 100;
$jumlahpajak = $produk->harga * produk::PAJAK;

//total
$total = $produk->harga + $jumlahpajak ;

//hasil
echo"produk: Rp." .$produk->nama;
echo"<br>";
echo"Harga: Rp." .$produk->harga;
echo"<br>";
echo"stok: Rp." .$produk->stok;
echo"<br>";
echo"Pajak: Rp." .$pajak."%";
echo"<br>";
echo"<br>";
echo"Total Harga setelah pajak: Rp." .$total;
