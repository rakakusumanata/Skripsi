<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';

if(isset($_POST['tambah']))
{

	$stmt = $koneksi->prepare("INSERT INTO desa 
		(id_desa,nama_desa,kecamatan,lat,lng) 
		VALUES (?, ?, ?, ?, ?)");

	$stmt->bind_param("sssss",
		mysqli_real_escape_string($koneksi, $_POST['kode']), 
		mysqli_real_escape_string($koneksi, $_POST['nama']),
		mysqli_real_escape_string($koneksi, $_POST['kecamatan']), 
		mysqli_real_escape_string($koneksi, $_POST['lat']), 
		mysqli_real_escape_string($koneksi, $_POST['lng']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Desa Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=desa';</script>";	
	} else {
		echo "<script>alert('Data Desa Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

	$stmt = $koneksi->prepare("UPDATE desa  SET 
		nama_desa=?,
		kecamatan=?,
		lat=?,
		lng=?
		WHERE id_desa=?");
	$stmt->bind_param("sssss",
		mysqli_real_escape_string($koneksi, $_POST['nama']), 
		mysqli_real_escape_string($koneksi, $_POST['kecamatan']), 
		mysqli_real_escape_string($koneksi, $_POST['lat']),  
		mysqli_real_escape_string($koneksi, $_POST['lng']),  
		mysqli_real_escape_string($koneksi, $_POST['kode']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Desa Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=desa';</script>";	
	} else {
		echo "<script>alert('Data Desa Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	$stmt = $koneksi->prepare("DELETE FROM desa WHERE id_desa=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Desa Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=desa';</script>";	
	} else {
		echo "<script>alert('Data Desa Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>