<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:../login/index.php?pesan=gagal");
	}
 
	?>
<meta charset="utf-8" />
        <link rel="icon" type="image/png" href="../images/bpbd.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Halaman Pimpinan</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="../assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Light Bootstrap Table core CSS    -->
    <link href="../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    
    
    
    <div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-7.jpg">
    	<div class="sidebar-wrapper">
            <br>
            <div style="text-align:center;">
            <div class="header__logo">
            <a class="logo" href="../index.php">
            <img src="../images/bpbd.png"width="120px" height="100px alt="Homepage">
            </a>
        </div>
            </div>
            <ul class="nav">
                <li class="active">
                    <a href="halaman_pimpinan.php">
                        <i class="pe-7s-graph"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li>
                    <a href="perhitungan_daerah.php">
                        <i class="pe-7s-user"></i>
                        <p>Perhitungan Daerah</p>
                    </a>
                    
                </li>
                
                <li>
                    <a href="pemetaan_daerah.php">
                        <i class="pe-7s-user"></i>
                        <p>Pemetaan Daerah </p>
                    </a>
                    
                </li>
                 <li>
                     <a href="berita.php">
                        <i class="pe-7s-user"></i>
                        <p>Berita</p>
                    </a>
                </li>
                 
                <li>
                    <a href="logout.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Logout</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>
        
    <!--   Core JS Files   -->
    <script src="../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	