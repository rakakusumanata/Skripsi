<?php

$id_profil_bpbd=$_GET['id_profil_bpbd'];
?>

<div class="row">
    <div class="col-sm-12">
	  <div class="well">      
	<?php
	include '../login/koneksi.php';
	$id_profil_bpbd = $_GET['id_profil_bpbd'];
	$data = mysqli_query($koneksi,"select * from profil_bpbd where id_profil_bpbd='$id_profil_bpbd'");
	while($d = mysqli_fetch_array($data)){
	?>
    <form method="post" action="update_kriteria.php">
       
        <div class="col-md-12 text-center">
            <h2><?php echo $d['judul_profil'];?></h2>
        </div>
         
        <div class="col-sm-12" style="text-align: center;">
            <img src="../uploaded/profil/<?php echo $d['gambar'];?>">
        </div>
        <div class="col-md-12 text-right">
            <h5><?php echo $d['tanggal'];?></h5>
        </div><br><br>
        <div class="font-icon-detail text-justify"><p>
             <h5><p><?php echo $d['isi'];?><p></h5></p>
        </div>
            <button type="button" onclick="location.href='?hal=profil'" class="btn btn-success">Kembali</button>
        </form>
	<?php 
	}
	?>

          
      </div>
  </div> 
</div>
