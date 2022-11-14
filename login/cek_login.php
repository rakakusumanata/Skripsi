<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from pengguna where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['adm'] = $data['id'];
		// $_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/index.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="operator"){
		// buat session login dan username
		$_SESSION['opr'] = $data['id'];
		// $_SESSION['level'] = "operator";
		// alihkan ke halaman dashboard pegawai
		header("location:../operator/index.php");
 
	// cek jika user login sebagai pengurus
	}else if($data['level']=="pimpinan"){
		// buat session login dan username
		$_SESSION['pim'] = $data['id'];
		// $_SESSION['level'] = "pimpinan";
		// alihkan ke halaman dashboard pengurus
		header("location:../pimpinan/index.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		echo "<script>window.location='index.php';</script>";
	}	
}else{
	echo "<script>alert('Username atau password tidak terdaftar!')</script>";
	echo "<script>window.location='index.php';</script>";
}
 
?>