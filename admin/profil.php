
    <div class="well">
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Data Profil</h4>
            </div>
            <div class="col-md-6 text-right">
                <!-- <button onclick="location.href='tambah_perhitungan.php'" class="btn btn-primary">Tambah Data</button> -->
                 <a href="?hal=profil_olah" class="btn btn-primary btn-flat" style="float:right;margin-top:0px;"><i class="fa fa-plus-square"></i> Tambah Data</a>
            </div>
        </div>
        
      <table id="dt" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="30px">ID</th>
            <th>Judul</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th width="150px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            $query="SELECT * FROM profil_bpbd";
            $result=$koneksi->query($query);
            $num_result=$result->num_rows;
            if ($num_result > 0 ) { 
                while ($d=mysqli_fetch_assoc($result)) {
                // extract($d);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['judul_profil']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($d['tanggal'])); ?></td>
                <td><img src="../uploaded/profil/small_<?php echo $d['gambar'];?>" height="50"></td> 
                <td>
                    <a href="?hal=profil_olah&id=<?php echo $d['id_profil_bpbd'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="?hal=isi_profil&id_profil_bpbd=<?php echo $d['id_profil_bpbd'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span></a>
                    <a href="profil_proses.php?hapus=<?php echo $d['id_profil_bpbd'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        <?php }} ?>
        </tbody>
      </table>
        
    </div>
