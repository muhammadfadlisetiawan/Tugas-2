<?php

    function print_deret_fibonacci($jumlah){
        $angka_sebelumnya=0;
        $angka_sekarang=1;
  
        $hasil = "$angka_sekarang";
 
        for ($i=0; $i<$jumlah-1; $i++){
            $output = $angka_sekarang + $angka_sebelumnya;
            $hasil = $hasil." $output";
  
            $angka_sebelumnya = $angka_sekarang;
            $angka_sekarang = $output;
        }
        return $hasil;
    }
  
    function piramida_fibonacci($tingkat){
        for ($i=1; $i<$tingkat+1; $i++){
            echo print_deret_fibonacci($i);
            echo "\n";
        }
    }
  
    piramida_fibonacci(20);
?>
