<?php require_once('./config.php') ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Logo -->
  <link rel="icon" href="<?php echo validate_image($_settings->info('logo')) ?>" />

  <!-- CSS Style -->
  <link rel="stylesheet" href="css/loginstyle.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Sweet -->
  <link rel="stylesheet" href="<?php echo base_url ?>plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet" />


  <title>Login</title>

  <!-- jQuery -->
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo base_url ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url ?>plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo base_url ?>plugins/toastr/toastr.min.js"></script>
  <script>
    var _base_url_ = '<?php echo base_url ?>';
  </script>
  <script src="<?php echo base_url ?>dist/js/script.js"></script>
  <script src="<?php echo base_url ?>assets/js/scripts.js"></script>
</head>

<body class="" style="background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
">
  <script>
    start_loader()
  </script>

  <!-- New Login Form -->
  <section class="h-100 gradient-form" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="images/icon/plus.png" style="width: 120px;" alt="logo">
                    <h4 class="mt-4 mb-5 pb-1">We are The Medilap Team</h4>
                  </div>

                  <form id="ulogin-form" action="" method="POST">
                    <p class="text-info">!  Please Login to your Account</p>

                    <div class="form-outline mb-4">
                      <input type="email" class="form-control" placeholder="Email Address" name="email" id="" />
                      <label class="form-label" for="">Username</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" name="password" id="" />
                      <label class="form-label" for="">Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" id="">Log
                        in</button>
                      <small id="statusLogMsg"></small>
                      <a class="text-muted" href="#">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <a class="btn btn-outline-danger" href="./register.php">Create new</a>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <a class="btn btn-outline-dark" href="<?php echo base_url ?>">Back To Home</a>
                    </div>

                  </form>

                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?= base_url ?>dist/js/adminlte.min.js"></script>

  <script>
    $(document).ready(function() {
      end_loader();
      $('#ulogin-form').submit(function(e) {
        e.preventDefault()
        var _this = $(this)
        var el = $('<div>')
        el.addClass('alert alert-danger err_msg py-1')
        el.hide()
        $('.err_msg').remove()
        if ($('#password').val() != $('#cpassword').val()) {
          el.text('Password does not match')
          _this.prepend(el)
          el.show('slow')
          $('html, body').scrollTop(0)
          return false;
        }
        if (_this[0].checkValidity() == false) {
          _this[0].reportValidity();
          return false;
        }
        start_loader()
        $.ajax({
          url: _base_url_ + "classes/Login.php?f=login_customer",
          method: 'POST',
          type: 'POST',
          data: new FormData($(this)[0]),
          dataType: 'json',
          cache: false,
          processData: false,
          contentType: false,
          error: err => {
            console.log(err)
            alert('An error occurred')
            end_loader()
          },
          success: function(resp) {
            if (resp.status == 'success') {
              location.href = ('./')
            } else if (!!resp.msg) {
              el.html(resp.msg)
              el.show('slow')
              _this.prepend(el)
              $('html, body').scrollTop(0)
            } else {
              alert('An error occurred')
              console.log(resp)
            }
            end_loader()
          }
        })
      })
    })
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
  <!-- MDB -->

</body>

</html>