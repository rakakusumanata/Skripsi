<?php
if (isset($_GET['id'])){
    $kode=$_GET['id'];
    extract(ArrayData($koneksi,"desa","id_desa='$kode'"));
    $a = "Edit Data";

}else{
    $id_desa=KodeOtomatis($koneksi,"desa","id_desa","","","");
    $nama_desa="";
    $kecamatan="";
    $lat="";
    $lng="";
    $a = "Tambah Data";
}
?>

<!-- <script src="http://maps.google.com/maps/api/js?key=AIzaSyB9AZ5OEpZWlDaSLZZozGpEB9P6rndr9ak" type="text/javascript"></script> -->
<script>
// variabel global marker
var marker;
  
function taruhMarker(peta, posisiTitik){
    
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta
      });
    }
     // isi nilai koordinat ke form
    document.getElementById("lat").value = posisiTitik.lat();
    document.getElementById("lng").value = posisiTitik.lng();  
}
function initialize() {
  var propertiPeta = {
    center:new google.maps.LatLng(-7.887325, 110.344672),
    zoom:10,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  // even listner ketika peta diklik
  google.maps.event.addListener(peta, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });
}
// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDWfzKm2hI-mFjdQdHqRzMDFc5svKXBwUg&callback=initMap">
</script> 

<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-6">
    <div class="well">
      <div class="page-header">
        <h3><?php echo $a; ?></h3>
      </div>
      
          <form method="post" action="desa_proses.php">
            <div class="form-group">
              <label for="nl">ID</label>
              <input type="text" class="form-control" id="kode" name="kode" value="<?php echo $id_desa; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nl">Nama Desa</label>
              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama_desa; ?>" required>
            </div>
            <div class="form-group">
              <label for="up">Kecamatan</label>
               <select class="form-control" id="kecamatan" name="kecamatan" required>
                  <option value="Imogiri" <?php echo pilihselect($kecamatan,"Imogiri") ?>>Imogiri</option>
                  <option value="Dlingo" <?php echo pilihselect($kecamatan,"Dlingo") ?>>Dlingo</option>
                  <option value="Pleret" <?php echo pilihselect($kecamatan,"Pleret") ?>>Pleret</option>
                  <option value="Piyungan" <?php echo pilihselect($kecamatan,"Piyungan") ?>>Piyungan</option>
                  <option value="Kasihan" <?php echo pilihselect($kecamatan,"Kasihan") ?>>Kasihan</option>
                  <option value="Banguntapan" <?php echo pilihselect($kecamatan,"Banguntapan") ?>>Banguntapan</option>
                  <option value="Jetis" <?php echo pilihselect($kecamatan,"Jetis") ?>>Jetis</option>
                  <option value="Bambanglipuro" <?php echo pilihselect($kecamatan,"Bambanglipuro") ?>>Bambanglipuro</option>
                  <option value="Sewon" <?php echo pilihselect($kecamatan,"Sewon") ?>>Sewon</option>
                  <option value="Kretek" <?php echo pilihselect($kecamatan,"Kretek") ?>>Kretek</option>
                  <option value="Sanden" <?php echo pilihselect($kecamatan,"Sanden") ?>>Sanden</option>
                  <option value="Srandakan" <?php echo pilihselect($kecamatan,"Srandakan") ?>>Srandakan</option>
                  <option value="Sedayu" <?php echo pilihselect($kecamatan,"Sedayu") ?>>Sedayu</option>
                  <option value="Pandak" <?php echo pilihselect($kecamatan,"Pandak") ?>>Pandak</option>
                  <option value="Pajangan" <?php echo pilihselect($kecamatan,"Pajangan") ?>>Pajangan</option>
                  <option value="Bantul" <?php echo pilihselect($kecamatan,"Bantul") ?>>Bantul</option>
                  <option value="Pundong" <?php echo pilihselect($kecamatan,"Pundong") ?>>Pundong</option>
                </select>
            </div>


            <div id="googleMap" style="width:220%;height:450px;"></div>


            <div class="form-group">
              <label for="un">Latitude</label>
              <input type="text" class="form-control" id="lat" name="lat" value="<?php echo $lat; ?>" required>
            </div>
            <div class="form-group">
              <label for="pw">Longitude</label>
              <input type="text" class="form-control" id="lng" name="lng" value="<?php echo $lng; ?>" required>
            </div>
            <a href="?hal=desa" class="btn btn-success"></i> Kembali</a>
            <input type="submit" name="<?php echo  isset($_GET['id']) ? 'ubah' : 'tambah'; ?>" value="Simpan" class="btn btn-primary" > 
          </form>
        
    </div>
  </div>
</div>

