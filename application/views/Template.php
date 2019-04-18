<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Informasi KP</title>

    <!-- Custom Stylesheet -->
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/home.css">

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
     <!-- Header--->
<?php $this->load->view('header'); ?>

  
    <!-- Navigation--->
    <div class="container" style="background:#daa520; height: 50px;">
        <nav>

        <ul>
          <?php 
      if($_SESSION['logged_in']!=1){
        echo  "<li><a href='".base_url()."index.php/KP/page_login'>Login</a></li>";   
      }else{
        echo  "<li><a href='".base_url()."index.php/KP/page_login'>Hi! ".$_SESSION['nama']."</a></li>";
      }
      ?>
      <li><a href="<?=base_url()?>index.php/KP/panduan">Panduan Pendaftaran</a></li>
      <li><a href="<?=base_url()?>index.php/KP/index">Home</a></li>

          </ul>
        </nav>
     
    </div>

    
    <div class="container">
      <div class="content">

        <div class = "banner">
          <img src="<?=base_url()?>assets/img/banner.jpg" >
        </div>

        <hr class="style1">
        
        <div class = "left_content">
          <h3>Informasi Magang</h3>
          <div class="articleT">
            <a href="#"><img src="<?=base_url()?>assets/img/bl.jpg"></a>
            <h4>Judul Article</h4>
          </div>

          <div class="articleT">
            <a href="#"><img src="<?=base_url()?>assets/img/bl.jpg" ></a>
            <h4>Judul Article</h4>
          </div>

          <div class="articleD">
            <a href="#"><img src="<?=base_url()?>assets/img/tp.jpg" ></a>
            <h4>Judul Article</h4>
          </div>

          <div class="articleD">
            <a href="#"><img src="<?=base_url()?>assets/img/tp.jpg" ></a>
            <h4>Judul Article</h4>
          </div>
        
        </div>

        <div class = "right_content">          
          <h3>Jadwal Seminar KP</h3>
          <table class="table1">
          <tr>
            <th width="70px">Nama</th>
            <th width="50px">Jenis Seminar</th>
            <th width="50px">Waktu</th>
            <th>Ruang</th>
            <th>Pembimbing</th>
          </tr>

          <tr>
            <th>Nur Ali Majid</th>
            <th>KP</th>
            <th>17-05-2019/13.00</th>
            <th>D212</th>
            <th>I Wayan Wiprayoga W, S,Kom.,M.Kom</th>
          </tr>

          <tr>
            <th>Nur Ali Majid</th>
            <th>KP</th>
            <th>17-05-2019/13.00</th>
            <th>D212</th>
            <th>I Wayan Wiprayoga W, S,Kom.,M.Kom</th>
          </tr>

          <tr>
            <th>Nur Ali Majid</th>
            <th>KP</th>
            <th>17-05-2019/13.00</th>
            <th>D212</th>
            <th>I Wayan Wiprayoga W, S,Kom.,M.Kom</th>
          </tr>
          </table>
         
        </div>
        
      </div>
    </div>

    <div class="container footer">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">&copy; Copyright 2019. SiKaPe</p>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
