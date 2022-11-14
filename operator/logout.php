<?php
    // mengaktifkan session php
session_start();
 
// menghapus semua session
session_destroy();

// menghapus session opr
unset($_SESSION['opr']);

// mengalihkan halaman ke halaman login
header("location:../login/index.php");
?>