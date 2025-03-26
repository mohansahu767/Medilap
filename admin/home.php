<h1>Welcome, <?php echo $_settings->userdata('firstname') . " " . $_settings->userdata('lastname') ?>!</h1>
<hr>


<section>
  <div class="container-fluid py-3 my-2">
    <div class="row">
      <div class="col col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="fas fa-th-list"></i>
              </div>
              <div class="text">
                <h2><?php
                    $category = $conn->query("SELECT * FROM category_list where delete_flag = 0")->num_rows;
                    echo format_num($category);
                    ?>
                  <?php ?></h2>
                <span>Categories</span>
              </div>
            </div>
            <div class="overview-chart">
              <canvas id="widgetChart1"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="zmdi zmdi-shopping-cart"></i>
              </div>
              <div class="text">
                <h2><?php
                    $order = $conn->query("SELECT id FROM order_list where `status` = 3")->num_rows;
                    echo format_num($order);
                    ?><?php ?></h2>
                <span>Completed Orders</span>
              </div>
            </div>
            <div class="overview-chart">
              <canvas id="widgetChart2"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="zmdi zmdi-calendar-note"></i>
              </div>
              <div class="text">
                <h2><?php
                    $order = $conn->query("SELECT id FROM order_list where `status` = 0")->num_rows;
                    echo format_num($order);
                    ?>
                  <?php ?></h2>
                <span>Pending Orders</span>
              </div>
            </div>
            <div class="overview-chart">
              <canvas id="widgetChart3"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="col col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                <i class="fas fa-file-invoice"></i>
              </div>
              <div class="text">
                <h2><?php
                    $products = $conn->query("SELECT id FROM product_list")->num_rows;
                    echo format_num($products);
                    ?>
                  <?php ?></h2>
                <span>Products</span>
              </div>
            </div>
            <div class="overview-chart">
              <canvas id="widgetChart4"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>