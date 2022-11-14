<div class="well">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3><b>Peta Daerah Bantul</b></h3>
        </div>
    </div>

    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <center>
    <body> 
       <?php
	include '../login/koneksi.php';
	$id_desa = $_GET['id_desa'];
	$data = mysqli_query($koneksi,"SELECT * from desa where id_desa='$id_desa'");
	 while($d = mysqli_fetch_array($data)){
       ?>
        
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBXMNHIbmIKC4y_QUQpQdyhcTiDIKuCx4U"></script>
<script type="text/javascript">
    function init(){
 var service = new google.maps.DirectionsService;
 var view = new google.maps.DirectionsRenderer;

 var info_window = new google.maps.InfoWindow();
 var zoom = 11;

 var pos = new google.maps.LatLng(-7.887325, 110.344672);
 var options = {
  'center': pos,
  'zoom': zoom,
  'mapTypeId': google.maps.MapTypeId.SATELLITE
 };

 var map = new google.maps.Map(document.getElementById('maps'), options);
 view.setMap(map);
 info_window = new google.maps.InfoWindow({
  'content': 'loading...'
 });

 var result = function(){
  lihat(service, view);
 }
 document.getElementById('lihat').addEventListener('click', result)
}
     
function lihat(service, view){
 var start = new google.maps.LatLng(-7.899332,110.321891);
 
 var end = new google.maps.LatLng(<?php echo $d['lat']; ?>,<?php echo $d['lng']; ?>);

 var request = {
  origin: start,
  destination: end,
  travelMode: google.maps.TravelMode.DRIVING
 };

 service.route(request, function(response, status){
  if(status == google.maps.DirectionsStatus.OK){
   view.setDirections(response);
  }else{
   window.alert('Directions request failed due to ' + status);
  }
 });
}
google.maps.event.addDomListener(window, 'load', init);
</script>
</head>
<body>
<div id="maps" style="width: 100%; height: 550px;"></div>
<input type="text" id="start" size="50" placeholder="BPBD Kabupaten Bantul" disabled>
<input type="text" id="end" size="50" placeholder=<?php echo $d['nama_desa']; ?> disabled>
<button id="lihat">Lihat Jalur</button>

   <table width="100%" class="table table-striped table-bordered" id="tabeldata">
       <thead
              <tr>
                <td> Desa : </td>
            </tr>
        </thead>
	 <?php
	include '../login/koneksi.php';
	$id_desa = $_GET['id_desa'];
        ?>
         <tr>
         <tr bgcolor='#ffa64d' align='center'> 
             <td><h3><?php echo $d['nama_desa'];?></h3>
              </tr>
             
                
<?php 
}
?>    
	</table> 
    


    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
       <thead
            <tr>
                <td>Nama Kriteria </td>
                 <td>Nilai</td>
                 <td>Satuan</td>
            </tr>
        </thead>
		<?php 
		include '../login/koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM kriteria_desa kd join desa d on kd.id_desa =d.id_desa join kriteria k on kd.id_kriteria =k.id_kriteria WHERE d.id_desa ='$id_desa'");
		while($h = mysqli_fetch_array($data)){
                    ?>
                        <tr>
                
                <td><?php echo $h['nama_kriteria'];?></td>
                <td><?php echo $h['nilai'];?></td>
                <td><?php echo $h['satuan'];?></td>
                
              </tr>
<?php 
}
?>    
	</table> 
              <a href="?hal=pemetaan_daerah" class="btn btn-success"></i> Kembali</a>
    </div>

</div>
  <?php
	
	?>
</body>
</html>
