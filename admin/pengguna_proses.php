<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';

if(isset($_POST['tambah']))
{
	$sqlcek = "SELECT * FROM pengguna WHERE username='".$_POST['username']."'";
	if (CekExist($koneksi,$sqlcek)== true){
		echo "<script>window.alert('Username ".$_POST['username']." sudah ada sebelumnya!')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}else{

		$stmt = $koneksi->prepare("INSERT INTO pengguna 
			(id,nama,username,alamat,email,password,level) 
			VALUES (?, ?, ?, ?, ?, ?, ?)");

		$stmt->bind_param("sssssss",
			mysqli_real_escape_string($koneksi, $_POST['kode']), 
			mysqli_real_escape_string($koneksi, $_POST['nama']),
			mysqli_real_escape_string($koneksi, $_POST['username']), 
            mysqli_real_escape_string($koneksi, $_POST['alamat']), 
            mysqli_real_escape_string($koneksi, $_POST['email']), 
			mysqli_real_escape_string($koneksi, md5($_POST['password'])), 
			mysqli_real_escape_string($koneksi, $_POST['level']));	

		if ($stmt->execute()) { 
			echo "<script>alert('Data Pengguna Berhasil Disimpan')</script>";
			echo "<script>window.location='index.php?hal=pengguna';</script>";	
		} else {
			echo "<script>alert('Data pengguna Gagal Disimpan')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}

	}

}else if(isset($_POST['ubah'])){

	$sqlcek = "SELECT * FROM pengguna WHERE username='".$_POST['username']."' AND id <>'".$_POST['kode']."'";
	if (CekExist($koneksi,$sqlcek)== true){
		echo "<script>window.alert('Username ".$_POST['username']." sudah ada sebelumnya!')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}else{

		$stmt = $koneksi->prepare("UPDATE pengguna  SET 
			nama=?,
			username=?,
                        alamat=?,
                        email=?,
                        password=?,
			level=?
			WHERE id=?");
		$stmt->bind_param("sssssss",
			mysqli_real_escape_string($koneksi, $_POST['nama']), 
			mysqli_real_escape_string($koneksi, $_POST['username']), 
                        mysqli_real_escape_string($koneksi, $_POST['alamat']),
                        mysqli_real_escape_string($koneksi, $_POST['email']),
			mysqli_real_escape_string($koneksi, md5($_POST['password'])), 
			mysqli_real_escape_string($koneksi, $_POST['level']), 
			mysqli_real_escape_string($koneksi, $_POST['kode']));	

		if ($stmt->execute()) { 
			if($_POST['password']!="") {
                            
				mysqli_query($koneksi,"UPDATE pengguna set password='$password' WERE id='".$_POST['kode']."'");
			}
			echo "<script>alert('Data Pengguna Berhasil Diubah')</script>";
			echo "<script>window.location='index.php?hal=pengguna';</script>";	
		} else {
			echo "<script>alert('Data Pengguna Gagal Diubah')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}
}else if(isset($_GET['hapus'])){

	$stmt = $koneksi->prepare("DELETE FROM pengguna WHERE id=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data Pengguna Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=pengguna';</script>";	
	} else {
		echo "<script>alert('Data Pengguna Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>