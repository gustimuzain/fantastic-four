<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="">Data Mobil</h2>
<a class="btn btn-primary mb-3 mt-3" href="?hal=mobilTambah"><span class="input-group-addon"><i class="fa fa-plus"></i></span> Tambah</a>

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
         <th>Transmisi</th>
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
         <td>Rp<?= number_format($data['harga'],0,',','.');  ?></td>
         <td><?= $data['tahun'] ?></td>
         <td><?= $data['plat'] ?></td>
         <td><?= $data['tipe'] ?></td>
         <td><?= $data['transmisi'] ?></td>
         <td>
            <a class="btn btn-success" href="?hal=mobilEdit&id=<?= $data['mobil_id'] ?>"><span class="input-group-addon"><i class="fa fa-edit"></i></span> Edit </a>
            <a class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus <?php echo $data['nama']?>?')" 
             href="?hal=mobilHapus&id=<?= $data['mobil_id'] ?>&foto=<?= $data['foto'] ?>"><span class="input-group-addon"><i class="fa fa-trash"></i></span> Hapus </a>
         </td>
     </tr>
   <?php
      }
   ?>
   </tbody>
</table>