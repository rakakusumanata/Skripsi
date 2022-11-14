<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"kriteria_desa","id_kriteria_desa='$kode'"));
    $a = "Edit Data";

}else{
    $id_kriteria_desa=KodeOtomatis($koneksi,"kriteria_desa","id_kriteria_desa","","","");
    $id_desa="";
    $id_kriteria="";
    $nilai="";
    $nilai_konversi="";
    $a = "Tambah Data";
}
?>

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="kriteriadesa_proses.php">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" name="kode" value="<?php echo $id_kriteria_desa; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nl">Nama Desa</label>
              <select type="text" class="form-control" name="desa">
              <?php
                $query="SELECT * FROM desa ORDER BY nama_desa";
                $result=$koneksi->query($query);
                while ($data=mysqli_fetch_assoc($result)) {
                  echo '<option value='.$data['id_desa'].' '.pilihselect($id_desa,$data['id_desa']).'>'.$data['nama_desa'].'</option>';
                }
              ?>
              </select>
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
              <label for="un">Nilai</label>
              <input type="number" class="form-control" name="nilai" value="<?php echo $nilai; ?>" required>
            </div>

            <?php
            if (isset($_GET['id'])){
            ?>
           
            <?php }?>

            <a href="?hal=kriteriadesa" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>

