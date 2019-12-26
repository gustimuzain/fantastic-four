<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="">Data Kategori</h2>
<a class="btn btn-primary mb-3 mt-3" href="?hal=kategoriTambah"><span class="input-group-addon"><i class="fa fa-plus"></i></span> Tambah</a>

<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Tipe</th>
         <th>Jumlah</th>
         <th>Bagasi</th>
      </tr>
   </thead>
   <tbody>
<?php
   $query = mysqli_query($con, "SELECT * FROM kategori_mobil ORDER BY kategori_id DESC");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['tipe'] ?></td>
         <td><?= $data['jumlah'] ?></td>
         <td><?= $data['bagasi'] ?></td>
         <td>
            <a class="btn btn-success" href="?hal=kategoriEdit&id=<?= $data['kategori_id'] ?>"><span class="input-group-addon"><i class="fa fa-edit"></i></span> Edit </a>
            <a class="btn btn-danger" href="?hal=kategoriHapus&id=<?= $data['kategori_id'] ?>"><span class="input-group-addon"><i class="fa fa-trash"></i></span> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>