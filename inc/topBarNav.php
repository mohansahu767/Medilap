<div class="page-wrapper">
  <!-- HEADER DESKTOP-->
  <header class="header-desktop3 d-none d-lg-block">
    <div class="section__content section__content--p35">
      <div class="header3-wrap">
        <div class="header__logo">
          <!-- Brand -->
          <div class="row d-flex align-items-center">
            <div class="col-4">
              <a href="./">
                <img src="images/icon/plus.png" alt="CoolAdmin" width="52" height="52" />
              </a>
            </div>
            <div class="col-1">
              <a href="./">
                <h3>Medilap</h3>
              </a>
            </div>
          </div>

        </div>
        <div class="header__navbar">
          <ul class="list-unstyled">
            <li class="has-sub">
              <a href="./">
                <i class="fas fa-house-medical"></i>Home
                <span class="bot-line"></span>
              </a>
              <!-- <ul class="header3-sub-list list-unstyled">
                <li>
                  <a href="#">Dashboard 1</a>
                </li>
                <li>
                  <a href="#">Dashboard 2</a>
                </li>
                <li>
                  <a href="#">Dashboard 3</a>
                </li>
                <li>
                  <a href="#">Dashboard 4</a>
                </li>
              </ul> -->
            </li>
            <li>
              <a href="./?p=products">
                <i class="fas fa-laptop-medical"></i>
                <span class="bot-line"></span>Products</a>
            </li>
            <li>
              <a href="./?p=work">
                <i class="fas fa-notes-medical"></i>
                <span class="bot-line"></span>Categories</a>
            </li>
            <li class="has-sub">
              <a href="#">
                <i class="fas fa-copy"></i>
                <span class="bot-line"></span>Pages</a>
              <ul class="header3-sub-list list-unstyled">
                <li>
                  <a href="./?p=about">About Us</a>
                </li>
                <li>
                  <a href="./?p=contact">Contact Us</a>
                </li>
                <!-- <li>
                  <a href="forget-pass.html">Forget Password</a>
                </li> -->
              </ul>
            </li>
            <li class="has-sub">
              <a href="#">
                <i class="fas fa-map-location-dot"></i>
                <span class="bot-line"></span>Delivery Location</a>
              <ul class="header3-sub-list list-unstyled">
                <li>
                  <a href="#">Bhilai</a>
                </li>
                <li>
                  <a href="#">Durg</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="header__tool">
          <!-- Cart -->
          <!--  -->
          <?php
          if ($_settings->userdata('id') != '' && $_settings->userdata('id') != 2) :
            $cart = $conn->query("SELECT COUNT(id) FROM `cart_list` where customer_id = '{$_settings->userdata('id')}' ")->fetch_array()[0];
          endif;
          $cart = isset($cart) && $cart > 0 ? $cart : '';
          ?>

          <?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
            <div class="header-button-item">
              <a href="./?p=cart_list">
                <i class="fas fa-cart-plus text-white fa-lg"></i>
                <small><span class="badge badge-primary p-1"><?= $cart > 0 ? format_num($cart) : '' ?></span></small>
              </a>
            </div>
          <?php endif; ?>



          <div class="header-button-item js-item-menu">
            <i class="fas fa-gears"></i>
            <div class="setting-dropdown js-dropdown">
              <div class="account-dropdown__body">
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="fa fa-moon-o"></i>Dark Mode</a>
                </div>
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-notifications"></i>Notifications</a>
                </div>
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-settings"></i>Setting</a>
                </div>
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-money-box"></i>Billing & Receipt</a>
                </div>
              </div>
              <div class="account-dropdown__body">
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-globe"></i>Language</a>
                </div>
                <div class="account-dropdown__item">
                  <a href="#">
                    <i class="zmdi zmdi-pin"></i>Add Your Location</a>
                </div>

              </div>
            </div>
          </div>

          <?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
            <div class="account-wrap">
              <div class="account-item account-item--style2 clearfix js-item-menu">
                <div class="image">
                  <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" alt="John Doe" />
                </div>
                <div class="content">
                  <a class="js-acc-btn" href="#"><?php echo ucwords($_settings->userdata('firstname') . ' ' . $_settings->userdata('lastname')) ?></a>
                </div>
                <div class="account-dropdown js-dropdown">
                  <div class="info clearfix">
                    <div class="image">
                      <a href="#" class="image">
                        <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" alt="John Doe" />
                      </a>
                    </div>
                    <div class="content">
                      <h5 class="name">
                        <a href="#"><?php echo ucwords($_settings->userdata('firstname') . ' ' . $_settings->userdata('lastname')) ?></a>
                      </h5>
                      <span class="email"><?php echo ucwords($_settings->userdata('email')) ?></span>
                    </div>
                  </div>
                  <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                      <a href="<?php echo base_url . '?p=user' ?>">
                        <i class="zmdi zmdi-account"></i>My Account</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="<?php echo base_url . '?p=orders' ?>">
                        <i class="fas fa-bag-shopping"></i>My Orders</a>
                    </div>
                  </div>
                  <div class="account-dropdown__footer">
                    <a href="<?php echo base_url . '/classes/Login.php?f=logout_customer' ?>">
                      <i class="zmdi zmdi-power"></i>Logout</a>
                  </div>
                </div>
              </div>
            </div>

          <?php else : ?>

            <div class="account-wrap">
              <div class="account-item account-item--style2 clearfix">

                <div class="">
                  <a class="" href="./login.php">Login</a>
                </div>
              </div>
            </div>
          <?php endif; ?>


        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER DESKTOP-->

  <!-- HEADER MOBILE-->
  <header class=" header-mobile header-mobile-2 d-block d-lg-none">
    <div class="header-mobile__bar">
      <div class="container-fluid">
        <div class="header-mobile-inner">
          <div class="row d-flex align-items-center">
            <div class="col-4">
              <a href="./">
                <img src="images/icon/plus.png" alt="CoolAdmin" width="52" height="52" />
              </a>
            </div>
            <div class="col-1">
              <a href="./">
                <h3>Medilap</h3>
              </a>
            </div>
          </div>
          <button class="hamburger hamburger--slider" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
        </div>
      </div>
    </div>
    <nav class="navbar-mobile">
      <div class="container-fluid">
        <ul class="navbar-mobile__list list-unstyled">
          <li class="has-sub">
            <a class="js-arrow" href="./">
              <i class="fas fa-house-medical"></i>Home</a>
            <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
              <li>
                <a href="#">Dashboard 1</a>
              </li>
              <li>
                <a href="index2.html">Dashboard 2</a>
              </li>
              <li>
                <a href="index3.html">Dashboard 3</a>
              </li>
              <li>
                <a href="index4.html">Dashboard 4</a>
              </li>
            </ul> -->
          </li>
          <li>
            <a href="./?p=products">
              <i class="fas fa-laptop-medical"></i>Products</a>
          </li>
          <li>
            <a href="./?p=work">
              <i class="fas fa-notes-medical"></i>Categories</a>
          </li>
          <li class="has-sub">
            <a class="js-arrow" href="#">
              <i class="fas fa-map-location-dot"></i>Available Delivery Locations</a>
            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
              <li>
                <a href="#">Bhilai</a>
              </li>
              <li>
                <a href="#">Durg</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="./?p=contact">
              <i class="fas fa-calendar-alt"></i>Contact Us</a>
          </li>
          <li>
            <a href="./?p=about">
              <i class="fas fa-map-marker-alt"></i>About US</a>
          </li>
          <!-- <li class="has-sub">
            <a class="js-arrow" href="#">
              <i class="fas fa-copy"></i>Pages</a>
            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
              <li>
                <a href="login.html">Login</a>
              </li>
              <li>
                <a href="register.html">Register</a>
              </li>
              <li>
                <a href="forget-pass.html">Forget Password</a>
              </li>
            </ul>
          </li> -->
          <!-- <li class="has-sub">
            <a class="js-arrow" href="#">
              <i class="fas fa-desktop"></i>UI Elements</a>
            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
              <li>
                <a href="button.html">Button</a>
              </li>
              <li>
                <a href="badge.html">Badges</a>
              </li>
              <li>
                <a href="tab.html">Tabs</a>
              </li>
              <li>
                <a href="card.html">Cards</a>
              </li>
              <li>
                <a href="alert.html">Alerts</a>
              </li>
              <li>
                <a href="progress-bar.html">Progress Bars</a>
              </li>
              <li>
                <a href="modal.html">Modals</a>
              </li>
              <li>
                <a href="switch.html">Switchs</a>
              </li>
              <li>
                <a href="grid.html">Grids</a>
              </li>
              <li>
                <a href="fontawesome.html">Fontawesome Icon</a>
              </li>
              <li>
                <a href="typo.html">Typography</a>
              </li>
            </ul>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <div class="sub-header-mobile-2 d-block d-lg-none">
    <div class="header__tool">

      <!-- Cart -->
      <?php
      if ($_settings->userdata('id') != '' && $_settings->userdata('id') != 2) :
        $cart = $conn->query("SELECT SUM(quantity) FROM `cart_list` where customer_id = '{$_settings->userdata('id')}' ")->fetch_array()[0];
      endif;
      $cart = isset($cart) && $cart > 0 ? $cart : '';
      ?>

      <?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
        <div class="header-button-item">
          <a href="./?p=cart_list">
            <i class="fas fa-cart-plus"></i>
            <small><span class="badge badge-primary p-1"><?= $cart > 0 ? format_num($cart) : '' ?></span></small>
          </a>
        </div>
      <?php endif; ?>
      <div class="header-button-item js-item-menu">
        <i class="fas fa-gears"></i>
        <div class="setting-dropdown js-dropdown">
          <div class="account-dropdown__body">
            <<div class="account-dropdown__item">
              <a href="#">
                <i class="fa fa-moon-o"></i>Dark Mode</a>
          </div>
          <div class="account-dropdown__item">
            <a href="#">
              <i class="zmdi zmdi-notifications"></i>Notifications</a>
          </div>
          <div class="account-dropdown__item">
            <a href="#">
              <i class="zmdi zmdi-settings"></i>Setting</a>
          </div>
          <div class="account-dropdown__item">
            <a href="#">
              <i class="zmdi zmdi-money-box"></i>Billing & Receipt</a>
          </div>
        </div>
        <div class="account-dropdown__body">
          <div class="account-dropdown__item">
            <a href="#">
              <i class="zmdi zmdi-globe"></i>Language</a>
          </div>
          <div class="account-dropdown__item">
            <a href="#">
              <i class="zmdi zmdi-pin"></i>Add Your Location</a>
          </div>
        </div>
      </div>
    </div>
    <?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
      <div class="account-wrap">
        <div class="account-item account-item--style2 clearfix js-item-menu">
          <div class="image">
            <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" alt="John Doe" />
          </div>
          <div class="content">
            <a class="js-acc-btn" href="#"><?php echo ucwords($_settings->userdata('firstname') . ' ' . $_settings->userdata('lastname')) ?></a>
          </div>
          <div class="account-dropdown js-dropdown">
            <div class="info clearfix">
              <div class="image">
                <a href="#" class="image">
                  <img src="<?php echo validate_image($_settings->userdata('avatar')) ?>" alt="John Doe" />
                </a>
              </div>
              <div class="content">
                <h5 class="name">
                  <a href="#"><?php echo ucwords($_settings->userdata('firstname') . ' ' . $_settings->userdata('lastname')) ?></a>
                </h5>
                <span class="email"><?php echo ucwords($_settings->userdata('email')) ?></span>
              </div>
            </div>
            <div class="account-dropdown__body">
              <div class="account-dropdown__item">
                <a href="<?php echo base_url . '?p=user' ?>">
                  <i class="zmdi zmdi-account"></i>My Account</a>
              </div>
              <div class="account-dropdown__item">
                <a href="<?php echo base_url . '?p=orders' ?>">
                  <i class="fas fa-bag-shopping"></i>My Orders</a>
              </div>
            </div>
            <div class="account-dropdown__footer">
              <a href="<?php echo base_url . '/classes/Login.php?f=logout_customer' ?>">
                <i class="zmdi zmdi-power"></i>Logout</a>
            </div>
          </div>
        </div>
      </div>
    <?php else : ?>

      <div class="account-wrap">
        <div class="account-item account-item--style2 clearfix">
          <div class="">
            <a class="" href="./login.php">Login</a>
          </div>
        </div>
      </div>
    <?php endif; ?>

  </div>
</div>
<!-- END HEADER MOBILE -->

<!-- PAGE CONTENT-->
<div class="page-content--bgf7">
  <!-- BREADCRUMB-->
  <section class="au-breadcrumb2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="au-breadcrumb-content">
            <div class="au-breadcrumb-left">
              <span class="au-breadcrumb-span">You are here:</span>
              <ul class="list-unstyled list-inline au-breadcrumb__list">
                <li class="list-inline-item active">
                  <a href="./">Home</a>
                </li>
                <li class="list-inline-item seprate">
                  <span>/</span>
                </li>
                <li class="list-inline-item">Dashboard</li>
              </ul>
            </div>
            <form class="au-form-icon--sm" action="" method="post">
              <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">
              <button class="au-btn--submit2" type="submit">
                <i class="zmdi zmdi-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- </div>
    </div> -->
  <script>
    $(function() {
      $('#search_report').click(function() {
        uni_modal("Search Request Report", "report/search.php")
      })
      $('#navbarResponsive').on('show.bs.collapse', function() {
        $('#mainNav').addClass('navbar-shrink')
      })
      $('#navbarResponsive').on('hidden.bs.collapse', function() {
        if ($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
      })
    })

    $('#search-form').submit(function(e) {
      e.preventDefault()
      var sTxt = $('[name="search"]').val()
      if (sTxt != '')
        location.href = './?p=products&search=' + sTxt;
    })
  </script>