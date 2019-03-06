<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Sensus Penduduk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 4.2.1 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/fontawesome/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/AdminLTE.min.css">
</head>
<body class="hold-transition login-page">
  
<div class="login-box">
  <div class="login-logo">
    Sistem Sensus Penduduk
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan login</p>
    <?php
      echo form_open('auth/login');
    ?>
      <div class="input-group mb-3">
      <input type="text" name="email" class="form-control <?= $this->session->flashdata('form'); ?>" placeholder="Email" aria-label="Username" aria-describedby="basic-addon2" required>
        <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><i class="fas fa-user"></i></span>
  </div> 
</div>
      <div class="input-group mb-3">
      <input type="password" name="password" class="form-control <?= $this->session->flashdata('form'); ?>" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" required>
        <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2"><i class="fas fa-lock"></i></span>
  </div> 
</div><!-- <a href="" class="ml-2 mb-2">Registrasi Akun</a><br><br> -->

      <?php if ( $this->session->flashdata('message') ) : ?><div class="alert alert-danger" role="alert"><?= $this->session->flashdata('message'); ?></div>
<?php endif; ?>
      <div class="box-footer">
        <!-- /.col -->
		  <button type="submit" class="btn mx-2 float-right bg-gray" name="submit">Login</button>
      <button type="cancel" class="btn float-right bg-gray" name="cancel" formnovalidate>Cancel</button>
		</div>
		
        <!-- /.col -->
      </div>
    </form>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/jQuery/jquery-3.3.1.slim.min.js"></script>
<!-- Bootstrap 4.2.1 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
