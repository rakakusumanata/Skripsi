
<?php
$kode=$_GET['id'];
extract(ArrayData($koneksi,"berita","id_berita='$kode'"));
?>
        
    <div class="row narrow">
        <div class="col-full s-content__header">
            <h2 class="display-1 display-1--with-line-sep"> <?php echo $judul_berita;?> </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-full s-content__main">
            <form>
                <div style="text-align: center;">
                    <img src="uploaded/berita/<?php echo $gambar;?>" height="800">
                    <h5>Tanggal Post : <?php echo date('d-m-Y', strtotime($tanggal));?></h5>
                </div>
                <div class="font-icon-detail text-justify"><p>
                     <h5><p><?php echo $isi;?><p></h5></p>
                </div>
                <button type="button" onclick="location.href='index.php?hal=berita'" class="btn btn-success">Kembali</button>
            </form>
        </div> <!-- s-content__main -->
    </div> <!-- end row -->