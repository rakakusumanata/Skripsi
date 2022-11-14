<?php


$np = array();
$sqlm="SELECT * FROM desa";
$rsm = mysqli_query($koneksi,$sqlm);
while($hm = mysqli_fetch_array($rsm))
{
    $iddesa=$hm['id_desa'];
    $sqlm2="SELECT * FROM kriteria";
    $rsm2 = mysqli_query($koneksi,$sqlm2);
    while($hm2 = mysqli_fetch_array($rsm2))
    {
      $idkri=$hm2['id_kriteria'];
      $nilai=SingleData($koneksi,"nilai","kriteria_desa WHERE id_desa='$iddesa' AND id_kriteria='$idkri'");
      if ($nilai=='') {
        $np[]= "Nilai Desa ".$hm['nama_desa']." kriteria ".$hm2['nama_kriteria']."<br>";

      }
    }
}

$cn=count($np);
if ($cn>0) {
  $pesan="Maaf Terdapat ".$cn." nilai desa yang belum terisi, Yaitu : <br>";
  echo $pesan;
  foreach ($np as $key => $value) {
    echo $value;
  }
  echo "Silahkan Diinput dahulu, lalu melakukan Perhitungan.<br>";
?>      

        <br>
        <div class="form-group">
          <div class="col-sm-12" align="text-left">
            <a class="btn btn-warning" href="?hal=perhitungan"><span class="fa fa-arrow-circle-left"></span> Kembali</a>
          </div>
        </div>   

<?php

}else{
?>


    <div class="well">
      <div class="row">
          <div class="col-md-6 text-left">
              <h4>Lihat Data </h4>
          </div>
      </div>

      <table width="100%" class="table table-striped table-bordered" id="tabeldata">
         <thead>
            <tr>
              <th width="30px">No</th>
              <th>Nama Desa</th>
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
          $no=1;
          $sql="SELECT * FROM desa";
          $rs = mysqli_query($koneksi,$sql);
          while($h = mysqli_fetch_array($rs))
          {
            $kode=$h['id_desa'];
          ?>
            <tr>
              <td class="center"><?php echo $no++;?></td>
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

    
       

        <div class="form-group">
          <div class="col-sm-12" align="center">
              <a class="btn btn-warning" href="?hal=perhitungan"><span class="fa fa-arrow-circle-left"></span> Batal</a>&nbsp;&nbsp; &nbsp;
            <a class="btn btn-primary" href="?hal=hasil_hitung"><span class="fa fa-calculator"></span> Proses Perhitungan</a>
          </div>
        </div>   
        <br>
        <br>
    </div>


<?php
}
?>





