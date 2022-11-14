<?php 

require_once '../login/koneksi.php';
require_once '../setting/crud.php';
require_once '../setting/fungsi.php';

if(isset($_POST['tambah']))
{
	$s=1;
	$kode = $_POST['kode'];
	//upload
	$lokasi_file    = $_FILES['gambar']['tmp_name'];
	$tipe_file      = $_FILES['gambar']['type'];
	$nama_file      = $kode.'.jpg'; 
	// Apabila ada gambar yang diupload
	if (!empty($lokasi_file)){		  
		if ($tipe_file != "image/jpeg" && $tipe_file != "image/pjpeg"){
			echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
			//ARAHKAN
			echo "<script>window.location='javascript:history.go(-1)';</script>";
			$s=1;
		}else {
			//buat folder
			if(is_dir("../uploaded/profil"))
			{
				$tempat_gambar = "../uploaded/profil";
			}else{
				mkdir("../uploaded/profil");
				$tempat_gambar = "../uploaded/profil";
			}
			UploadImage($nama_file, $tempat_gambar ,"gambar");
			$s=2;
		}
	}else{
		$nama_file = "default.jpg";
		$s=2;
	}

	if ($s==2) {

		$stmt = $koneksi->prepare("INSERT INTO profil_bpbd 
			(id_profil_bpbd,judul_profil,isi,tanggal,gambar) 
			VALUES (?, ?, ?, now(), ?)");

		$stmt->bind_param("ssss",
			mysqli_real_escape_string($koneksi, $_POST['kode']), 
			mysqli_real_escape_string($koneksi, $_POST['judul_profil']),
			mysqli_real_escape_string($koneksi, $_POST['isi']), 
			mysqli_real_escape_string($koneksi, $nama_file));	

		if ($stmt->execute()) { 
			echo "<script>alert('Data Profil Berhasil Disimpan')</script>";
			echo "<script>window.location='index.php?hal=profil';</script>";	
		} else {
			echo "<script>alert('Data Profil Gagal Disimpan')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}

}else if(isset($_POST['ubah'])){
	$s=1;
	$kode = $_POST['kode'];
	$lokasi_file    = $_FILES['gambar']['tmp_name'];
	$tipe_file      = $_FILES['gambar']['type'];
	$nama_file      = $kode.'.jpg'; 
	// Apabila ada gambar yang diupload
	if (!empty($lokasi_file)){		  
		if ($tipe_file != "image/jpeg" && $tipe_file != "image/pjpeg"){
			echo "<script>window.alert('Upload Gagal, Pastikan File Foto yang di Upload Bertipe *.JPG')</script>";
			//ARAHKAN
			echo "<script>window.location='javascript:history.go(-1)';</script>";
			$s=1;
		}else {
			//buat folder
			if(is_dir("../uploaded/profil"))
			{
				$tempat_gambar = "../uploaded/profil";
			}else{
				mkdir("../uploaded/profil");
				$tempat_gambar = "../uploaded/profil";
			}
			$ambil = caridata($koneksi,"SELECT gambar FROM profil_bpbd WHERE id_profil_bpbd = '".$_POST['kode']."'");
			if(is_file("../uploaded/profil/".$ambil) && $ambil!='default.jpg')
				{
					unlink("../uploaded/profil/".$ambil);
					unlink("../uploaded/profil/small_".$ambil);
				}
			UploadImage($nama_file, $tempat_gambar ,"gambar");
			$s=2;
		}
	}else{
		$s=3;
	}

	if (($s==2) || ($s==3)) {

		$stmt = $koneksi->prepare("UPDATE profil_bpbd SET 
			judul_profil=?,
			isi=?
			WHERE id_profil_bpbd=?");
		$stmt->bind_param("sss",
			mysqli_real_escape_string($koneksi, $_POST['judul_profil']),
			mysqli_real_escape_string($koneksi, $_POST['isi']), 
			mysqli_real_escape_string($koneksi, $_POST['kode']));	

		if ($stmt->execute()) { 
			if($s==2)
			{
				$sql="UPDATE profil_bpbd SET gambar = '$nama_file' WHERE id_profil_bpbd= '".$_POST['kode']."'";
				$koneksi->query($sql);
			}
			echo "<script>alert('Data Profil Berhasil Diubah')</script>";
			echo "<script>window.location='index.php?hal=profil';</script>";	
		} else {
			echo "<script>alert('Data Profil Gagal Diubah')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}

}else if(isset($_GET['hapus'])){
	$ambil = caridata($koneksi,"SELECT gambar FROM profil_bpbd WHERE id_profil_bpbd = '".$_GET['hapus']."'");
	$stmt = $koneksi->prepare("DELETE FROM profil_bpbd WHERE id_profil_bpbd=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		//HAPUS FILE
		if(is_file("../uploaded/profil/".$ambil) && $ambil!='default.jpg')
		{
			unlink("../uploaded/profil/".$ambil);
			unlink("../uploaded/profil/small_".$ambil);
		}
		echo "<script>alert('Data Profil Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=profil';</script>";	
	} else {
		echo "<script>alert('Data Profil Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>