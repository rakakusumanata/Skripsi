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
    <div>
	
	  <!-- Nav tabs -->
	  <ul class="nav nav-tabs" role="tablist">
	    <li role="presentation" class="active"><a href="#lihat" aria-controls="lihat" role="tab" data-toggle="tab">Lihat Semua Data</a></li>
	    <li role="presentation"><a href="#Hasil" aria-controls="Hasil" role="tab" data-toggle="tab">Hasil</a></li>
            <li role="presentation"><a href="pemetaan_daerah.php" role="tab">Pemetaan</a></li>
	  </ul>
          
           <div class="tab-content">
               <div role="tabpanel" class="tab-pane active" id="lihat">
                      	 <div class="row">
        <div class="col-md-6 text-left">
            <h4>Lihat Data </h4>
        </div>
    </div>
    <br/><table width="100%" class="table table-striped table-bordered" id="tabeldata">
        
       <thead
            <tr>
                 <th width="30px">No</th>
                <th>Nama Desa</th>
                <th>Nama Kriteria </th>
                <th>Nilai Awal</th>
                <th>Konversi Nilai</th>
                 <th>Normalisasi</th>
                 <th>Pengoptimalan Normalisasi</th>
                 
            </tr>
        </thead>
		<?php 
		include '../login/koneksi.php';
$batas   = 104;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
 $posisi  = 0;
 $halaman = 1;
}else{ 
  $posisi  = ($halaman-1) * $batas; 
}
		$no = $posisi+1;
		$data = mysqli_query($koneksi,"SELECT Kriteria_desa.id_kriteria_desa,Kriteria_desa.id_desa, Kriteria_Desa.id_kriteria, desa.nama_desa, kriteria.nama_kriteria,kriteria.bobot_kriteria, kriteria_desa.nilai FROM kriteria_desa JOIN desa ON kriteria_desa.id_desa=desa.id_desa JOIN kriteria ON kriteria_desa.id_kriteria=kriteria.id_kriteria ORDER BY desa.id_desa,kriteria.id_kriteria ASC LIMIT $posisi,$batas");
		while($d = mysqli_fetch_array($data)){
                    ?>
				<td><?php echo $no; ?></td>
                                <td><?php echo $d['nama_desa']; ?></td>
                                 <td><?php echo $d['nama_kriteria']; ?></td>
                                 <td><?php echo $d['nilai']; ?></td>	
                                  <td><?php
            if($d['id_kriteria'] == 5)
            {
                if($d['nilai']<=1000 )
                    echo $d['nilai'] = 1;
                {
                    if($d['nilai']>1000 && $d['nilai']<=4000)
                       echo $d['nilai'] = 2;
                }
                {
                    if($d['nilai']>4000 && $d['nilai']<=8000)
                         echo $d['nilai'] = 3;
                }
                {
                    if($d['nilai']>8000 && $d['nilai']<14000)
                         echo $d['nilai'] = 4;
                }
                {
                    if($d['nilai']>14000)
                         echo $d['nilai'] = 5;
                }
            }
            else if ($d['id_kriteria'] == 6)
            {
               if($d['nilai']<=1000 )
                 echo $d['nilai'] = 1;
                {
                    if($d['nilai']>1000 && $d['nilai']<=5000)
                         echo $d['nilai'] = 2;
                }
                  {
                    if($d['nilai']>5000 && $d['nilai']<=8000)
                         echo $d['nilai'] = 3;
                }
                {
                    if($d['nilai']>8000 && $d['nilai']<=10000)
                         echo $d['nilai'] = 4;
                }
                {
                    if($d['nilai']>10000)
                         echo $d['nilai'] = 5;
                }
            } 
           else if ($d['id_kriteria'] == 7)
            {
               if($d['nilai']<=5 )
                 echo $d['nilai'] = 1;
                {
                    if($d['nilai']>5 && $d['nilai']<=70)
                         echo $d['nilai'] = 2;
                }
                  {
                    if($d['nilai']>70 && $d['nilai']<=130)
                         echo $d['nilai'] = 3;
                }
                {
                    if($d['nilai']>130 && $d['nilai']<=200)
                         echo $d['nilai'] = 4;
                }
                {
                    if($d['nilai']>200)
                         echo $d['nilai'] = 5;
                }
            } 
            else if ($d['id_kriteria'] == 8)
            {
               if($d['nilai']<=1000 )
                 echo $d['nilai'] = 6;
                {
                    if($d['nilai']>1000 && $d['nilai']<=1200)
                         echo $d['nilai'] = 5;
                }
                  {
                    if($d['nilai']>1200 && $d['nilai']<=1600)
                         echo $d['nilai'] = 4;
                }
                {
                    if($d['nilai']>1600 && $d['nilai']<=2000)
                         echo $d['nilai'] = 3;
                }
                {
                    if($d['nilai']>2000)
                         echo $d['nilai'] = 2;
                }
            } 
            else
            {
                echo ''.$d['nilai'].' tidak berada dalam range bilangan.';
            }
            ?></td>
             
                                                  
            <td><?php 
            if ($d['id_kriteria'] == 5){
            $d['nilai']= $d['nilai']/sqrt(pow(5,2) + pow(4,2)+ pow(5,2)+ pow(2,2)+ pow(3,2)
            + pow(3,2)+ pow(2,2)+ pow(3,2)+ pow(3,2)+ pow(4,2)  
            + pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(5,2)
            + pow(4,2)+ pow(4,2)+ pow(3,2)+ pow(3,2)+ pow(5,2) 
            + pow(5,2)+ pow(5,2)+ pow(5,2)+ pow(5,2)+ pow(5,2)+ pow(5,2));
            echo $d['nilai'];
            }
            else if ($d['id_kriteria_desa']&& $d['id_kriteria'] == 6){
            $d['nilai']= $d['nilai']/sqrt(pow(5,2) + pow(4,2)+ pow(4,2)+ pow(3,2)+ pow(3,2)
            + pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(5,2)+ pow(5,2)  
            + pow(2,2)+ pow(2,2)+ pow(3,2)+ pow(2,2)+ pow(3,2)
            + pow(5,2)+ pow(5,2)+ pow(5,2)+ pow(5,2)+ pow(5,2) 
            + pow(5,2)+ pow(5,2)+ pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(4,2));
            echo $d['nilai'];
            }
            else if ($d['id_kriteria_desa']&& $d['id_kriteria'] == 7){
            $d['nilai']= $d['nilai']/sqrt(pow(5,2) + pow(2,2)+ pow(2,2)+ pow(2,2)+ pow(2,2)
            + pow(2,2)+ pow(2,2)+ pow(2,2)+ pow(5,2)+ pow(5,2)  
            + pow(4,2)+ pow(5,2)+ pow(5,2)+ pow(4,2)+ pow(2,2)
            + pow(2,2)+ pow(2,2)+ pow(4,2)+ pow(3,2)+ pow(2,2) 
            + pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2));
            echo $d['nilai'];
            }
            else if ($d['id_kriteria_desa']&& $d['id_kriteria'] == 8){
            $d['nilai']= $d['nilai']/sqrt(pow(2,2) + pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2)
            + pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(2,2)+ pow(2,2)  
            + pow(3,2)+ pow(2,2)+ pow(2,2)+ pow(2,2)+ pow(3,2)
            + pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2)+ pow(3,2) 
            + pow(2,2)+ pow(3,2)+ pow(2,2)+ pow(3,2)+ pow(3,2)+ pow(2,2));
            echo $d['nilai'];
            }
            
            ?>   
            </td>
             <td><?php 
            if($d['id_kriteria'] == 5)
            {
                $d['nilai']= $d['nilai']* $d['bobot_kriteria'];
                echo $d['nilai'];
            }
            else if($d['id_kriteria'] == 6)
            {
                $d['nilai']= $d['nilai']* $d['bobot_kriteria'];
                echo $d['nilai'];
            }
            else if($d['id_kriteria'] == 7)
            {
                $d['nilai']= $d['nilai']* $d['bobot_kriteria'];
                echo $d['nilai'];
            }
            else if($d['id_kriteria'] == 8)
            {
                $d['nilai']= $d['nilai']* $d['bobot_kriteria'];
                echo $d['nilai'];
            }
            ?>   
            </td>
	    	
                     
                        
            	
	</tr>
<?php 
$no++;
}
?>    
	</table> 
    <div class="well">
        <div class="col-md-push-7 text-left">
<?php $query2 = mysqli_query($koneksi,"SELECT Kriteria_desa.id_desa, Kriteria_Desa.id_kriteria, desa.nama_desa, kriteria.nama_kriteria, kriteria_desa.nilai FROM kriteria_desa JOIN desa ON kriteria_desa.id_desa=desa.id_desa JOIN kriteria ON kriteria_desa.id_kriteria=kriteria.id_kriteria ORDER BY desa.id_desa,kriteria.id_kriteria ASC");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);
for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
    echo " <a href=\"perhitungan_daerah.php?halaman=$i\">$i</a> | ";
}
else{    
    echo " <b>$i</b> | "; 
}
echo "<p>Total : <b>$jmldata</b> Data</p>";
?>      
        </div>
        </div>
    
</div>
          <div role="tabpanel" class="tab-pane" id="Hasil">
	     <?php 
		$data = mysqli_query($koneksi,"select * from kriteria ORDER BY id_kriteria ASC");
		?>	
              <br/>
	    	<h4>Hasil Akhir</h4>
			<table width="100%" class="table table-striped table-bordered">
		         <thead>
		          <tr> 
                              <th rowspan="2" style="vertical-align: middle" class="text-center">No</th>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Nama Desa</th>
		                <th colspan="<?php echo mysqli_num_rows($data)?>" class="text-center">Mengoptimalkan Normalisasi</th>
                              <th rowspan="2" style="vertical-align: middle" class="text-center">Maksimum</th>
		             <th rowspan="2" style="vertical-align: middle" class="text-center">Minimum</th>
		             <th rowspan="3" style="vertical-align: middle" class="text-center">Hasil</th>
		             
                          </tr>
		            <tr>
		            <?php
				while ($d = mysqli_fetch_assoc($data)){
					?>
		                <th><?php echo $d['nama_kriteria']?>(<?php echo $d['tipe_kriteria'] ?>)</th>
		            <?php
					}
					?>
		            </tr>
		        </thead>
		        <tbody>
                            
                 <?php  $data = mysqli_query($koneksi,"select * from desa ORDER BY id_desa ASC");
		 $no = 1;
                 ?>    
		<?php
		while ($d = mysqli_fetch_array($data)){
		?>
		            <tr>
                                
                                <td><?php echo $no++; ?></td>
		                <td><?php echo $d['nama_desa'] ?></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                 <td></td>
                                <td></td>
		                <td>
		                	
		                </td>
		                <?php
		                }
						?>
						
		            </tr>
		
		        </tbody>
		
		    </table>
		    	
	    </div>
</div>
</body>
</html>
