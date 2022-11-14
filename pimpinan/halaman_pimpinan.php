<?php include 'header_pimpinan.php'; ?>
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Halaman Pimpinan</a>
                </div>
            </div>
        </nav>
<div class="well">
    <div class="row">
        <div class="col-md-6 text-left">
            <h4>Data Kriteria Desa</h4>
        </div>
       
    </div>
    <br/><table width="100%" class="table table-striped table-bordered" id="tabeldata">
        
        <thead
            <tr>
                <th width="30px">No</th>
                <th>Nama Desa</th>
                <th>Kriteria</th>
                <th>Nilai</th>
            </tr>
        </thead>
		<?php 
		include '../login/koneksi.php';
$batas   = 10;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
 $posisi  = 0;
 $halaman = 1;
}else{ 
  $posisi  = ($halaman-1) * $batas; 
}
		$no = $posisi+1;
		$data = mysqli_query($koneksi,"SELECT desa.nama_desa, kriteria.nama_kriteria, kriteria_desa.nilai FROM kriteria_desa JOIN desa ON kriteria_desa.id_desa=desa.id_desa JOIN kriteria ON kriteria_desa.id_kriteria=kriteria.id_kriteria ORDER BY desa.id_desa,kriteria.id_kriteria ASC LIMIT $posisi,$batas  ");
		while($d = mysqli_fetch_array($data)){
                    ?>
			<tr>
				<td><?php echo $no; ?></td>
                                <td><?php echo $d['nama_desa']; ?></td>
                                 <td><?php echo $d['nama_kriteria']; ?></td>
                                 <td><?php echo $d['nilai']; ?></td>	
			</tr>
			<?php 
                        $no++;
		}
?>    
	</table> 
</div>
        <div class="well">
        <div class="col-md-push-7 text-left">
<?php $query2 = mysqli_query($koneksi, "SELECT desa.nama_desa, kriteria.nama_kriteria, kriteria_desa.nilai FROM kriteria_desa JOIN desa ON kriteria_desa.id_desa=desa.id_desa JOIN kriteria ON kriteria_desa.id_kriteria=kriteria.id_kriteria ORDER BY desa.id_desa,kriteria.id_kriteria ASC");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
    echo " <a href=\"halaman_pimpinan.php?halaman=$i\">$i</a> | ";
}
else{    
    echo " <b>$i</b> | "; 
}
echo "<p>Total : <b>$jmldata</b> Data</p>";
?>  
            
                 <button onclick="location.href='perhitungan_daerah.php'" class="btn btn-primary">Perhitungan</button>
        </div>
        </div>
</div>
</body>
</html>
