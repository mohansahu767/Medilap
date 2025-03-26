<!-- Cool Navbar -->


<!-- HEADER MOBILE-->
<header class="header-mobile d-block d-lg-none" style="background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);">
  <div class="header-mobile__bar">
    <div class="container-fluid">
      <div class="header-mobile-inner">
        <a class="logo" href="index.html">
          <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Cool Admin" height="52" /> <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
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
          <a class="" href="./">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
          <!-- <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
            <li>
              <a href="index.html">Dashboard 1</a>
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
          <a href="./?page=categories">
            <i class="fas fa-chart-bar"></i>Category List</a>
        </li>
        <li>
          <a href="./?page=products">
            <i class="fas fa-table"></i>Product List</a>
        </li>
        <li>
          <a href="./?page=inventory">
            <i class="far fa-check-square"></i>Inventory</a>
        </li>
        <li>
          <a href="./?p=work">
            <i class="fa fa-user-plus"></i>Staff Manage</a>
        </li>
        <li>
          <a href="#">
            <i class="fas fa-map-marker-alt"></i>Location</a>
        </li>
        <li class="has-sub">
          <a class="js-arrow" href="#">
            <i class="fas fa-copy"></i>Orders</a>
          <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
            <li>
              <a href="./?page=orders">List All</a>
            </li>
            <li>
              <a href="./?page=orders&status=0">Pending</a>
            </li>
            <li>
              <a href="./?page=orders&status=1">Packed</a>
            </li>
            <li>
              <a href="./?page=orders&status=2">Out for Delivery</a>
            </li>
            <li>
              <a href="./?page=orders&status=3">Done</a>
            </li>
          </ul>
        </li>
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
        <li>
          <a href=./?page=customers" class="nav-link nav-customers">
            <i class="nav-icon fas fa-user-friends"></i>Customer List</a>
        </li>
        <li>
          <a href="<?php echo base_url ?>admin/?page=reports">
            <i class="fas fa-th-list"></i>Daily Report</a>
        </li>
        <li>
          <a href="<?php echo base_url ?>admin/?page=user/list">
            <i class="nav-icon fas fa-users-cog"></i>User List</a>
        </li>
        <li>
          <a href="<?php echo base_url ?>admin/?page=system_info/contact_info">
            <i class="nav-icon fas fa-phone-square-alt"></i>Contact Info</a>
        </li>
        <li>
          <a href="<?php echo base_url ?>admin/?page=system_info">
            <i class="nav-icon fas fa-tools"></i>Settings</a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- END HEADER MOBILE-->