<?php 
include '../login/koneksi.php';
include '../setting/crud.php';

session_start();

// cek apakah yang mengakses halaman ini sudah login
if(!isset($_SESSION['adm'])){
	header("location:../login/index.php?pesan=gagal");
}else{

$hal = @$_GET['hal'];

$kode=$_SESSION['adm'];
extract(ArrayData($koneksi,"pengguna","id='$kode'"));

?>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../images/bpbd.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Halaman Admin</title>
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
    
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
    
    
    <div class="wrapper">
    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-7.jpg">
    	<div class="sidebar-wrapper">
            <br>
            <div style="text-align:center;">
            <div class="header__logo">
            <a class="logo" href="../index.php">
            <img src="../images/bpbd2.png"width="160px" height="140px alt="Homepage">
            </a>
        </div>
            </div>
            <ul class="nav">
                <li <?= ($hal=='beranda' || $hal=='')?'class="active"':'' ?>>
                    <a href="?hal=beranda">
                        <i class="pe-7s-graph"></i>
                        <p>Beranda</p>
                    </a>
                </li>
                <li <?= ($hal=='pengguna' || $hal=='pengguna_olah')?'class="active"':'' ?>>
                    <a href="?hal=pengguna">
                        <i class="pe-7s-user"></i>
                        <p>Olah Pengguna</p>
                    </a>
                    
                </li>
                
                <li <?= ($hal=='profil' || $hal=='profil_olah')?'class="active"':'' ?>>
                    <a href="?hal=profil">
                        <i class="pe-7s-user"></i>
                        <p>Olah Profil</p>
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

	<div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Halaman Admin</a>
                <a class="navbar-brand" href="?hal=up_profil"><b><?php echo $nama; ?></b></a>
            </div>
        </div>
    </nav>

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

    </div>

<!-- CKeditor -->
<script src="../assets/ckeditor/ckeditor.js"></script>
<!-- <script >
    CKEDITOR.replace('idcek');
</script> -->

<!-- DataTables -->
<script src="../assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#dt').DataTable()
    // $('#example2').DataTable({
    //   'paging'      : true,
    //   'lengthChange': false,
    //   'searching'   : false,
    //   'ordering'    : true,
    //   'info'        : true,
    //   'autoWidth'   : false
    // })

    //Initialize Select2 Elements
    $('.select2').select2()
  })
</script>

</body>
</html>

<?php 
}
?>