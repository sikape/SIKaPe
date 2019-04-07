<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> KP | INSTITUT TEKNOLOGI SUMATERA</title>

	    <!-- Custom Stylesheet -->
	    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Social Icon Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header -->
    <div class="container" style="background:#fff;margin-top:0px; padding-top:30px; padding-bottom:15px; border-bottom:solid thin #e8e8e8; box-shadow: 0px -6px 22px 0px rgba(0, 0, 0, 0.2); border-radius: 3px;">
        <div class="container">
          <div class="row">
        <div class="col-sm-1">
          <a href="#"><img src="<?=base_url()?>assets/img/logo.png" width="70px" style="margin-bottom: 10px"></a>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12">
              <h3>PENDAFTARAN KP ONLINE</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p><em>"Institut Teknologi Sumatera"</em></p>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-sm-12">
              <p class="text-right" style="margin-top: 10px;">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#"><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></a>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#"><i class="fa fa-facebook fa-stack-1x fa-inverse"></i></a>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#"><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></a>
                </span>
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <a href="#"><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></a>
                </span>
              </p>
            </div>
          </div>
        </div>
      </div>
        </div>
    </div>
  
    <!-- Navigation -->
    <div class="container" style="background:#daa520; height: 50px;">
    <nav>
    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#persyaratan">Persyaratan</a></li>
      <li><a href="#panduan">Panduan Pendaftaran</a></li>
      <li><a href="#pengumuman">Pengumuman</a></li>
      <?php 
      if($_SESSION['logged_in']!=1){
        echo  "<li><a href='#loginn'>Login</a></li>";   
      }else{
        echo  "<li><a href='".base_url()."index.php/KP/page_login'>Hi! ".$_SESSION['nama']."</a></li>";
      }
      ?>
      </ul>
    </nav>
    </div>
 
     <!--SLIDESHOW-->
  <div class="container">
  <div class="row content">
  <div class="home" id="home"></div>
     
  <div class="slider" id="main-slider"><!-- outermost container element -->
  <div class="slider-wrapper"><!-- innermost wrapper element -->
    <img src="<?=base_url()?>assets/img/q1.jpg" alt="First" class="slide" /><!-- slides -->
    <img src="<?=base_url()?>assets/img/q2.jpg" alt="Second" class="slide" />
    <img src="<?=base_url()?>assets/img/q3.jpg" alt="Third" class="slide" />
  </div>
  </div>  
  </div>
  </div>

     <!--END-SLIDE-SHOW-->
  
  <!--Syarat-->
  <div class="container">
  <div class="row content">
  <div class="persyaratan" id="persyaratan"></div>
  <div style="text-align: center; padding-top: 200px; padding-bottom: 200px; color:">
    <img src="<?=base_url()?>assets/img/syarat.png"  height="220px" width="220px" >
    <a href="<?=base_url()?>index.php/KP/persyaratan"><h3>PERSYARATAN</h3></a>
  </div>
  </div>
  </div>

  <!--Panduan pendaftaran-->
      <div class="warnatem">
  <div class="container">
  <div class="row content">
  <div class="panduan" id="panduan"></div>
  <div style="text-align: center; padding-top: 200px; padding-bottom: 200px;">
    <img src="<?=base_url()?>assets/img/panduan.png"  height="220px" width="220px">
    <a href="<?=base_url()?>index.php/KP/panduan"><h3>PANDUAN PENDAFTARAN</h3></a>  
  </div>
  </div>
  </div>

  <!--Pengumuman-->
  <div class="container">
  <div class="row content">
  <div class="pengumuman" id="pengumuman"></div>
  <div style="text-align: center; padding-top: 220px; padding-bottom: 220px;">
    <img src="<?=base_url()?>assets/img/pengumuman.png" height="220px" width="220px">
    <a href="<?=base_url()?>index.php/KP/pengumuman"><h3>PENGUMUMAN</h3></a>
  </div> 
  </div> 
  </div>

   <!--Login-->
  <div class="container">
  <div class="row content">
  <div class="loginn" id="loginn"></div>
  <div style="text-align: center; padding-top: 220px; padding-bottom: 220px;">
    <img src="<?=base_url()?>assets/img/loginn.png" height="220px" width="220px">
    <a href="<?=base_url()?>index.php/KP/page_login"><h3>LOGIN</h3></a>
  </div> 
  </div> 
  </div>    
    </div>


    <div class="container footer">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">&copy; Copyright 2019</p>
        </div>
      </div>
    </div>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>