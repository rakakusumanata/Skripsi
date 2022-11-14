<!DOCTYPE html>
<?php include 'header.php'; ?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background:orangered">
    <br>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Halaman Login</p>
 
		<form action="cek_login.php" method="post">
                  <div style="text-align:center;">
                    <a class ="logo" href="../index.php">
            <img src="../images/bpbd2.png"width="160px" height="140px alt="Homepage>
                    </a></div>
                    
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
                            <a class="link" href="../index.php">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>