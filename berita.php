
    <table width="80%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th></th>
                <th width="30px">No</th>
                <th>Judul Berita</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th width="70px">Action</th>
            </tr>
        </thead>
		<?php 
		$no = 1;
		$data = mysqli_query($koneksi,"select * from berita");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td> </td>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['judul_berita']; ?></td>
                <td><?php echo date('d-m-Y', strtotime($d['tanggal'])); ?></td>
                <td><img src="uploaded/berita/small_<?php echo $d['gambar'];?>" height="100" width="100"></td> 
                <td><a href="?hal=isi_berita&id=<?php echo $d['id_berita'] ?>" class="btn btn-primary">Lihat Berita</a></td>
			</tr>
			<?php 
		}
		?>
	</table>
 