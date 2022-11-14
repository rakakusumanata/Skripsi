<?php include 'header-footer/header.php';
include 'login/koneksi.php';
include 'setting/crud.php';
?>
<html class="no-js" lang="en">  
<head>
    
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Raka Kusumanata</title>
    <meta name="description" content="Story">
    <meta name="author" content="Raka Kusumanata">
    
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="images/raka.jpg" type="image/x-icon">
    <link rel="icon" href="images/raka.jpg" type="image/x-icon">

</head>
<body style="background: whitesmoke">
	<br/>
	<center>
		<h2>PEMETAAN DAERAH KRISIS AIR BERSIH<br/> KABUPATEN BANTUL</h2>
	</center>
<center>
    <body> 
     <?php
$sql="SELECT MAX(id_perhitungan) AS id_max FROM perhitungan";
$id_hitung=caridata($koneksi,$sql);

?>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBXMNHIbmIKC4y_QUQpQdyhcTiDIKuCx4U"></script>
        <script>
        
    var marker;
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
        include 'login/koneksi.php';
        $no=1;
       $query = mysqli_query($koneksi,"SELECT * FROM hasil H JOIN desa D ON H.id_desa=D.id_desa WHERE id_perhitungan='$id_hitung'");
        while ($data = mysqli_fetch_array($query))
        {
            $nama = $data['nama_desa'];
            $nama2 = $data['kecamatan'];
            $lat = $data['lat'];
            $lon = $data['lng'];
            $des='';
                $query2 = mysqli_query($koneksi,"SELECT * FROM kriteria_desa KD JOIN kriteria K ON KD.id_kriteria=K.id_kriteria WHERE id_desa='".$data['id_desa']."'");
                while ($data2 = mysqli_fetch_array($query2))
                {
                  $des=$des.'<br>'.$data2['nama_kriteria'].' : '.$data2['nilai'];
                }
            echo ("addMarker($lat, $lon, '<b> Desa : $nama, <br/> Kecamatan :$nama2</b>$des');\n"); 
             
        }
      ?>
          
        // Proses membuat marker 
        function addMarker(lat, lng, info) {
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                
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
  
    
  <body onload="initialize()">

<!--- Bagian Judul-->   
    <div class="container" style="margin-top:10px"> 

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div id="map-canvas" style="width: 1200px; height: 700px;"></div>
                </div>
            </div>
        </div>  
    </div>
</div>     
        
      <table id="dt" style="width: 1100px; height: 700px;"></div>
         <thead>
            <tr>
              <th width="50px">Nama Desa</th>
              <?php
              $sql="SELECT * FROM kriteria";
              $rs = mysqli_query($koneksi,$sql);
              while($h = mysqli_fetch_array($rs))
              {
                echo "<th>".$h['nama_kriteria']."</th>";
              }
              ?>
            </tr>
          </thead>
          <tbody>
                  
          <?php
          $sql="SELECT * FROM desa";
          $rs = mysqli_query($koneksi,$sql);
          while($h = mysqli_fetch_array($rs))
          {
            $kode=$h['id_desa'];
          ?>
            <tr>
              <td class="center"><?php echo $h['nama_desa'];?></td>
          <?php
            $sql2="SELECT * FROM kriteria";
            $rs2 = mysqli_query($koneksi,$sql2);
            while($h2 = mysqli_fetch_array($rs2))
            {
              $id_kriteria=$h2['id_kriteria'];
              $n=caridata($koneksi,"SELECT nilai FROM kriteria_desa WHERE id_desa='$kode' AND id_kriteria='$id_kriteria'");
              echo '<td class="center">'.$n.'</td>';
            }
                echo "</tr>";
          }
          ?>
          
          </tbody>
      </table>         
    </body>
    </center>
            </div> <!-- end col-full -->
        </div>
    </section> <!-- end s-featured -->

    <!-- s-content
    ================================================== -->
    
    </section> <!-- end s-content -->
  <?php include 'header-footer/footer.php'; ?>