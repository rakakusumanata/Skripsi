<?php

include 'login/koneksi.php';
include 'setting/crud.php';
include 'setting/fungsi.php';

$hal = @$_GET['hal'];
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>BPBD Kab Bantul</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>


</head>
<body style="background: orangered">

    <!-- header
    ================================================== -->
    <header class="s-header header">
        <div class="header__logo">
            <a class="logo" href="index.php">
                <img src="images/bpbd.png" alt="Homepage">
            </a>
        </div> <!-- end header__logo -->
        <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
        <nav class="header__nav-wrap">
            <h2 class="header__nav-heading h6">Navigate to</h2>
            <ul class="header__nav">
                <li class="current"><a href="index.php" title="">Beranda</a></li>
                <li class="has-children">
                    <a href="#0" title="">Profil BPBD</a>
                    <ul class="sub-menu">
                        <li><a href="?hal=profil_bpbd&id=1">Sejarah Terbentuknya BPBD</a></li>
                        <li><a href="?hal=profil_bpbd&id=2">Tugas dan Fungsi</a></li>
                        <li><a href="?hal=profil_bpbd&id=3">Visi dan Misi</a></li>
                        <li><a href="?hal=profil_bpbd&id=4">Struktur Organiasi</a></li>
                    </ul>
                </li>
                <li><a href="pemetaan.php" title="">Pemetaan</a></li>
                <li><a href="?hal=berita" title="">Berita</a></li>
                <li><a href="login/index.php" title="">Login</a></li>
            </ul> <!-- end header__nav -->
            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>
        </nav> <!-- end header__nav-wrap -->
    </header> <!-- s-header -->
    <br/>
    <center>
        <h4>PENERAPAN METODE MULTI-OBJECTIVE OPTIMIZATION ON THE BASIS OF RATIO ANALYSIS (MOORA) 
 <br/>DALAM PEMETAAN PRIORITAS DAERAH KRISIS AIR BERSIH 
 <br>(Studi Kasus Badan Penanggulangan Bencana Daerah Kabupaten Bantul) </h4>
 

    </center>
    <!-- featured 
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">

    <?php
    $modul = "";
    $default = $modul."beranda.php";
    if(!$hal){
        require_once "$default";
    }else{
        switch($hal){
            case $hal:
            if(is_file($modul.$hal.".php"))
            {
                require_once $modul.$hal.".php";
            }
            else
            {
                require_once "$default";
            }
            break;
            default:
            require_once "$default";
        }
    }

    ?>

    </section> <!-- end s-featured -->
    <!-- s-content
    ================================================== -->
      <!-- s-footer
    ================================================== -->
    <footer class="s-footer">
        <div class="s-footer__main">
            <div class="row">
                <div class="col-six tab-full s-footer__about">
                    <h4>PUSDALOPS</h4>
                    <p>Pusdalops BPBD Kabupaten Bantul merupakan unit kerja 
                        yang beroperasi di bawah Badan Penanggulangan Bencana 
                        Daerah Kabupaten Bantul yang beroperasi 24 jam setiap harinya, 
                        7 hari dalam seminggu (24/7), berfungsi sebagai pusat operasi, 
                        pengendalian, dan peringatan, dimana informasi mengenai ancaman 
                        dan kejadian dianalisa dan disebarluaskan.</p>
                </div> <!-- end s-footer__about -->
                <div class="col-six tab-full s-footer__subscribe">
                    <h4>HUBUNGI KAMI</h4>
                    <p> Jalan KH. Wakhid Hasyim Palbapang  Bantul
                        <br>Email : bpbd@bantulkab.go.id
                        <br>Telp./ Fax : 0274 646 2100
                        <br>Telephone : 0274 368 222</p>
                   
                </div> <!-- end s-footer__subscribe -->
            </div>
        </div> <!-- end s-footer__main -->

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/pusdalops.bantul"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/pusdalopsbantul"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://bpbd.bantulkab.go.id/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/channel/UCWaHdmHGp1jFQwHHaLzFOqQ"><i class="fab fa-youtube"></i></a>
                        </li>
                       
                    </ul>
                </div>

              
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="fa fa-angle-up" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <!-- DataTables -->
    <script src="../assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
      $(function () {
        $('#dt').DataTable()

        //Initialize Select2 Elements
        $('.select2').select2()
      })
    </script>

</body>
</html>