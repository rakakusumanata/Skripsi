<?php

function CariNor($con,$kriteria,$nilai){

  $tnk=0;
  $data = mysqli_query($con,"SELECT * FROM kriteria_desa WHERE id_kriteria='$kriteria'");
  while($dt = mysqli_fetch_array($data)){

    $nk=$dt['nilai'];
    $tnk+=pow($nk,2);

  }

  $ank=sqrt($tnk);
  $hs = round($nilai/$ank, 3);

  return $hs;

}

// echo CariNor($koneksi,5,5);

?>
    <div class="well">

         <div class="row">
          <div class="col-md-6 text-left">
              <h4>Nilai Kriteria Desa </h4>
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
        
        
      <div class="row">
          <div class="col-md-6 text-left">
              <h4>Nilai Normalisasi</h4>
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
          ?>
              <tr>
                <td class="center"><?php echo $no++;?></td>
                <td class="center"><?php echo $h['nama_desa'];?></td>

          <?php
            $kode=$h['id_desa'];
            // echo $h3['nama_desa'];
            $sql2="SELECT * FROM kriteria";
            $rs2 = mysqli_query($koneksi,$sql2);
            while($h2 = mysqli_fetch_array($rs2))
            {
              $id_kriteria=$h2['id_kriteria'];
              $n=caridata($koneksi,"SELECT nilai FROM kriteria_desa WHERE id_desa='$kode' AND id_kriteria='$id_kriteria'");
              $nnk=CariNor($koneksi,$id_kriteria,$n);
              echo '<td class="center">'.$nnk.'</td>';
            }

          echo "</tr>";

          }

          ?>
          
          </tbody>
        </table> 

      <!-- <div class="row">
          <div class="col-md-6 text-left">
              <h4>Normalisasi x Bobot</h4>
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
          ?>
              <tr>
                <td class="center"><?php echo $no++;?></td>
                <td class="center"><?php echo $h['nama_desa'];?></td>

          <?php
            $kode=$h['id_desa'];
            // echo $h3['nama_desa'];
            $sql2="SELECT * FROM kriteria";
            $rs2 = mysqli_query($koneksi,$sql2);
            while($h2 = mysqli_fetch_array($rs2))
            {
              $id_kriteria=$h2['id_kriteria'];
              $bobot=$h2['bobot_kriteria'];
              $n=caridata($koneksi,"SELECT nilai FROM kriteria_desa WHERE id_desa='$kode' AND id_kriteria='$id_kriteria'");
              $nnk=CariNor($koneksi,$id_kriteria,$n);
              $nnkb=$nnk*$bobot;
              echo '<td class="center">'.$nnkb.'</td>';
            }

          echo "</tr>";

          }

          ?>
          
          </tbody>
        </table> 
 -->


      <div class="row">
          <div class="col-md-6 text-left">
              <h4>Perhitungan Bobot</h4>
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
                <th><b>Total Maximal(Benefit)<b></th>
                <th><b>Total Minimal(Cost)<b></th>
                <th><b>Nilai Akhir<b></th> 
              </tr>
          </thead>
          <tbody>
                  
          <?php
          $no=1;
          $rangking=array();
          $sql="SELECT * FROM desa";
          $rs = mysqli_query($koneksi,$sql);
          while($h = mysqli_fetch_array($rs))
          {
          ?>
              <tr>
                <td class="center"><?php echo $no++;?></td>
                <td class="center"><?php echo $h['nama_desa'];?></td>

          <?php

            $tn_max=0;
            $tn_min=0;
            $kode=$h['id_desa'];

            // echo $h3['nama_desa'];
            $sql2="SELECT * FROM kriteria";
            $rs2 = mysqli_query($koneksi,$sql2);
            while($h2 = mysqli_fetch_array($rs2))
            {

              $id_kriteria=$h2['id_kriteria'];
              $bobot=$h2['bobot_kriteria'];
              $tipe=$h2['tipe_kriteria'];

              $n=caridata($koneksi,"SELECT nilai FROM kriteria_desa WHERE id_desa='$kode' AND id_kriteria='$id_kriteria'");
              $nnk=CariNor($koneksi,$id_kriteria,$n);
              $nnkb=$nnk*$bobot;
              echo '<td class="center">'.$nnkb.'</td>';

              if ($tipe=='Benefit') {
                $tn_max+=$nnkb;
              }else{
                $tn_min+=$nnkb;
              }

            }

          $n_akhir=$tn_max-$tn_min;
          $rangking[$kode]=$n_akhir;

          // echo "</tr>";

          ?>
            <td class="center"><?php echo $tn_max;?></td>
            <td class="center"><?php echo $tn_min;?></td>
            <td class="center"><b><?php echo $n_akhir;?><b></td>
          </tr>
          <?php

          }

          ?>
          
          </tbody>
        </table> 

      <?php

      arsort($rangking);
      // echo '<pre>'; print_r($rangking);

      if(isset($_GET['id'])) {
        $id_hitung=$_GET['id'];
      }else{
          // Simpan Perhitungan
          $id_pengguna=$_SESSION['pim'];
          $id_hitung=KodeOtomatis($koneksi,"perhitungan","id_perhitungan","","","");
          $s=1;
          $saveHitung=$koneksi->query("INSERT INTO perhitungan VALUES ('$id_hitung',now(),'$id_pengguna')");
          if ($saveHitung) {
              
                foreach ($rangking as $key => $value) {
                  $id_hasil=KodeOtomatis($koneksi,"hasil","id_hasil","","","");
                  $koneksi->query("INSERT INTO hasil VALUES ('$id_hasil',$id_hitung,'$key','$value')");
                }

                $s=2;
          }else{
              $s=1;
          }

          if ($s==2) {
             echo "<script>window.location='?hal=pemetaan&id=$id_hitung';</script>"; 
          }else{
            echo "<script>alert('Perhitungan Gagal Di buat!')</script>";
          }

       
      }
    

      ?>

      <div class="row">
          <div class="col-md-6 text-left">
              <h4>Hasil Perangkingan Prioritas Desa</h4>
          </div>
      </div>

      <table width="100%" class="table table-striped table-bordered" id="tabeldata">
         <thead>
              <tr>
                <th width="30px">No</th>
                <th>Nama Desa</th>
                <th>Nilai Akhir</th>
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
                <td class="center"><?php echo $no++;?></td>
                <td class="center"><?php echo $h['nama_desa'];?></td>
                <td class="center"><?php echo $h['nilai_hasil'];?></td>
              </tr>
          <?php
          }

          ?>
          
          </tbody>
        </table> 

        <?php

        ?>
        <div class="form-group">
          <div class="col-sm-12" align="center">
            <!-- <a class="btn btn-warning" href="?page=perhitungan"><span class="fa fa-arrow-circle-left"></span> Kembali</a> -->
            <a class="btn btn-primary" href="?hal=pemetaan&id=<?php echo $id_hitung; ?>"><span class="fa fa-calculator"></span> Visualisasi Pametaan</a>
          </div>
            <br><br>
        </div>		    	
    </div>

