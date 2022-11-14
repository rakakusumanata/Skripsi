
    <div class="well">
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Data Pengguna</h4>
            </div>
            <div class="col-md-6 text-right">
                <!-- <button onclick="location.href='tambah_perhitungan.php'" class="btn btn-primary">Tambah Data</button> -->
                 <a href="?hal=pengguna_olah" class="btn btn-primary btn-flat" style="float:right;margin-top:0px;"><i class="fa fa-plus-square"></i> Tambah Data</a>
            </div>
        </div>
        
      <table id="dt" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="30px">ID</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Jabatan</th>
            <th width="100px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            $query="SELECT * FROM pengguna";
            $result=$koneksi->query($query);
            $num_result=$result->num_rows;
            if ($num_result > 0 ) { 
                while ($d=mysqli_fetch_assoc($result)) {
                // extract($d);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['level']; ?></td>
                <td>
                    <a href="?hal=pengguna_olah&id=<?php echo $d['id'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="pengguna_proses.php?hapus=<?php echo $d['id'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        <?php }} ?>
        </tbody>
      </table>
        
    </div>
