<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"kriteria","id_kriteria='$kode'"));
    $a = "Edit Data";

}else{
    $id_kriteria=KodeOtomatis($koneksi,"kriteria","id_kriteria","","","","");
    $nama_kriteria="";
    $satuan="";
    $bobot_kriteria="";
    $tipe_kriteria="";
    $a = "Tambah Data";
}
?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="kriteria_proses.php">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" name="kode" value="<?php echo $id_kriteria; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nl">Nama Kriteria</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $nama_kriteria; ?>" required>
            </div>
              <div class="form-group">
              <label for="nl">Nama Satuan</label>
              <input type="text" class="form-control" name="satuan" value="<?php echo $satuan; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Bobot Kriteria</label>
              <input type="text" class="form-control" name="bobot" value="<?php echo $bobot_kriteria; ?>" required>
            </div>
            <div class="form-group">
              <label for="up">Tipe Kriteria</label>
               <select type="text" class="form-control" name="tipe" required>
                  <option value="Benefit" <?php echo pilihselect($tipe_kriteria,"Benefit") ?>>Benefit</option>
                  <option value="Cost" <?php echo pilihselect($tipe_kriteria,"Cost") ?>>Cost</option>
                </select>
            </div>
            <a href="?hal=kriteria" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>

