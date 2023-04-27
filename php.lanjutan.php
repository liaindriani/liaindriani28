<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
  <h1>Hallo Dunia</h1> 
  <?php
      $tipe_data = "santai aja dulu"; // tipe data string
      $tipe_data = 5; // tipe data integer
  ?> 

  <h2><?=$tipe_data?></h2>

  <?php
      $pecahan = 5.85; // tipe data float/pecahan 
  ?>

<h2>saya menampilkan nilai pecahan ini <?=$pecahan?></h2>

  <?php
      $perbandingan = true; // tipe data boolean

      echo $perbandingan; 
      echo  "<br/>";
  ?>

<?php
      $provinsi[0] = "Riau";
      $provinsi[1] = "Jawa Barat";
      $provinsi[2] = "IKN";
     

      echo var_dump($provinsi);

      $hasil = 5*10;

      echo ++$hasil;
      echo "<br/>";
      echo $hasil;
      echo "<br/>";

      define ("satu" ,1);

      echo satu;

      echo "<br/>";

      if($perbandingan == true) {
        echo "ucapkan selamat pagi";
      }else {
        echo "selamat pagi";
      }

      echo "<br/>";
     /* $perbandingan ='';
      switch($perbandingan) { // percabangan
        case true;
             $pesan = "soto ayam";
        break;
        case false;
             $pesan = "ayam goreng";
        break;
        default;
             $pesan = "ayam geprek";
        

      }
      echo $pesan*/

     
  ?>



</body>
</html>