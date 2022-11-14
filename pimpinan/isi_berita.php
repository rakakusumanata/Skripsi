
        <div class="row">
          <div class="col-xs-11">
		     <div class="well">      
        	<?php
        	$id_berita = $_GET['id_berita'];
        	$data = mysqli_query($koneksi,"select * from berita where id_berita='$id_berita'");
        	while($d = mysqli_fetch_array($data)){
        	?>
                <!-- <form method="post" action="update_kriteria.php"> -->
                   
                    <div class="col-md-12 text-center">
                        <h2><?php echo $d['judul_berita'];?></h2>
                    </div>
                     
                    <div style="text-align: center;">
                        <img src="../operator/gambar/<?php echo $d['gambar'];?>" height="500">
                    </div>
                    <div class="col-md-10 text-right">
                    <h5><?php echo $d['tanggal'];?></h5>
                    </div>
                    <br><br>
                    <div class="font-icon-detail text-justify"><p>
                         <h5><p><?php echo $d['isi'];?><p></h5></p>
                    </div>
                           
                    <!-- <button type="button" onclick="location.href='berita.php'" class="btn btn-success">Kembali</button> -->
                    <a class="btn btn-warning" href="?hal=berita"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
                <!-- </form> -->
        	<?php 
        	}
        	?>
 
              
             </div>
          </div>     
    
        </div>
