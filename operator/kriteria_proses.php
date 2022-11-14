<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';

if(isset($_POST['tambah']))
{

	$stmt = $koneksi->prepare("INSERT INTO kriteria 
		(id_kriteria,nama_kriteria,satuan,bobot_kriteria,tipe_kriteria) 
		VALUES (?, ?, ?, ?, ?)");

	$stmt->bind_param("sssss",
		mysqli_real_escape_string($koneksi, $_POST['kode']), 
		mysqli_real_escape_string($koneksi, $_POST['nama']),
                mysqli_real_escape_string($koneksi, $_POST['satuan']),
		mysqli_real_escape_string($koneksi, $_POST['bobot']), 
		mysqli_real_escape_string($koneksi, $_POST['tipe']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Kriteria Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=kriteria';</script>";	
	} else {
		echo "<script>alert('Data Kriteria Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

	$stmt = $koneksi->prepare("UPDATE kriteria  SET 
		nama_kriteria=?,
                satuan=?,
		bobot_kriteria=?,
		tipe_kriteria=?
		WHERE id_kriteria=?");
	$stmt->bind_param("sssss",
		mysqli_real_escape_string($koneksi, $_POST['nama']), 
                mysqli_real_escape_string($koneksi, $_POST['satuan']),
		mysqli_real_escape_string($koneksi, $_POST['bobot']), 
		mysqli_real_escape_string($koneksi, $_POST['tipe']),  
		mysqli_real_escape_string($koneksi, $_POST['kode']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Kriteria Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=kriteria';</script>";	
	} else {
		echo "<script>alert('Data Kriteria Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	$stmt = $koneksi->prepare("DELETE FROM kriteria WHERE id_kriteria=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Kriteria Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=kriteria';</script>";	
	} else {
		echo "<script>alert('Data Kriteria Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>