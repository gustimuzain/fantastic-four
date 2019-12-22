<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="">Data Mobil</h2>
<a class="btn btn-primary mb-3 mt-3" href="?hal=mobilTambah">Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Foto</th>
         <th>Nama</th>
         <th>Harga</th>
         <th>Tahun</th>
         <th>Plat</th>
         <th>Tipe</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM mobil LEFT JOIN kategori_mobil ON mobil.kategori_id=kategori_mobil.kategori_id ORDER BY mobil.kategori_id DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><img src="image/<?= $data['foto'] ?>" width="100"></td>
         <td><?= $data['nama'] ?></td>
         <td>Rp<?= $data['harga'] ?></td>
         <td><?= $data['tahun'] ?></td>
         <td><?= $data['plat'] ?></td>
         <td><?= $data['tipe'] ?></td>
         <td>
            <a class="btn btn-success" href="?hal=mobilEdit&id=<?= $data['mobil_id'] ?>"> Edit </a>
            <a class="btn btn-danger" href="?hal=mobilHapus&id=<?= $data['mobil_id'] ?>&foto=<?= $data['foto'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>