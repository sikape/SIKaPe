<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KP | INSTITUT TEKNOLOGI SUMATERA</title>

      <!-- Custom Stylesheet -->
      <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/afterlogin.css">

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
        <div class="col-sm-6">
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
      <li><a href="<?=base_url()?>index.php/KP/dashboard">Home</a></li>
      <li><a href="<?=base_url()?>index.php/KP/persyaratan">Persyaratan</a></li>
      <li><a href="<?=base_url()?>index.php/KP/panduan">Panduan Pendaftaran</a></li>
      <li><a href="<?=base_url()?>index.php/KP/pengumuman">Pengumuman</a></li>
      <li>Hi! <?php echo $nama; ?></li>
    </ul>
    </nav>
    </div>
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
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/seminar" style="color: #555; text-decoration: none; display: block;">Daftar Seminar Kerja Praktik</a></li>
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/cetakbukti_page/<?php echo $nim;?>" style="color: #555; text-decoration: none; display: block;">Cetak Surat</a></li>
                  <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/logout" style="color: #555; text-decoration: none; display: block;">Logout</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
        <div class="row">
          <form class="form" method="post" action="<?=base_url()?>index.php/KP/submit_daftar" style="margin-top: 20px;">
          <div class="form-group">
            <label for="Nama">Nama Lengkap :</label>
            <input name ="Nama" type="text" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Nim">NIM :</label>
            <input name = "Nim" type="text" class="form-control" required="">
          </div>
           <div class="form-group">
            <label for="Prodi">Program Studi :</label>
            <input name = "Prodi" type="text" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Alamat_lengkap">Alamat Lengkap :</label>
            <textarea name = "Alamat_lengkap" type="text" class="form-control" rows="3" required=""></textarea> 
          </div>
          <div class="form-group">
            <label for="No_handphone">No. Handphone :</label>
            <input name = "No_handphone" type="number" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Email">Email :</label>
            <input name = "Email" type="emai" placeholder="name@example.com" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Nama_instansi">Nama Instansi :</label>
            <input name = "Nama_instansi" type="text" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Alamat_instansi">Alamat Instansi :</label>
            <textarea name = "Alamat_instansi" type="text" class="form-control" rows="3" required=""></textarea> 
          </div>
          <div class="form-group">
            <label for="No_instansi">No. Telp Instansi :</label>
            <input name = "No_instansi" type="number" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Bidang">Bidang :</label>
            <select name = "Bidang" type="text" class="form-control">
							<option value="-Pilih-">-Pilih-</option>
              <option value="Software Engineer">Software Engineer</option>
              <option value="Game Developer">Game Developer</option>
              <option value="System Analyst dan System Integrator">System Analyst dan System Integrator</option>
              <option value="Konsultan IT">Konsultan IT</option>
              <option value="Database Engineer / Database Administrator">Database Engineer / Database Administrator</option>
              <option value="Web Engineer / Web Administrator">Web Engineer / Web Administrator</option>
              <option value="Programmer">Programmer</option>
              <option value="Intelligent System Developer">Intelligent System Developer</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Posisi">Posisi :</label>
            <select name = "Posisi" type="text" class="form-control">
							<option value="-Pilih-">-Pilih-</option>
              <option value="Front End Developer">Front End Developer</option>
              <option value="Back End Developer">Back End Developer</option>
              <option value="Data Analyst">Data Analyst</option>
              <option value="Data Scientist">Data Scientist</option>
              <option value="Quality Assurance">Quality Assurance</option>
              <option value="UI/UX Designer">UI/UX Designer</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="form-group">
            <label for="Waktu_pelaksanaan">Waktu Pelaksanaan :</label>
            <input name = "Waktu_pelaksanaan" type="date" class="form-control" required="">
          </div>
          <div class="form-group">
            <label for="Transkrip">Transkrip :</label>
            <input name = "Transkrip" type="file" class="form-control-file" required="">
          </div>
          <div class="form-group">
            <input name ="No_Pendaftaran_KP" type="hidden" class="form-control" required="">
          </div>
          
          <button type="submit" class="btn btn-info btn-lg"s style="background-color: #DAA520; color:white;">Submit</button>
          <?php
            if($res>=1){
              echo '<div class="alert-box success form-feedback"> Data yang diinputkan sukses</div>';
              $res=NULL;
            }elseif ($res!=NULL&&$res<1){
              echo '<div class="alert-box success form-feedback"> Data yang diinputkan gagal</div>';
               $res=NULL;
            }else{
              $res=NULL;
            }
          ?>
          
        </form>
        </div>
        <div class="row">
          <div class="h3">Keterangan</div>
          <ul>
            <li>Harap menginputkan email yang aktif karena email tersebut akan dimasukan ke data.</li>
          </ul>
        </div>
        </div> 
      </div>
      </div>
<!---->
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
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/script.js"></script>
  </body>
</html>
