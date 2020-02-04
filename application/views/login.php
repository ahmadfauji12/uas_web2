<div class="adminlogin">
<?= $this->session->flashdata('pesan')?>
<form action="<?= base_url('Myadmin/login');?>" method="post">
  <h1>Login</h1>
  <input type="text" name="npm" placeholder="NPM">
  <small class="text-danger"><?= form_error('npm') ?> </small>

  <input type="password" name="password" placeholder="Password">
  <small class="text-danger"><?= form_error('password') ?> </small>
  <input type="submit" name="" value="Login">
  <a>Belum Mempunyai Akun?</a>  <a href="<?php echo site_url('Myadmin/daftar');?>" id="signup">Daftar</a>
</form>

</div>