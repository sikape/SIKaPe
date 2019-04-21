<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KP | INSTITUT TEKNOLOGI SUMATERA</title>

      <!-- Custom Stylesheet -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/daftarKP.css">

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
    <?php $this->load->view('header'); ?>
    <!-- Navigation Menu -->
    <?php $this->load->view('navigation'); ?>
  <!---->

    </div>
    </div>


      <div class="container">
      <div class="row content">
      <div class="row" style="font-family: times; font-size:20px; font-style: bold;">
      <marquee>Seminar KP akan dilaksanakan serentak pada tanggal 6 Oktober - 13 Oktober 2019</marquee> 
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="row">
          <img src="<?=base_url()?>assets/imgmhs/<?php echo $foto;?>" class="col-sm-12">
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12">
              <div class="list-group">
                <ul style="list-style-type: none;">
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/profile" style="color: #555; text-decoration: none; display: block;">Profile</a></li>
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/daftar" style="color: #555; text-decoration: none; display: block;">Daftar Kerja Praktik</a></li>
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/daftar_seminar_kp" style="color: #555; text-decoration: none; display: block;">Daftar Seminar Kerja Praktik</a></li>
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/cetakbukti_page/<?php echo $nim;?>" style="color: #555; text-decoration: none; display: block;">Cetak Surat</a></li>
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/logout" style="color: #555; text-decoration: none; display: block;">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
              <h2>Maaf anda belum memenuhi syarat untuk mendaftar</h2>
          </div>
        </div> 
      </div>
      </div>
<!---->
    <!-- Footer -->
    <?php $this->load->view('footer'); ?>
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>