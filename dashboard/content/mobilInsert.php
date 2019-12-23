<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   $error = "";
   if($foto == ""){
      $query = mysqli_query($con, "INSERT INTO mobil SET
            nama = '$_POST[nama]',
            harga = '$_POST[harga]',
            tahun = '$_POST[tahun]',
            plat = '$_POST[plat]',
            transmisi = '$_POST[transmisi]',
            kategori_id = '$_POST[kategori]'
      ");
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 1000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 1MB)!";
      }else{
         move_uploaded_file($lokasi, "image/".$foto);
         $query = mysqli_query($con, "INSERT INTO mobil SET
            foto = '$foto',
            nama = '$_POST[nama]',
            harga = '$_POST[harga]',
            tahun = '$_POST[tahun]',
            plat = '$_POST[plat]',
            transmisi = '$_POST[transmisi]',
            kategori_id = '$_POST[kategori]'
         ");
      }
   }

   if($error != ""){
      echo $error;
      echo "<meta http-equiv='refresh' content='2; url=?hal=mobilTambah'>";
   }elseif($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=mobil'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
   }
?>