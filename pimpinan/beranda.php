
    <div class="well">
      <div class="row">
          <div class="col-md-6 text-left">
              <h4>Data Nilai Kriteria Desa Terbaru</h4>
          </div>
      </div>

      <table id="dt" class="table table-bordered table-striped">
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
        
    </div>