<?php
    $kode=$_SESSION['opr'];
    extract(ArrayData($koneksi,"pengguna","id='$kode'"));
    $a = "Edit Pengguna";
?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="up_profil_proses.php">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" name="kode" value="<?php echo $id; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nl">Nama Lengkap</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
              <label for="pw">Password</label>
              <input type="password" class="form-control" name="password" value="">
            </div>
            <div class="form-group">
              <label for="up">Jabatan</label>
               <select class="form-control" id="level" name="level" disabled>
                  <option value="admin" <?php echo pilihselect($level,"Admin") ?>>Admin</option>
                  <option value="operator" <?php echo pilihselect($level,"operator") ?>>Operator</option>
                  <option value="pimpinan" <?php echo pilihselect($level,"pimpinan") ?>>Pimpinan</option>
                </select>
            </div>
            <a href="?hal=beranda" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="up_profil" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>
