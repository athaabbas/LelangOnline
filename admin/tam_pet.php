<?php include "navbar.php" ?>

<div class="page-header">
  <h3 class="page-title">Data Petugas</h3>
</div>

<div class=" grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Daftar Petugas</h4>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Level</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php 
          include "../koneksi.php";
          $qry_pet=mysqli_query($conn,"select * from petugas");
          $no=0;
          while($data=mysqli_fetch_array($qry_pet)) {
          $no++; ?>
          <tr>
            <td><?=$no?>.</td>
            <td><?=$data['nama_petugas']?></td>
            <td><?=$data['username']?></td>
            <td><?=$data['level']?></td>
            <td>
              <a href="ph_petugas.php?id_petugas=<?=$data['id']?>"
              onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
              class="btn btn-danger">
                <i class="mdi mdi-delete"></i>
              </a>
            </td>
          </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include "footer.php" ?>