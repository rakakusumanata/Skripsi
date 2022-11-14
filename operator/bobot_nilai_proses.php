<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';

if(isset($_POST['tambah']))
{
	$sqlcek = "SELECT * FROM bobot_nilai WHERE id_kriteria='".$_POST['kriteria']."' AND bobot_nilai='".$_POST['bobot']."'";
	if (CekExist($koneksi,$sqlcek)== true){
		echo "<script>window.alert('Bobot Nilai ".$_POST['bobot']." sudah ada sebelumnya!')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}else{

		$stmt = $koneksi->prepare("INSERT INTO bobot_nilai 
			(id_bobot,id_kriteria,nilai_awal,nilai_akhir,bobot_nilai) 
			VALUES (?, ?, ?, ?, ?)");

		$stmt->bind_param("sssss",
			mysqli_real_escape_string($koneksi, $_POST['kode']), 
			mysqli_real_escape_string($koneksi, $_POST['kriteria']),
			mysqli_real_escape_string($koneksi, $_POST['nawal']), 
			mysqli_real_escape_string($koneksi, $_POST['nakhir']), 
			mysqli_real_escape_string($koneksi, $_POST['bobot']));	

		if ($stmt->execute()) { 
			echo "<script>alert('Data Bobot Nilai Berhasil Disimpan')</script>";
			echo "<script>window.location='index.php?hal=bobot_nilai';</script>";	
		} else {
			echo "<script>alert('Data Bobot Nilai Gagal Disimpan')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}

}else if(isset($_POST['ubah'])){
	$sqlcek = "SELECT * FROM bobot_nilai WHERE id_kriteria='".$_POST['kriteria']."' AND bobot_nilai='".$_POST['bobot']."' AND id_bobot <>'".$_POST['kode']."'";
	if (CekExist($koneksi,$sqlcek)== true){
		echo "<script>window.alert('Bobot Nilai ".$_POST['bobot']." sudah ada sebelumnya!')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}else{

		$stmt = $koneksi->prepare("UPDATE bobot_nilai  SET 
			id_kriteria=?,
			nilai_awal=?,
			nilai_akhir=?,
			bobot_nilai=?
			WHERE id_bobot=?");
		$stmt->bind_param("sssss",
			mysqli_real_escape_string($koneksi, $_POST['kriteria']), 
			mysqli_real_escape_string($koneksi, $_POST['nawal']), 
			mysqli_real_escape_string($koneksi, $_POST['nakhir']),  
			mysqli_real_escape_string($koneksi, $_POST['bobot']),
			mysqli_real_escape_string($koneksi, $_POST['kode']));	

		if ($stmt->execute()) { 
			echo "<script>alert('Data Bobot Nilai Berhasil Diubah')</script>";
			echo "<script>window.location='index.php?hal=bobot_nilai';</script>";	
		} else {
			echo "<script>alert('Data Bobot Nilai Gagal Diubah')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}
}else if(isset($_GET['hapus'])){

	$stmt = $koneksi->prepare("DELETE FROM bobot_nilai WHERE id_bobot=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Bobot Nilai Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=bobot_nilai';</script>";	
	} else {
		echo "<script>alert('Data Bobot Nilai Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>