<?php
    // mengaktifkan session php
session_start();
 
// menghapus semua session
// session_destroy();

// menghapus session adm
unset($_SESSION['adm']);

// mengalihkan halaman ke halaman login
header("location:../login/index.php");
?>