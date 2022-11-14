<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';

if(isset($_POST['up_profil'])){

	$sqlcek = "SELECT * FROM pengguna WHERE username='".$_POST['username']."' AND id <>'".$_POST['kode']."'";
	if (CekExist($koneksi,$sqlcek)== true){
		echo "<script>window.alert('Username ".$_POST['username']." sudah ada sebelumnya!')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}else{

		$stmt = $koneksi->prepare("UPDATE pengguna SET 
			nama=?,
			username=?
			WHERE id=?");
		$stmt->bind_param("sss",
			mysqli_real_escape_string($koneksi, $_POST['nama']), 
			mysqli_real_escape_string($koneksi, $_POST['username']), 
			mysqli_real_escape_string($koneksi, $_POST['kode']));	

		if ($stmt->execute()) { 
			if ($_POST['password']!="") {
				$password = md5($_POST['password']);
				mysqli_query($koneksi,"UPDATE pengguna set password='$password' WHERE id='".$_POST['kode']."'");
			}
			echo "<script>alert('Data Pengguna Berhasil Diubah')</script>";
			echo "<script>window.location='index.php?hal=pengguna';</script>";	
		} else {
			echo "<script>alert('Data Pengguna Gagal Diubah')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}
}
?>