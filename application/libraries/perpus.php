<?php

class perpus
{
    function cek()
    {
        $bukuDipinjam=150;
        $bukuTersedia=300;
        $bukuRusak=100;
        $bukuTidakKembali=200;
        
        echo "Total buku keseluruhan " . ($bukuDipinjam + $bukuTersedia + $bukuRusak + $bukuTidakKembali);
        echo "<br>";    
        echo "Total buku tersedia " . ($bukuTersedia + 75);
        echo "<br>";
        echo "Total buku keseluruhan jika 20% buku rusak dibuang " . ($bukuDipinjam + $bukuTersedia + ($bukuRusak*0.8) + $bukuTidakKembali);
    }
}
?>