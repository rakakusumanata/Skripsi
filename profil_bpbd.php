 
<?php
$kode=$_GET['id'];
extract(ArrayData($koneksi,"profil_bpbd","id_profil_bpbd='$kode'"));
?>
        
    <div class="row narrow">
        <div class="col-full s-content__header">
            <h2 class="display-1 display-1--with-line-sep"> <?php echo $judul_profil;?> </h2>
        </div>
    </div>
    <div class="row">
        <div class="col-full s-content__main">
            <form>
             
                <div style="text-align: center;">
                    <img src="uploaded/profil/<?php echo $gambar;?>" height="800">
                </div>
               <!-- <div class="col-sm-12">
                    <h5><?php echo $tanggal;?></h5>
                </div><br><br> -->
                <div class="font-icon-detail text-justify">
                    <p><h5><?php echo $isi;?></h5></p>
                </div>
                <button type="button" onclick="location.href='index.php'" class="btn btn-success">Kembali</button>
            </form>
        </div> <!-- s-content__main -->
    </div> <!-- end row -->