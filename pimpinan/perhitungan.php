
    <div class="well">
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Data Perhitungan</h4>
            </div>
            <div class="col-md-6 text-right">
                <!-- <button onclick="location.href='tambah_perhitungan.php'" class="btn btn-primary">Tambah Data</button> -->
                 <a href="?hal=hasil_hitung" class="btn btn-primary btn-flat" style="float:right;margin-top:0px;"><i class="fa fa-plus-square"></i>Perhitungan Baru</a>
           
            </div>
        </div>
        
      <table id="dt" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="30px">No</th>
            <th>Tanggal</th>
            <th>Pimpinan</th>
            <th width="70px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            $query="SELECT * FROM perhitungan P JOIN pengguna U ON P.id=U.id";
            $result=$koneksi->query($query);
            $num_result=$result->num_rows;
            if ($num_result > 0 ) { 
                while ($d=mysqli_fetch_assoc($result)) {
                // extract($d);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td>
                <a href="?hal=pemetaan&id=<?php echo $d['id_perhitungan'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-fullscreen"></span></a>
                </td>
            </tr>
        <?php }} ?>
        </tbody>
      </table>
        
    </div>
