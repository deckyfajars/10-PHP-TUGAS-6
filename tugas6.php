<?php
  $hasilHabib = 21;
  $hasilAji = 4 + $hasilHabib;
  $hasilBintan = 3 + $hasilAji;
  echo "===================================<br>";
  echo "
    Usia Habib = $hasilHabib <br>
    Usia Aji = $hasilAji <br>
    Usia Bintan = $hasilBintan <br>
  ";
  echo "===================================<br>";

  $jambu = 15000;
  $dus = 6;
  $perdus = 5;
  $jual = 2000;
  $hasil = ($dus*$perdus)*$jambu;
  $hasil2 = 2 * $jual;
  $hasil3 = $hasil+$hasil2;
  echo "
    Harga Jambu = Rp. $jambu /Kg<br>
    Harga Kardus = Rp. $jual /pcs<br>
    Total Penjualan (Dus dan Jambu) = Rp. $hasil3 <br>
  ";
  echo "===================================";

 ?>
