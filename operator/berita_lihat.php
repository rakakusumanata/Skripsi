<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"berita","id_berita='$kode'"));
    $a = "Lihat Berita";
}
?>

<div class="row">
  <div class="col-sm-12">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form>
             <div class="col-md-12 text-center">
                <h2><?php echo $judul_berita;?></h2>
            </div>
             
                <div style="text-align: center;">
                    <img src="../uploaded/berita/<?php echo $gambar;?>" height="500">
                </div>
            <div class="col-md-12 text-right">
                <h5>Tanggal Post : <?php echo $tanggal;?></h5>
            </div><br><br>
            <div class="font-icon-detail text-justify"><p>
                <h5><p><?php echo $isi;?><p></h5></p>
            </div>
                <a href="?hal=berita" class="btn btn-success"></i> Kembali</a>
          </form>
        
    </div>
  </div>
</div>
