<?php

// Upload gambar
function UploadImage($fupload_name, $lokasi, $name){
  //direktori gambar
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

  //identitas file asli
  $im_src = imagecreatefromjpeg($vfile_upload);
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 150;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  imagejpeg($im,$vdir_upload . "small_" . $fupload_name);

  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}

function UploadFile($fupload_name, $lokasi, $name){
  //direktori gambar
  $vdir_upload = "$lokasi/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["$name"]["tmp_name"], $vfile_upload);

}

function limit_text($text, $limit){
  if (strlen($text)<=$limit)
  {
      echo $text;
  }else{
    $text2=substr($text,0, $limit) . '...';
      echo $text2;
  }
}




// function CariNk($conn,$id_kriteria,$nilai){

//   if($id_kriteria==1){

//     if($nilai<=1000 ){
//       $nk = 1;
//     }else if($nilai>1000 && $nilai<=4000){
//       $nk = 2;
//     }else if($nilai>4000 && $nilai<=8000){
//       $nk = 3;
//     }else if($nilai>8000 && $nilai<14000){
//       $nk = 4;
//     }else if($nilai>14000){
//       $nk = 5;
//     }

//   }else if($id_kriteria==2){

//       if($nilai<=1000 ){
//         $nk = 1;
//       }else if($nilai>1000 && $nilai<=5000){
//         $nk = 2;
//       }else if($nilai>5000 && $nilai<=8000){
//         $nk = 3;
//       }else if($nilai>8000 && $nilai<=10000){
//         $nk = 4;
//       }else if($nilai>10000){
//         $nk = 5;
//       }

//   }else if($id_kriteria==3){

//       if($nilai<=5 ){
//         $nk = 1;
//       }else if($nilai>5 && $nilai<=70){
//         $nk = 2;
//       }else if($nilai>70 && $nilai<=130){
//         $nk = 3;
//       }else if($nilai>130 && $nilai<=200){
//         $nk = 4;
//       }else if($nilai>200){
//         $nk = 5;
//       } 

//   }else if($id_kriteria==4){

//      if($nilai<=1000 ){
//         $nk = 6;
//      }else if($nilai>1000 && $nilai<=1200){
//         $nk = 5;
//       }else if($nilai>1200 && $nilai<=1600){
//         $nk = 4;
//       }else if($nilai>1600 && $nilai<=2000){
//         $nk = 3;
//       }else if($nilai>2000){
//         $nk = 2;
//       }
//   }

//   return $nk;
// }

?>