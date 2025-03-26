<?php require_once('./config.php') ?>
<!DOCTYPE html>
<html lang="en" class="" style="height: auto;">

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


  <title>Register</title>

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


<body class="">
  <script>
    start_loader()
  </script>
  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <!-- Row in next Div -->
            <div class="d-flex justify-content-center" style="background-color: #FFDEE9;
background-image: linear-gradient(0deg, #FFDEE9 0%, #B5FFFC 100%);
">                                               
              <div class="col-lg-7">
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="images/icon/plus.png" style="width: 120px;" alt="logo">
                    <h4 class="mt-2 mb-5 p-2">We are The Medilap Team</h4>
                  </div>

                  <form id="register-form" action="" method="POST">
                    <p class="text-info">! Register your Account</p>

                    <input type="hidden" name="id">
                    <div class="form-outline mb-4">
                      <input type="text" class="form-control" placeholder="Full Name" name="firstname" id="firstname" required />
                      <label class="form-label " for="">Name</label>
                    </div><small id="statusMsg1"></small>

                    <div class="form-outline  mb-4">
                      <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" />
                      <label class="form-label " for="">Email</label>
                    </div><small id="statusMsg2"></small>

                    <div class="form-outline  mb-4">
                      <input type="number" class="form-control" placeholder="Phone Number" name="contact" id="contact" required />
                      <label class="form-label " for="">Contact</label>
                    </div><small id="statusMsg3"></small>

                    <div class="input-group mb-4">
                      <label class="input-group-text " for="">Gender</label>
                      <select class="form-select form-control" name="gender" id="gender">
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" required />
                      <label class="form-label " for="">Password</label>
                    </div><small id="statusMsg4"></small>

                    <div class="form-outline mb-4">
                      <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" required />
                      <label class="form-label " for="">Confirm Password</label>
                    </div>
                    <small id="statusMsg5"></small>

                    <div class="input-group mb-4">
                      <label class="input-group-text " for="">Image <small class="text-muted">(Optional)</small></label>
                      <input type="file" class="form-control" id="customFile" name="img" onchange="displayImg(this,$(this))" accept="image/png, image/jpeg">
                    </div>

                    <div class="d-flex justify-content-start mb-4">
                      <label class="d-flex align-items-center pe-4">Profile Image --</label>
                      <img src="<?php echo validate_image('') ?>" alt="" id="cimg" class="img-fluid img-thumbnail w-25">
                    </div>


                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" id="">Register
                      </button>
                      <small id="successMsg"></small>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Akready have an account?</p>
                      <a class="btn btn-outline-danger" href="./login.php">Log in</a>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <a class="btn btn-outline-dark" href="./">Back To Home</a>
                    </div>
                  </form>

                </div>
              </div>
              <!-- <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">We are more than just a company</h4>
                  <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- jQuery -->
  <script src="<?= base_url ?>plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <!-- <script src="<?= base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>

  <!-- AdminLTE App -->
  <script src="<?= base_url ?>dist/js/adminlte.min.js"></script>
  <script>
    function displayImg(input, _this) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#cimg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      } else {
        $('#cimg').attr('src', "<?php echo validate_image('') ?>");
      }
    }
    $(document).ready(function() {
      end_loader();
      $('#register-form').submit(function(e) {
        e.preventDefault()
        var _this = $(this)
        var el = $('<div>')
        el.attr('style', 'font-size: 14px;');
        el.addClass('alert alert-danger err_msg py-1 font-italic')
        el.hide()
        $('.err_msg').remove()
        // if ($('#password').val() != $('#cpassword').val()) {
        //   el.text('! Password does not match')
        //   _this.prepend(el)
        //   el.show('slow')
        //   $('html, body').scrollTop(0)
        //   return false;
        // }
        if ($('#password').val() !== $('#cpassword').val()) {
          showError('! Password does not match');
          return false;
        }

        var contactVal = $('#contact').val().trim();
        if (contactVal.length !== 10 || !/^\d+$/.test(contactVal)) {
          showError('! Contact must be 10 digits');
          return false;
        }

        // If all validations pass, you can proceed with other actions or form submission here
        // ...

        // Helper function to display the error message
        function showError(message) {
          var el = $('<div>').text(message); // Creating the error message element
          el.attr('style', 'font-size: 14px;');
          el.addClass('alert alert-danger err_msg py-1 font-italic')
          el.hide()
          $('.err_msg').remove()
          _this.prepend(el);
          el.show('slow');
          $('html, body').scrollTop(0);
        }

        if (_this[0].checkValidity() == false) {
          _this[0].reportValidity();
          return false;
        }
        start_loader()
        $.ajax({
          url: _base_url_ + "classes/Users.php?f=registration",
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
</body>

</html>