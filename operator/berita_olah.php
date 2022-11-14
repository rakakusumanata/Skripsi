<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"berita","id_berita='$kode'"));
    $a = "Edit Data";

}else{
    $id_berita=KodeOtomatis($koneksi,"berita","id_berita","B","1","");
    $judul_berita="";
    $isi="";
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
      
          <form method="post" action="berita_proses.php" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" name="kode" value="<?php echo $id_berita; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="un">Judul Berita</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $judul_berita; ?>" required>
            </div>
            <div class="form-group">
              <label for="un">Isi Berita</label>
              <textarea name="isi" rows="10" class="ckeditor" id="ckedtor"><?php echo $isi; ?></textarea>
            </div>
            <div class="form-group">
               <label for="un">Gambar</label><br>

               <?php 
                if(isset($_GET['id'])){
                ?>
                  <img width="155px" height="100px" src="../uploaded/berita/small_<?php echo $gambar;?>"><br><br>
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
            <a href="?hal=berita" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>
