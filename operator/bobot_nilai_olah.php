<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"bobot_nilai","id_bobot='$kode'"));
    $a = "Edit Data";

}else{
    $id_bobot=KodeOtomatis($koneksi,"bobot_nilai","id_bobot","","","");
    $id_kriteria="";
    $nilai_awal="";
    $nilai_akhir="";
    $bobot_nilai="";
    $a = "Tambah Data";
}
?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="bobot_nilai_proses.php">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" name="kode" value="<?php echo $id_bobot; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="un">Nama Kriteria</label>
              <select type="text" class="form-control" name="kriteria">
              <?php
                $query="SELECT * FROM kriteria ORDER BY nama_kriteria";
                $result=$koneksi->query($query);
                while ($data=mysqli_fetch_assoc($result)) {
                  echo '<option value='.$data['id_kriteria'].' '.pilihselect($id_kriteria,$data['id_kriteria']).'>'.$data['nama_kriteria'].'</option>';
                }
              ?>
              </select>
            </div>
            <div class="form-group">
              <label for="nl">Nilai Awal</label>
              <input type="text" class="form-control" name="nawal" value="<?php echo $nilai_awal; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Nilai Akhir</label>
              <input type="text" class="form-control" name="nakhir" value="<?php echo $nilai_akhir; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Bobot Nilai</label>
              <input type="text" class="form-control" name="bobot" value="<?php echo $bobot_nilai; ?>" required>
            </div>
            <a href="?hal=bobot_nilai" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>

