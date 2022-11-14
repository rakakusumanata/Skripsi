<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah']))
{
	$nil_kon= CariNk($koneksi,$_POST['kriteria'],$_POST['nilai']);

	$stmt = $koneksi->prepare("INSERT INTO kriteria_desa 
		(id_kriteria_desa,id_desa,id_kriteria,nilai, nilai_konversi) 
		VALUES (?, ?, ?, ?, ?)");

	$stmt->bind_param("sssss",
		mysqli_real_escape_string($koneksi, $_POST['kode']), 
		mysqli_real_escape_string($koneksi, $_POST['desa']),
		mysqli_real_escape_string($koneksi, $_POST['kriteria']), 
		mysqli_real_escape_string($koneksi, $_POST['nilai']), 
		mysqli_real_escape_string($koneksi, $nil_kon));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Kriteria Desa Berhasil Disimpan')</script>";
		echo "<script>window.location='index.php?hal=kriteriadesa';</script>";	
	} else {
		echo "<script>alert('Data Kriteria Desa Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){
	
	$nil_kon= CariNk($koneksi,$_POST['kriteria'],$_POST['nilai']);

	$stmt = $koneksi->prepare("UPDATE kriteria_desa  SET 
		id_desa=?,
		id_kriteria=?,
		nilai=?,
		nilai_konversi=?
		WHERE id_kriteria_desa=?");
	$stmt->bind_param("sssss",
		mysqli_real_escape_string($koneksi, $_POST['desa']), 
		mysqli_real_escape_string($koneksi, $_POST['kriteria']), 
		mysqli_real_escape_string($koneksi, $_POST['nilai']),  
		mysqli_real_escape_string($koneksi, $nil_kon),  
		mysqli_real_escape_string($koneksi, $_POST['kode']));	

	if ($stmt->execute()) { 
		echo "<script>alert('Data Kriteria Desa Berhasil Diubah')</script>";
		echo "<script>window.location='index.php?hal=kriteriadesa';</script>";	
	} else {
		echo "<script>alert('Data Kriteria Desa Gagal Diubah')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	$stmt = $koneksi->prepare("DELETE FROM kriteria_desa WHERE id_kriteria_desa=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Kriteria Desa Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=kriteriadesa';</script>";	
	} else {
		echo "<script>alert('Data Kriteria Desa Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>