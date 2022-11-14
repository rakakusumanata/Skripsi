<?php include 'header_operator.php'; ?>
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
                    <a class="navbar-brand" href="#">Halaman Operator</a>
                </div>
            </div>
        </nav>
<div class="well">
    <div class="row">
        <div class="col-md-6 text-left">
            <h4>Data Desa</h4>
        </div>
        <div class="col-md-6 text-right">
            <button onclick="location.href='tambah_desa.php'" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
    <br/>
    <table width="100%" class="table table-striped table-bordered" id="tabeldata">
        
        <thead
            <tr>
                <th width="30px">No</th>
                <th>Nama Desa</th>
                <th>Kecamatan</th>
                 <th>Latitute</th>
                  <th>Longitute</th>
                <th width="130px">Action</th>
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
		$data = mysqli_query($koneksi,"SELECT * from desa LIMIT $posisi,$batas");
		while($d = mysqli_fetch_array($data)){
                    ?>
        <tr>
			<td><?php echo $no; ?></td>
                        <td><?php echo $d['nama_desa']; ?></td>
                        <td><?php echo $d['kecamatan']; ?></td>
                        <td><?php echo $d['lat']; ?></td>
                        <td><?php echo $d['lng']; ?></td>
                        <td>
                          <a href="edit_desa.php?id_desa=<?php echo $d['id_desa'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                          <a href="hapus_desa.php?id_desa=<?php echo $d['id_desa'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			</td>
                      
	</tr>
<?php 
$no++;
}
?>    
	</table> 
    
    <div class="well">
        <div class="col-md-push-7 text-left">
<?php $query2 = mysqli_query($koneksi,"SELECT * from desa");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
    echo " <a href=\"halaman_desa.php?halaman=$i\">$i</a> | ";
}
else{    
    echo " <b>$i</b> | "; 
}
echo "<p>Total : <b>$jmldata</b> Desa</p>";
?>      
        </div>
        </div>
    
</div>
    </div>
</body>
</html>


