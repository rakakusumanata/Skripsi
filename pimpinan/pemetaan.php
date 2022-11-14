<?php
$id_hitung=$_GET['id'];

?>
        
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBXMNHIbmIKC4y_QUQpQdyhcTiDIKuCx4U"></script>
<script>
    
var marker;
var labels = ["1","2","3","4","5","6","7","8","9","10",
    "11","12","13","14","15","16","17","18","19","20",
    "21","22","23","24","25","26","27","28","29","30",
    "31","32","33","34","35","36","37","38","39","40",
     "41","42","43","44","45","46","47","48","49","50"];
var labelIndex = 0;
  function initialize() {
      
    // Variabel untuk menyimpan informasi (desc)
    var infoWindow = new google.maps.InfoWindow;
    
    //  Variabel untuk menyimpan peta Roadmap
    var mapOptions = {
      mapTypeId: google.maps.MapTypeId.SATELLITE
    } 
    
    // Pembuatan petanya
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          
    // Variabel untuk menyimpan batas kordinat
    var bounds = new google.maps.LatLngBounds();

    // Pengambilan data dari database
    <?php
        include '../login/koneksi.php';
        $no=1;
       $query = mysqli_query($koneksi,"SELECT * FROM hasil H JOIN desa D ON H.id_desa=D.id_desa WHERE id_perhitungan='$id_hitung'");
        while ($data = mysqli_fetch_array($query))
        {
            $urut=$no++;
            $iddesa = $data['id_desa'];
            $nmdesa = $data['nama_desa'];
            $nmkec = $data['kecamatan'];
            $nakhir = $data['nilai_hasil'];
            $lat = $data['lat'];
            $lon = $data['lng'];
            
            $nilai_desa="";
            $query2 = mysqli_query($koneksi,"SELECT * FROM kriteria_desa KD JOIN kriteria K ON KD.id_kriteria=K.id_kriteria WHERE id_desa='$iddesa'");
            while ($data2 = mysqli_fetch_array($query2))
            {
              $nm_kri = $data2['nama_kriteria'];
              $nilai_kri = $data2['nilai'];
              $satuan = $data2['satuan'];
              $nilai_desa=$nilai_desa."<br>".$nm_kri.": ".$nilai_kri." $satuan";
            }

            echo ("addMarker($lat, $lon,'<b>"
                    . "Rangking: $urut ($nakhir),<br> "
                    . "Desa: $nmdesa,<br> "
                    . "Kecamatan: $nmkec, "
                    . "$nilai_desa </b>');\n");                        
        }
      ?>
    // Proses membuat marker 
    function addMarker(lat, lng, info) {
        var lokasi = new google.maps.LatLng(lat, lng);
        bounds.extend(lokasi);
        var marker = new google.maps.Marker({
            
          label: labels[labelIndex++ % labels.length],
            map: map,
            position: lokasi
        });       
        map.fitBounds(bounds);
        bindInfoWindow(marker, map, infoWindow, info);
     }
    
    // Menampilkan informasi pada masing-masing marker yang diklik
    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    }
  google.maps.event.addDomListener(window, 'load', initialize);

</script>



<div class="well">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3><b>Peta Daerah Bantul</b></h3>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div id="map-canvas" style="width: 100%; height: 520px;"></div>
            </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12" align="center">
            <!-- <a class="btn btn-warning" href="?page=perhitungan"><span class="fa fa-arrow-circle-left"></span> Kembali</a> -->
            <a class="btn btn-primary" href="?hal=hasil_hitung&id=<?php echo $id_hitung;; ?>"><span class="fa fa-calculator"></span> Detail Perhitungan</a>
          </div>
        </div>  
    </div>  


    <div class="row">
        <div class="col-md-12 text-left">
            <h4>Data Hasil Perangkingan</h4>
        </div>
    </div>



 <table id="dt" class="table table-bordered table-striped">
         <thead>
              <tr>
                <th width="80px">No Rangking</th>
                <th>Nama Desa</th>
                <th>Kecamatan</th>
                <th>Nilai Akhir</th>
                <th width="130px">Lihat Detail</th>
              </tr>
          </thead>
          <tbody>
                  
          <?php
          $no=1;
          $sql="SELECT * FROM hasil H JOIN desa D ON H.id_desa=D.id_desa WHERE id_perhitungan='$id_hitung'";
          $rs = mysqli_query($koneksi,$sql);
          while($h = mysqli_fetch_array($rs))
          {
          ?>
              <tr>
                <td align="center"><?php echo $no++;?></td>
                <td><?php echo $h['nama_desa'];?></td>
                <td><?php echo $h['kecamatan'];?></td>
                <td><?php echo $h['nilai_hasil'];?></td>
               <td>
                <a href="?hal=detail_pemetaan&id_desa=<?php echo $h['id_desa'] ?>" class="btn btn-primary">Lihat Detail</a>
                </td>
              </tr>
          <?php
          }

          ?>
          
          </tbody>
        </table> 



</div>