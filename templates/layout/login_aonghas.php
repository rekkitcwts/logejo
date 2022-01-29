<!-- in /templates/Users/login.php -->
<!-- Aonghas Login Page -->
<!-- TBD: Create separate Login Page for external site users -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aonghas Control Panel - Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="/" class="h1"><?= __('Aonghas Control Panel') ?></a>
    </div>
    <div class="card-body">
	<?= $this->Flash->render() ?>
      <p class="login-box-msg"><?= __('Sign in to start your session') ?></p>

    
    <?= $this->Form->create() ?>
	<div class="input-group mb-3">
        	<?= $this->Form->text('username', ['label' => false,'required' => true, 'class' => 'form-control', 'placeholder' => 'Username']) ?>
		<div class="input-group-append">
            		<div class="input-group-text">
              			<span class="fas fa-envelope"></span>
            		</div>
          	</div>
        </div>
	<div class="input-group mb-3">
        <?= $this->Form->password('password', ['label' => false,'required' => true, 'class' => 'form-control', 'placeholder' => 'Password']) ?>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
    <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary btn-block']); ?>
</div>
          <!-- /.col -->
        </div>
    <?= $this->Form->end() ?>

      <div class="social-auth-links text-center mt-2 mb-3">
        
      </div>
      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
