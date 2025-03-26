<!-- Cool Navbar -->
<!-- MENU SIDEBAR-->
<aside class="menu-sidebar d-none d-lg-block">
  <div class="logo" style="background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);">
    <a href="#">
      <img src="<?php echo validate_image($_settings->info('logo')) ?>" alt="Cool Admin" height="52" /> <span class="brand-text font-weight-bold"><?php echo $_settings->info('short_name') ?></span>
    </a>
  </div>
  <div class="menu-sidebar__content js-scrollbar1" style="background-image: linear-gradient(to top, #fff1eb 0%, #ace0f9 100%);">
    <nav class="navbar-sidebar">
      <ul class="list-unstyled navbar__list">
        <li class="has-sub">
          <a class="" href="./">
            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
          <!-- <ul class="list-unstyled navbar__sub-list js-sub-list">
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
          <ul class="list-unstyled navbar__sub-list js-sub-list">
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
          <ul class="list-unstyled navbar__sub-list js-sub-list">
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
    </nav>
  </div>
</aside>
<!-- END MENU SIDEBAR-->


<!-- Main Header Home Cool -->

<!-- PAGE CONTAINER-->
<div class="page-container">
  <!-- HEADER DESKTOP-->
  <header class="header-desktop" style="background-image: linear-gradient(120deg, #89f7fe 0%, #66a6ff 100%);">
    <div class="section__content section__content--p30">
      <div class="container-fluid">
        <div class="header-wrap">
          <form class="form-header" action="" method="POST">
            <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
            <button class="au-btn--submit" type="submit">
              <i class="zmdi zmdi-search"></i>
            </button>
          </form>
          <div class="header-button">
            <div class="noti-wrap">
              <div class="noti__item js-item-menu">
                <i class="zmdi zmdi-comment-more text-light"></i>
                <span class="quantity">1</span>
                <div class="mess-dropdown js-dropdown">
                  <div class="mess__title">
                    <p>You have 2 news message</p>
                  </div>
                  <div class="mess__item">
                    <div class="image img-cir img-40">
                      <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                    </div>
                    <div class="content">
                      <h6>Michelle Moreno</h6>
                      <p>Have sent a photo</p>
                      <span class="time">3 min ago</span>
                    </div>
                  </div>
                  <div class="mess__item">
                    <div class="image img-cir img-40">
                      <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                    </div>
                    <div class="content">
                      <h6>Diane Myers</h6>
                      <p>You are now connected on message</p>
                      <span class="time">Yesterday</span>
                    </div>
                  </div>
                  <div class="mess__footer">
                    <a href="#">View all messages</a>
                  </div>
                </div>
              </div>
              <div class="noti__item js-item-menu">
                <i class="zmdi zmdi-email text-light"></i>
                <span class="quantity">1</span>
                <div class="email-dropdown js-dropdown">
                  <div class="email__title">
                    <p>You have 3 New Emails</p>
                  </div>
                  <div class="email__item">
                    <div class="image img-cir img-40">
                      <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                    </div>
                    <div class="content">
                      <p>Meeting about new dashboard...</p>
                      <span>Cynthia Harvey, 3 min ago</span>
                    </div>
                  </div>
                  <div class="email__item">
                    <div class="image img-cir img-40">
                      <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                    </div>
                    <div class="content">
                      <p>Meeting about new dashboard...</p>
                      <span>Cynthia Harvey, Yesterday</span>
                    </div>
                  </div>
                  <div class="email__item">
                    <div class="image img-cir img-40">
                      <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                    </div>
                    <div class="content">
                      <p>Meeting about new dashboard...</p>
                      <span>Cynthia Harvey, April 12,,2018</span>
                    </div>
                  </div>
                  <div class="email__footer">
                    <a href="#">See all emails</a>
                  </div>
                </div>
              </div>
              <div class="noti__item js-item-menu">
                <i class="zmdi zmdi-notifications text-light"></i>
                <span class="quantity">3</span>
                <div class="notifi-dropdown js-dropdown">
                  <div class="notifi__title">
                    <p>You have 3 Notifications</p>
                  </div>
                  <div class="notifi__item">
                    <div class="bg-c1 img-cir img-40">
                      <i class="zmdi zmdi-email-open"></i>
                    </div>
                    <div class="content">
                      <p>You got a email notification</p>
                      <span class="date">April 12, 2018 06:50</span>
                    </div>
                  </div>
                  <div class="notifi__item">
                    <div class="bg-c2 img-cir img-40">
                      <i class="zmdi zmdi-account-box"></i>
                    </div>
                    <div class="content">
                      <p>Your account has been blocked</p>
                      <span class="date">April 12, 2018 06:50</span>
                    </div>
                  </div>
                  <div class="notifi__item">
                    <div class="bg-c3 img-cir img-40">
                      <i class="zmdi zmdi-file-text"></i>
                    </div>
                    <div class="content">
                      <p>You got a new file</p>
                      <span class="date">April 12, 2018 06:50</span>
                    </div>
                  </div>
                  <div class="notifi__footer">
                    <a href="#">All notifications</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="account-wrap">
              <div class="account-item clearfix js-item-menu">
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
                      <span class="email">Email@.com</span>
                    </div>
                  </div>
                  <div class="account-dropdown__body">
                    <div class="account-dropdown__item">
                      <a href="<?php echo base_url . 'admin/?page=user' ?>">
                        <i class="zmdi zmdi-account"></i>My Account</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-settings"></i>Setting</a>
                    </div>
                    <div class="account-dropdown__item">
                      <a href="#">
                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                    </div>
                  </div>
                  <div class="account-dropdown__footer">
                    <a href="<?php echo base_url . '/classes/Login.php?f=logout' ?>">
                      <i class="zmdi zmdi-power"></i>Logout</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</div>
<!-- HEADER DESKTOP-->