<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"pengguna","id='$kode'"));
    $a = "Edit Data";

}else{
    $id=KodeOtomatis($koneksi,"pengguna","id","","","","","");
    $nama="";
    $username="";
    $alamat="";
    $email="";
    $password="";
    $level="";
    $a = "Tambah Data";
}
?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="pengguna_proses.php">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $id; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nl">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="<?php echo $username; ?>" required>
            </div>
               <div class="form-group">
              <label for="un">Alamat</label>
              <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
            </div>
               <div class="form-group">
              <label for="un">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
              <label for="pw">Password</label>
              <input type="password" class="form-control" id="password" name="password" value="">
            </div>
            <div class="form-group">
              <label for="up">Jabatan</label>
               <select type="level" class="form-control" id="level" name="level" required>
                  <option value="admin" <?php echo pilihselect($level,"Admin") ?>>Admin</option>
                  <option value="operator" <?php echo pilihselect($level,"operator") ?>>Operator</option>
                  <option value="pimpinan" <?php echo pilihselect($level,"pimpinan") ?>>Pimpinan</option>
                </select>
            </div>
            <a href="?hal=pengguna" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>
