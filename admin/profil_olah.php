<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"profil_bpbd","id_profil_bpbd='$kode'"));
    $a = "Edit Data";

}else{
    $id_profil_bpbd=KodeOtomatis($koneksi,"profil_bpbd","id_profil_bpbd","","","");
    $judul_profil="";
    $isi="";
    $tanggal="";
    $gambar="";
    $a = "Tambah Data";
}
?>

<div class="row">
  <div class="col-sm-12">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="profil_proses.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $id_profil_bpbd; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="un">Judul Profil BPBD</label>
              <input type="text" class="form-control" id="judul_profil" name="judul_profil" value="<?php echo $judul_profil; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Isi Berita</label>
              <textarea name="isi" rows="10" class="ckeditor" id="ckedtor"><?php echo $isi; ?>
              </textarea>
            </div>
            <div class="form-group">
               <label for="un">Gambar</label><br>


                <?php 
                if(isset($_GET['id'])){
                ?>
                  <img width="155px" height="100px" src="../uploaded/profil/small_<?php echo $gambar;?>"><br><br>
                <?php 
                }?>
                  <input type="file" name="gambar" >
                <?php 
                if(isset($_GET['id'])){
                ?>
                    <p class="help-block">Kosongkan, Jika tidak diganti..</p>
                <?php
                }?>


            </div>
            <a href="?hal=profil" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>
