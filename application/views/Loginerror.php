<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/loginerror.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/loginStyle.css">
	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="<?=base_url()?>assets/js/jquery-3.2.1.js"> </script>
	<script  src="<?=base_url()?>assets/js/bootstrap.min.js"> </script>
</head>
<body style="background: url(<?=base_url()?>assets/img/bgg.jpg); background-size: 100%;">
<div class="row">
    <div class="col-lg-6" >
      <div class="content">
      <div class="garis" >
    <h1><strong>Single Sign On ITERA</strong></h1>
    <p">Selamat Datang di Sistem Single Sign On ITERA.</p>
    <p>Jangan memberikan akun login (nama pengguna dan kata sandi) anda<br>pada siapapun.<br>
    keamanan data anda terletak pada diri ada sendiri.</p>
    <h5>-Administrator</h5>
  </div>  
    </div>
    </div>
   <div class="col-lg-6" >
   <div class="content">
   <div class="box">
        <div class="gem"><img src="<?=base_url()?>/assets/img/gem.png"></div>
        <form class="fl" action="<?=base_url()?>KP/Login  " method="post">
            <input class="itpw" type="text" name="username" placeholder="Email pengguna"><br>
            <input class="itpw" type="password" name="password" placeholder="Kata Sandi"><br>
            <input class="its" type="submit" name="login" value="Masuk">
        </div>
  
		<div class="alert">
	  	<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
	  	<strong>Username atau Password Salah!</strong> Silahkan diulangi kembali loginnya.
		</div>
	    </form>
	</div>
  	</div>
  	</div>
    

</body>
</html>