
    <div class="well">
        <div class="row">
            <div class="col-md-6 text-left">
                <h4>Data Berita</h4>
            </div>
<!--             <div class="col-md-6 text-right">
                <button onclick="location.href='tambah_desa.php'" class="btn btn-primary">Tambah Data</button>
            </div> -->
        </div>
        
      <table id="dt" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th width="30px">No</th>
            <th>Judul Berita</th>
            <th>Tanggal</th>
            <th>Gambar</th>
            <th width="60px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $no=1;
            $query="SELECT * FROM berita";
            $result=$koneksi->query($query);
            $num_result=$result->num_rows;
            if ($num_result > 0 ) { 
                while ($d=mysqli_fetch_assoc($result)) {
                // extract($d);
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['judul_berita']; ?></td>
                <td><?php echo $d['tanggal']; ?></td>
                <td><img src="../uploaded/berita/<?php echo $d['gambar'];?>" height="50"></td> 
                <td>
                <a href="?hal=berita_lihat&id=<?php echo $d['id_berita'] ?>" class="btn btn-info"><span class="glyphicon glyphicon-fullscreen"></span></a>
                </td>
            </tr>
        <?php }} ?>
        </tbody>
      </table>
        
    </div>
