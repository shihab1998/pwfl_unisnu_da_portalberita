
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Portal Berita</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url().'/assets/bower_components/bootstrap/dist/css/bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url().'/assets/bower_components/font-awesome/css/font-awesome.min.css' ?> ">
  <link rel="stylesheet" href="<?php echo base_url().'/assets/bower_components/Ionicons/css/ionicons.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url().'/assets/dist/css/AdminLTE.min.css' ?>">
  <link rel="stylesheet" href="<?php echo base_url().'/assets/plugins/iCheck/square/blue.css' ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>LogIn </b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Sign in Untuk Masuk</p>

    <form action="<?php echo base_url('c_login/login')?> " method="post">
      <div class="form-group has-feedback">
        <input type="text" name="login" class="form-control" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
</div>
<script src="<?php echo base_url().'/assets/bower_components/jquery/dist/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'/assets/bower_components/bootstrap/dist/js/bootstrap.min.js' ?>"></script>
<script src="<?php echo base_url().'/assets/plugins/iCheck/icheck.min.js' ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
