<div class="sidebar">
    <header>Admin</header>
  <ul>
    <li><a href="<?php echo site_url('Myadmin/admin');?>"><i class="fas fa-qrcode"></i>Dashboard</a></li>
    <li><a href="<?php echo site_url('Myadmin/mahasiswa');?>"><i class="fas fa-stream"></i>Mahasiswa</a></li>
    <li><a href="<?php echo site_url('Myadmin/dosen');?>"><i class="fas fa-stream"></i>Dosen</a></li>
    <li><a href="<?php echo site_url('Myadmin/event');?>"><i class="fas fa-calendar-week"></i>Agenda</a></li>
    <li onclick="return confirm('apa anda yakin.....?');"><a href="<?php echo site_url('Myadmin/logout');?>"><i class="fas fa-power-off" ></i>Keluar</a></li>
  </ul>
</div>