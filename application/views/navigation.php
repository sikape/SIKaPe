
<?php
$nama = $this->session->userdata('nama');
?>

    <!-- Navigation -->
    <div class="container" style="background:#daa520; height: 50px;">
    <nav>
    <div class="menu-icon">
      <i class="fa fa-bars fa-2x"></i>
    </div>
    <ul>
      <li><a href="<?=base_url()?>index.php/KP/profile">Hi! <?php echo $nama; ?></a></li>
      <li><a href="<?=base_url()?>index.php/KP/panduan">Panduan Pendaftaran</a></li>
      <li><a href="<?=base_url()?>index.php/KP/index">Home</a></li>
    </ul>
    </nav>
    </div>
  <!---->