
<?php
$nama = $this->session->userdata('nama');
?>

    <!-- Navigation -->
    <div class="container" style="background:#daa520; height: 50px;">
    <nav>
   
    <ul>
       <?php 
      if($_SESSION['logged_in']!=1){
        echo  "<li><a href='".base_url()."KP/page_login'>Masuk</a></li>";   
      }else{
        echo  "<li><a href='".base_url()."KP/page_login'>Hi! ".$_SESSION['nama']."</a></li>";
      }
      ?>
      <li><a href="<?=base_url()?>KP/panduan">Panduan Pendaftaran</a></li>
      <li><a href="<?=base_url()?>KP/index">Home</a></li>
    </ul>
    </nav>
    </div>
  <!---->