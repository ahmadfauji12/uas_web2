<div class="adminlogin">
<form action="<?= base_url('Myadmin/daftar');?>" method="post">
  <h1>Daftar</h1>
  <input type="text" name="npm" placeholder="Npm" value="<?= set_value('npm'); ?>">
  <small class="text-danger"><?= form_error('Npm') ?> </small>
  <input type="text" name="nama" placeholder="Nama" value="<?= set_value('nama'); ?>">
  <small class="text-danger"><?= form_error('nama') ?> </small>
  <input type="password" name="password" placeholder="password">
  <?= form_error('password') ?>
  <input type="password" name="password2" placeholder="Verifikasi password">
  <input type="submit" value="Daftar">
  <a>Sudah Mempunyai Akun</a>  <a href="<?php echo site_url('Myadmin/login');?>" id="signup">Masuk</a>
</form>

</div>