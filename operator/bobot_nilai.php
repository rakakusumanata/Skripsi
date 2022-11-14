
    <div class="well">
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Data Bobot Nilai</h4>
            </div>
            <div class="col-md-6 text-right">
                 <a href="?hal=bobot_nilai_olah" class="btn btn-primary btn-flat" style="float:right;margin-top:0px;"><i class="fa fa-plus-square"></i> Tambah Data</a>
            </div>
        </div>
        
      <table id="dt" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="30px">ID</th>
            <th>Nama Kriteria</th>
            <th>Nilai Awal</th>
            <th>Nilai Akhir</th>
            <th>Bobot Nilai</th>
            <th width="130px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            $query="SELECT * FROM bobot_nilai BN JOIN kriteria K ON BN.id_kriteria=K.id_kriteria ";
            $result=$koneksi->query($query);
            $num_result=$result->num_rows;
            if ($num_result > 0 ) { 
                while ($d=mysqli_fetch_assoc($result)) {
                // extract($d);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_kriteria']; ?></td>
                <td><?php echo $d['nilai_awal']; ?></td>
                <td><?php echo $d['nilai_akhir']; ?></td>
                <td><?php echo $d['bobot_nilai']; ?></td>
                <td>
                    <a href="?hal=bobot_nilai_olah&id=<?php echo $d['id_bobot'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="bobot_nilai_proses.php?hapus=<?php echo $d['id_bobot'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        <?php }} ?>
        </tbody>
      </table>
        
    </div>
