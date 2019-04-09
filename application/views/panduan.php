<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KP | INSTITUT TEKNOLOGI SUMATERA</title>

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css">
    <<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/home.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?=base_url()?>assets/css/pengumuman.css" rel="stylesheet">


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
   <?php 
      if($_SESSION['logged_in']!=1){
        echo  "<li><a href='page_login'>Login</a></li>";   
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
      <div class="row content">
        <p style="font-size: 24px; margin: 1cm"><b>PANDUAN PENDAFTARAN</b></p>
  
        <figure class="wp-block-image">
          <img src="<?=base_url()?>/assets/img/Flowchart-KP.jpg" alt class="wp-image-525" srcset="<?=base_url()?>/assets/img/Flowchart-KP.jpg 3508w, <?=base_url()?>/assets/img/Flowchart-KP.jpg 300w, <?=base_url()?>/assets/img/Flowchart-KP.jpg 768w, <?=base_url()?>/assets/img/Flowchart-KP.jpg" sizes="(max-width: 3508px) 100vw, 3508px" style="vertical-align: middle; max-width: 100%; border: 0;" >
        </figure>



        <div class="navigation" id="mainNav">
          <ul>
            <li><a class="navigation__link" href="#1">Definisi Umum</a></li>
            <li><a class="navigation__link" href="#2">Prasyarat</a></li>
            <li><a class="navigation__link" href="#3">Pembimbing KP</a></li>
            <li><a class="navigation__link" href="#4">Waktu dan Tempat Pelaksanaan KP</a></li>
            <li><a class="navigation__link" href="#5">Pendaftaran KP</a></li>
            <li><a class="navigation__link" href="#6">Proses Pelaksanaan KP</a></li>
            <li><a class="navigation__link" href="#7">Kewajiban Setelah Pelaksanaan KP</a></li>
          </ul>
        </div>

        <div class="page-section hero" id="1">
              
              <p>
                <strong>A. Definisi Umum</strong>
                <br>Matakuliah ini bertujuan memberikan kesempatan kepada para mahasiswa untuk memperoleh pengalaman praktik kerja di sebuah instansi teknologi maupun non-teknologi (dalam bidang/divisi/departemen IT) dan mengalami langsung suasana kerja dengan menerapkan ilmu yang telah diperoleh selama masa perkuliahan.
              </p>
        </div>
        <div class="page-section" id="2">
              
              <p>
                <strong>B. Prasyarat</strong>
                <br>Mahasiswa yang mengajukan pendaftaran pelaksanaan kerja praktik harus memenuhi persyaratan utama sebagai berikut :
                <br>• Mahasiswa Program Studi Teknik Informatika ITERA pada Semester 5 (telah mengambil 70 sks);
                <br>• Akan mengambil mata-kuliah Kerja Praktik dalam KRS pada Semester 6.
              </p>
        </div>
        <div class="page-section" id="3">
              
               <p>
                <strong>C. Pembimbing KP</strong>
                <br>Pembimbing KP mahasiswa ditentukan  oleh Koordinator KP melalui diskusi dengan Para Dosen Teknik Informatika. Mahasiswa yang melaksanakan KP dipersilahkan memberi masukan kepada Koordinator KP apabila memiliki pilihan Pembimbing KP-nya sendiri.
              </p>
        </div>
        <div class="page-section" id="4">
              
              <p>
                <strong>D. Waktu dan Tempat Pelaksanaan KP</strong>
                <br>Waktu pelaksanaan KP disarankan pada jeda libur semester genap ke semester ganjil. Pelaksanaan KP diluar dari jadwal yang disarankan kemungkinan akan mengalami permasalahan dalam presensi kuliah  jika beriringan dengan jadwal kuliah. Pelaksanaan KP memiliki durasi sekurang-kurangnya 25 hari kerja tatap muka dan dibuktikan dengan pengesahan Form KP-2 oleh pimpinan yang berwenang di instansi kerja. Kerja Praktik dilaksanakan di tempat dimana mahasiswa merasakan pengalaman bekerja dan situasi lingkungan kerja nyata. Oleh karena itu KP tidak diperkenankan dilaksanakan dalam lingkungan kerja jarak jauh (remote access). KP juga mengusung aspek integritas dan profesionalisme sehingga instansi tempat pelaksanaan KP harus layak untuk menjadi tempat bekerja bagi mahasiswa sesuai dengan bidang dan keahlian yang dimiliki. Koordinator dan Dosen Pembimbing KP berhak menolak pengajuan KP apabila dirasa tidak sesuai dalam aspek waktu dan tempat pelaksanaan.
              </p>
        </div>
        <div class="page-section" id="5">
              
              <p>
                <strong>E. Pendaftaran KP</strong>
                <br>Pendaftaran KP dapat dilakukan sepanjang Semester 5 berlangsung dengan mengisi Form KP-1 lalu mencetaknya (disarankan tidak menggunakan tulisan tangan) dan diserahkan kepada Bagian Administrasi program studi.
              </p>
        </div>
        <div class="page-section" id="6">
              
              <p>
                <strong>F. Proses Pelaksanaan KP</strong>
                <br>Dalam proses pelaksanaan KP, mahasiswa harus mengikuti beberapa pedoman sebagai berikut :
                <br>• Menaati segala peraturan dan ketentuan yang ada pada instansi kerja;
                <br>• Menjaga etika dan wibawa sebagai pekerja;
                <br>• Bersikap profesional dan menunjukkan etos kerja yang baik;
                <br>• Tidak melakukan perbuatan curang maupun melanggar hukum yang berlaku;
                <br>• Mendokumentasikan kegiatan harian baik di dalam kantor maupun ketika berada di lapangan. Dokumentasi berbentuk catatan harian yang bersifat logsheet pada Form KP-2, juga dokumentasi visual berupa foto dan video;
                <br>• Menjaga nama baik Institut Teknologi Sumatera dalam hal perbuatan dan tutur kata.
              </p>
        </div>
        <div class="page-section" id="7">
              
                <p>
                  <strong>G. Kewajiban Setelah Pelaksanaan KP</strong>
                  <br>1. Mahasiswa diwajibkan membuat laporan KP dan menyerahkan draft pertama kepada Pembimbing KP segera setelah pelaksanaan KP berakhir.
                  <p>2. Mahasiswa diwajibkan mendaftar Seminar KP selambat-lambatnya 30 hari setelah pelaksanaan KP berakhir dengan melampirkan :
                  <br>• Laporan KP final yang sudah disetujui oleh Pembimbing KP;
                  <br>• Form Presensi dan Logsheet KP-2 yang sudah ditandatangani oleh atasan di instansi kerja yang dibubuhi cap;
                  <br>• Foto kopi KRS semester 6 yang tercantum mata kuliah Kerja Praktik.
                  </p>
                  <p>3. Mahasiswa diwajibkan mengirim dokumentasi KP kepada Koordinator KP. Dokumentasi ini meliputi :
                    <br>• Catatan Logsheet (Form KP-2) yang berisi aktivitas harian yang dilakukan;
                    <br>• Beberapa foto / video kegiatan
                    <br>• Minimal 1 buah foto bersama dengan atasan/pegawai/karyawan yang ada di instansi KP. (Disarankan untuk berfoto di lokasi landmark perusahaan)
                    <br>Berkas diatas dikirim melalui email : informatika@itera.ac.id dengan subjek  KERJAPRAKTIK_NIM. Diperbolehkan mengunggah berkas di atas menggunakan cloud drive dan mengirimkan tautan dari drive penyimpanan melalui email.
                  </p>
                  <p>4. Mahasiswa yang melanggar batas waktu penyelesaian Laporan dan pendaftaran Seminar akan dikenakan sanksi berupa penurunan nilai sebanyak 1 grade setiap bulan (maksimal penurunan nilai sampai C).
                  </p>
                  <p>
                    5. Mahasiswa wajib menyerahkan Laporan KP yang telah dijilid hardcover paling lambat 1 minggu setelah pelaksanaan Seminar KP. Keterlambatan pengumpulan akan dikenakan sanksi penurunan nilai 1 grade setiap minggu (tidak ada batas penurunan nilai).
                  </p>
                </p>

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jumpmenu.js"></script>
  </body>
</html>
