<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sistem Informasi KP</title>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/list_pendaftar.css">

    <!-- Bootstrap -->
    <link href="<?=base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">

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
          <a href="#"><img src="<?=base_url()?>/assets/img/logo.png" width="70px" style="margin-bottom: 10px"></a>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <div class="col-sm-12">
              <h3>Sistem Informasi KP</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <p><em>"Institut Teknologi Sumatera"</em></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-12">
              <form class="searchForm">
                <input type="text" class="text-cari" placeholder="keyword..">
                <button class="button-cari" type="submit">Cari</button>
              </form>
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
        <ul>
          <li><a href="#pengumuman">Hi!</a></li>
          <li><a href="#home">Home</a></li>
          <li><a href="#panduan">Panduan Pendaftaran</a></li>
          </ul>
        </nav>
     
    </div>
    
    <div class="container">
      <div class="content">

        <div class = "left_content">
        <img src="<?=base_url()?>/assets/img/people.png">
          <ul>
            <li class="list-group-item"><a href="<?=base_url()?>">Profil</li>
            <li class="list-group-item"><a href="<?=base_url()?>">List Pendaftar KP</li>
            <li class="list-group-item"><a href="<?=base_url()?>">Logout</li>
          </ul>        
        
        </div>

        <div class = "right_content">  
          <div class = "title1">
            <p>List Pendaftar KP</p>
          </div>
          <div class = "art1">
            <table class="table_mhs">
              <thead>
              <tr>
                <th width="250px">Nama</th>
                <th width="100px">NIM</th>
                <th width="70px">Prodi</th>
                <th width="150px">Dosen Pembimbing</th>
              </tr>
              </thead>
            </table>            
          </div>
          <div class = "title2">
            <p>Note :</p>
          </div>
          <div class = "art2">
            <p>Jika anda klik nama mahasiswa, maka anda akan direct ke profil mahasiswa tersebut</p>
          </div>        
          
        </div>

      </div>
    </div>    

    <div class="container footer">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">&copy; Copyright 2019 - All rights reserved.</p>
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