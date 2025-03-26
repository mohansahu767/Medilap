<?php require_once('../config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>

<body class="" style="background-image: linear-gradient( 58.2deg,  rgba(40,91,212,0.73) -3%, rgba(171,53,163,0.45) 49.3%, rgba(255,204,112,0.37) 97.7% );">
  <script>
    start_loader()
  </script>

  <style>
    .set {
      height: 600px;
    }
  </style>
  <section>
    <div class="d-flex align-items-center justify-content-center set">
      <div class="col-md-4 col-sm-8 px-4">
        <h2 class="mb-3">Please Login Your Account</h2>
        <form id="login-frm" action="" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" autofocus placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row g-3">
            <div class="col-3">
              <a href="<?php echo base_url ?>" class="btn btn-block gradient-custom-2 text-light">Back</a>
            </div>
            <div class="col-9">
              <button type="submit" class="btn btn-block gradient-custom-2 text-light">Sign In</button>
            </div>
          </div>
        </form>
      </div>
    </div>

  </section>

  <!-- jQuery -->
  <script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url ?>dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function() {
      end_loader();
    })
  </script>
</body>

</html>