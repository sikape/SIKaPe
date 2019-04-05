<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/loginerror.css">
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?=base_url()?>assets/js/jquery-3.2.1.js"> </script>
	<script  src="<?=base_url()?>assets/js/bootstrap.min.js"> </script>
</head>
<body style="background: url(<?=base_url()?>assets/img/terabg.jpg); background-size: 100%;">
<div class="content">
	<h1><strong>Single Sign On ITERA</strong></h1>
	<br>Selamat Datang di Sistem Single Sign On ITERA.</br>
	<br>Jangan memberikan akun login (nama pengguna dan kata sandi) anda pada siapapun.</br>
	<br>keamanan data anda terletak pada diri ada sendiri.</br>
	<h5>-Administrator</h5>
</div>
<div class="login">
	<h1 class="title">Login</h1>
	<form class="form" method="POST" action="<?=base_url()?>index.php/KP/login">

      <p class="field">
        <input type="text" name="username" placeholder="Email pengguna"/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field">
        <input type="password" name="password" placeholder="Kata Sandi"/>
        <i class="fa fa-lock"></i>
      </p>
    <button type="submit" class="Login">Login</button>
    
	<div class="alert">
  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  	<strong>Username atau Password Salah!</strong> Silahkan diulangi kembali loginnya.
	</div>
    </form>
    

</body>
</html>