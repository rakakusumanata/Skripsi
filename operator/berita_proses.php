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
			if(is_dir("../uploaded/berita"))
			{
				$tempat_gambar = "../uploaded/berita";
			}else{
				mkdir("../uploaded/berita");
				$tempat_gambar = "../uploaded/berita";
			}
			UploadImage($nama_file, $tempat_gambar ,"gambar");
			$s=2;
		}
	}else{
		$nama_file = "default.jpg";
		$s=2;
	}

	if ($s==2) {

		$stmt = $koneksi->prepare("INSERT INTO berita 
			(id_berita,judul_berita,isi,tanggal,gambar) 
			VALUES (?, ?, ?, now(), ?)");

		$stmt->bind_param("ssss",
			mysqli_real_escape_string($koneksi, $_POST['kode']), 
			mysqli_real_escape_string($koneksi, $_POST['nama']),
			mysqli_real_escape_string($koneksi, $_POST['isi']), 
			mysqli_real_escape_string($koneksi, $nama_file));	

		if ($stmt->execute()) { 
			echo "<script>alert('Data Berita Berhasil Disimpan')</script>";
			echo "<script>window.location='index.php?hal=berita';</script>";	
		} else {
			echo "<script>alert('Data Berita Gagal Disimpan')</script>";
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
			if(is_dir("../uploaded/berita"))
			{
				$tempat_gambar = "../uploaded/berita";
			}else{
				mkdir("../uploaded/berita");
				$tempat_gambar = "../uploaded/berita";
			}
			$ambil = caridata($koneksi,"SELECT gambar FROM berita WHERE id_berita = '".$_POST['kode']."'");
			if(is_file("../uploaded/berita/".$ambil) && $ambil!='default.jpg')
				{
					unlink("../uploaded/berita/".$ambil);
					unlink("../uploaded/berita/small_".$ambil);
				}
			UploadImage($nama_file, $tempat_gambar ,"gambar");
			$s=2;
		}
	}else{
		$s=3;
	}

	if (($s==2) || ($s==3)) {

		$stmt = $koneksi->prepare("UPDATE berita SET 
			judul_berita=?,
			isi=?
			WHERE id_berita=?");
		$stmt->bind_param("sss",
			mysqli_real_escape_string($koneksi, $_POST['nama']),
			mysqli_real_escape_string($koneksi, $_POST['isi']), 
			mysqli_real_escape_string($koneksi, $_POST['kode']));	

		if ($stmt->execute()) { 
			if($s==2)
			{
				$sql="UPDATE berita SET gambar = '$nama_file' WHERE id_berita= '".$_POST['kode']."'";
				$koneksi->query($sql);
			}
			echo "<script>alert('Data Berita Berhasil Diubah')</script>";
			echo "<script>window.location='index.php?hal=berita';</script>";	
		} else {
			echo "<script>alert('Data Berita Gagal Diubah')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	}

}else if(isset($_GET['hapus'])){
	$ambil = caridata($koneksi,"SELECT gambar FROM berita WHERE id_berita = '".$_GET['hapus']."'");
	$stmt = $koneksi->prepare("DELETE FROM berita WHERE id_berita=?");
	$stmt->bind_param("s",mysqli_real_escape_string($koneksi, $_GET['hapus'])); 

	if ($stmt->execute()) { 
		//HAPUS FILE
		if(is_file("../uploaded/berita/".$ambil) && $ambil!='default.jpg')
		{
			unlink("../uploaded/berita/".$ambil);
			unlink("../uploaded/berita/small_".$ambil);
		}
		echo "<script>alert('Data Berita Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=berita';</script>";	
	} else {
		echo "<script>alert('Data Berita Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>