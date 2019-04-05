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
    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    <ul>
      <li><a href="<?=base_url()?>index.php/KP/dashboard">Home</a></li>
      <li><a href="#">Persyaratan</a></li>
      <li><a href="#">Panduan Pendaftaran</a></li>
	    <li><a href="#">Pengumuman</a></li>
      <li>Hi! <?php echo $namastaff; ?></li>
    </ul>
    </nav>
    </div>
  <!---->

    </div>
    </div>


      <div class="container">
      <div class="row content">
      <div class="row" style="font-family: times; font-size:20px; font-style: bold;">
      <marquee>KP akan dilaksanakan pada tanggal 6 Oktober 2019</marquee> 
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="row">
          <img src="<?=base_url()?>assets/imgdosen/<?php echo $fotostaff;?>" class="col-sm-12">
          </div>
          <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12">
               <div class="list-group">
                  <ul style="list-style-type: none;">
                   <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/profile" style="color: #555; text-decoration: none; display: block;">Profile</a></li>
                   <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/getListBimbingan" style="color: #555; text-decoration: none; display: block;">List Pendaftar KP</a></li>
                 <li class="list-group-item"><a href="<?=base_url()?>index.php/KP/logout" style="color: #555; text-decoration: none; display: block;">Logout</a></li>
            </ul>
          </div>
            </div>
          </div>
        </div>
        
         <div class="col-sm-6">
         	<h4 style="text-align: center;">Profile lengkap pendaftar : </h4>
         	<div class="list-group">
           <ul style="list-style-type: none;">
           <?php foreach($data as $value){?>
             <li class="list-group-item"><?php echo '<strong>Nama : </strong>'.  $value['nama']; ?></li>
             <li class="list-group-item"><?php echo '<strong>Nim : </strong>'.  $value['nim']; ?></li>
              <li class="list-group-item">
                  <?php if($value['jenis_kelamin']=='L'){
                  echo '<strong>Jenis Kelamin : </strong>'.'Laki-Laki';
                  }else{ '<h4>Jenis Kelamin : </h4>'.'<p>Perempuan</p>';}?>
              </li>
               <li class="list-group-item"><?php echo '<strong>Alamat : </strong>'.$value['alamat'];?></li>
               <?php if($button==0){
                  if($res>=1){?>

               <li class="list-group-item"><?php echo '<strong>Kuliah Praktik : </strong>'.$value['kp'];?></li>
               <li class="list-group-item"><?php echo '<strong>Kuliah Kerja Nyata : </strong>'.$value['kkn'];?></li>
               
               <a href="<?=base_url()?>index.php/KP/ubahBimbingan/<?php echo $value['nim']; ?>" class="btn btn-default" style="margin-top: 10px;"> Ubah</a>
               
               <div class="alert">
                 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <strong>Success message</strong>Data berhasil diubah
                 </div>
                  <?php }elseif($res==NULL){?>
               <li class="list-group-item"><?php echo '<strong>Kuliah Praktik : </strong>'.$value['kp'];?></li>
               <li class="list-group-item"><?php echo '<strong>Kuliah Kerja Nyata : </strong>'.$value['kkn'];?></li>
              
               <a href="<?=base_url()?>index.php/KP/ubahBimbingan/<?php echo $value['nim']; ?>" class="btn btn-default" style="margin-top: 10px;"> Ubah</a>
               
                 <?php }else{ ?>
                 <li class="list-group-item"><?php echo '<strong>Kuliah Praktik : </strong>'.$value['kp'];?></li>
               <li class="list-group-item"><?php echo '<strong>Kuliah Kerja Nyata : </strong>'.$value['kkn'];?></li>
               
               <a href="<?=base_url()?>index.php/KP/ubahBimbingan/<?php echo $value['nim']; ?>" class="btn btn-default" style="margin-top: 10px;"> Ubah</a>
               
               <div class="alert">
                 <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                  <strong>Error message</strong>Data gagal diubah
                 </div>
               <?php }?>
               <?php }?>
                <?php if($button==1){?>
               <form method="post" action="<?=base_url()?>index.php/KP/UpdateValidasiBimbingan/<?php echo $value['nim']; ?>" class="form">
               <li class="list-group-item">
                 <STRONG>Kuliah Praktik : </STRONG>
                 <label class="checkbox-inline"><input type="checkbox" value="sudah" name="kp">Sudah</label>
                 <label class="checkbox-inline"><input type="checkbox" value="belum" name="kp">Belum</label>
               </li>
               <li class="list-group-item">
                 <STRONG>Kuliah Kerja Nyata : </STRONG>
                 <label class="checkbox-inline"><input type="checkbox" value="sudah" name="kkn">Sudah</label>
                 <label class="checkbox-inline"><input type="checkbox" value="belum" name="kkn">Belum</label>
               </li>
               </li>
             
               </li>
               <button style ="margin-top: 10px;" class="btn btn-default" type="submit">Submit</button>
               </form>
               <?php }?>

               <?php }?>
           </ul>

         </div>
         </div>
         <div class="col-sm-3">
         <?php foreach($data as $value){ ?>
            <a href="<?=base_url()?>index.php/KP/ValidasiBimbingan/<?php echo $value['nim'];?>" class="btn btn-default" style="margin-top: 10px;"> Validasi Mahasiswa</a>
            <?php if($valid==1){?>
            <h4>Mahasiswa sudah divalidasi</h4>
            <?php }elseif($valid==2){?>
            <h4>Mahasiswa gagal divalidasi</h4>
            <?php }?>
            <?php }?>
        </div>
      </div>
      </div>
      </div>
<!---->
    <div class="container footer">
      <div class="row">
        <div class="col-sm-12">
          <p class="text-center">&copy; Copyright 2019.</p>
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