<style>
    .bg-image {
        position: relative;
        background-image: url('images/Medi_img.jpeg');
        background-size: cover;
        background-position: center;
        height: 200px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Adjust the opacity here */
        backdrop-filter: blur(5px);
        /* Adjust the blur amount here */
        -webkit-backdrop-filter: blur(5px);
        /* For Safari */
    }

    .text-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #2376DD;
        text-align: center;
    }
</style>

<style>
    .card-img-top {
        width: 150px;
        /* Set the desired width */
        height: 150px;
        /* Set the desired height */
        object-fit: fill;
    }
</style>

<!-- Alert -->

<div class="alert alert-primary alert-dismissible fade show" role="alert">
    <strong>Before Order !</strong> Please Check Available Delevery Location in <b>Menu.</b>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<section>
    <div class="bg-image">
        <!-- <div class="overlay"></div> -->
        <div class="text-container">
            <h3>Welcome to Medilap</h3>
            <p>For all your Pharmaceutical needs</p>
        </div>
    </div>
</section>


<section>
    <div class="container-fluid py-3 my-2">
        <div class="row">
            <div class="col col-sm-6 col-lg-3">
                <div class="overview-item overview-item--c1">
                    <div class="overview__inner">
                        <div class="overview-box clearfix">
                            <div class="icon">
                                <i class="zmdi zmdi-account-o"></i>
                            </div>
                            <div class="text">
                                <h2>1036</h2>
                                <span>Total Users</span>
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
                                <h2>3,863</h2>
                                <span>Items Sold</span>
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
                                <h2>1,086</h2>
                                <span>This Week</span>
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
                                <i class="fas fa-indian-rupee-sign"></i>
                            </div>
                            <div class="text">
                                <h2>1,60,386</h2>
                                <span>Revenue</span>
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

<!-- <section>
    <div class="container-fluid text-center">
        <div>
            <hr>
            <h3>« Our Services »</h3>
            <hr>
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">24 Hour Support</h3>
                    <span class="desc text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    <div class="icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">Emergency Services</h3>
                    <span class="desc text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    <div class="icon">
                        <i class="fa fa-ambulance"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">Medical Counseling</h3>
                    <span class="desc text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">Premium Healthcare</h3>
                    <span class="desc text-dark">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                    <div class="icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section>
    <div class="container-fluid text-center">
        <div>
            <hr>
            <h2>« Our Services »</h2>
            <hr>
        </div>
        <div>
            <p>Expert medical support available 24/7.</p>
        </div>
        <div class="row mt-3">
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">24 Hour Support</h3>
                    <span class="desc text-dark">Accessible medical help round the clock.</span>
                    <div class="icon">
                        <i class="fa fa-stethoscope"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">Emergency Services</h3>
                    <span class="desc text-dark">Swift response to urgent medical needs.</span>
                    <div class="icon">
                        <i class="fa fa-ambulance"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">Medical Counseling</h3>
                    <span class="desc text-dark">Professional guidance for your well-being.</span>
                    <div class="icon">
                        <i class="fa fa-user-md"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="statistic__item">
                    <h3 class="number">Premium Healthcare</h3>
                    <span class="desc text-dark">Top-notch medical care for your health.</span>
                    <div class="icon">
                        <i class="fa fa-medkit"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container-fluid py-5">
        <div class="text-center">
            <hr>
            <h3>« Medicines »</h3>
            <hr>
        </div>
        <div class="row g-2">
            <?php
            $qry = $conn->query("SELECT *, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = product_list.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = product_list.id), 0)) as `available` FROM `product_list` where (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = product_list.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = product_list.id), 0)) > 0 order by RAND() limit 8");
            while ($row = $qry->fetch_assoc()) :
            ?>
                <div class="col col-xs-6 col-sm-4 col-md-3 col-lg-2">
                    <a href="./?p=products/view_product&id=<?= $row['id'] ?>">
                        <div class="card h-100 shadow">
                            <img src="<?= validate_image($row['image_path']) ?>" class="card-img-top border border-5 p-2" alt="" width="60" height="150" />
                            <div class="card-body pt-1 pb-0">
                                <h5 class="card-title"><?= $row['name'] ?></h5>
                                <p class="card-text"><small>Price : <i class="text-muted"><?= format_num($row['price'], 2) ?></i></small></p>
                            </div>
                            <div class="card-footer m-0 p-0 text-center">
                                <small class="text-muted">Details</small>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- All Products -->
        <div class="d-flex justify-content-center py-2 px-4">
            <a href="./?p=products" class="btn btn-block gradient-custom-2 text-light rounded-pill col-sm-5 col-md-4 col-lg-3">Veiw More</a>
        </div>

    </div>
</section>




<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="section-title">
                    <hr>
                    <h2 class="head-title lg-line text-warning">Our <br>Ultimate Dream</h2>
                    <hr>
                    <p class="px-4">Dedicated to improving lives with accessible and quality healthcare solutions.</p>
                    <a href="">Know more..</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="col-sm-9 more-features-box py-5">
                    <div class="more-features-box-text">
                        <div class="more-features-box-text-description">
                            <i class="fa fa-angle-right fa-2x position-absolute text-dark" aria-hidden="true"></i>
                            <h3 class="px-4 text-info"> Empowering Well-being</h3>
                            <p class="px-5">Striving to enhance lives through compassionate healthcare services and support.</p>
                        </div>
                    </div>
                    <div class="more-features-box-text">
                        <div class="more-features-box-text-description">
                            <i class="fa fa-angle-right fa-2x position-absolute text-dark" aria-hidden="true"></i>
                            <h3 class="px-4 text-info"> Innovation in Healthcare</h3>
                            <p class="px-5">Pioneering advancements to deliver modern and effective medical solutions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="" class="">
    <div class="container-fluid py-3">
        <hr>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 col-sm-4">
                <h2 class="section-title white lg-line">« A few words<br> about us »</h2>
            </div>
            <div class="col-md-4 col-sm-5">
                Committed to providing trusted healthcare products and services, enhancing lives with compassion and care.
                <p class="text-right text-primary"><i>— Medilap Healthcare</i></p>
            </div>
            <div class="col-md-2"></div>
        </div>
        <hr>
    </div>
</section>


<section class="discount_section" style="background-image: linear-gradient( 102.4deg,  rgba(253,189,85,1) 7.8%, rgba(249,131,255,1) 100.3% );">
    <div class="container-fluid py-3">
        <div class="row">
            <div class="col-lg-3 col-md-5 offset-md-2">
                <div class="detail-box">
                    <h2>
                        You get <br>
                        any medicine <br>
                        on
                        <span>
                            10% discount
                        </span>

                    </h2>
                    <p>
                        Discover quality medicines at unbeatable prices!
                    </p>
                    <div>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-5">
                <div class="img-box container">
                    <img src="" alt="" width="" height="">
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="site-section py-3">
        <div class="container-fluid">
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature">
                        <span class="wrap-icon fa-3x text-warning flaticon-24-hours-drugs-delivery"></span>
                        <h3><a href="#">Free Delivery</a></h3>
                        <p>Fast and reliable doorstep delivery, free of charge.</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature">
                        <span class="wrap-icon fa-3x text-warning flaticon-medicine"></span>
                        <h3><a href="#">New Medicine Everyday</a></h3>
                        <p>Discover the latest medicines to meet your health needs.</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="feature">
                        <span class="wrap-icon fa-3x text-warning flaticon-test-tubes"></span>
                        <h3><a href="#">Medicines Guaranteed</a></h3>
                        <p>Assured quality and authenticity of all medications.</p>
                        <p><a href="#" class="d-flex align-items-center"><span class="mr-2">Learn more</span> <span class="icon-keyboard_arrow_right"></span></a></p>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>


<section>
    <div class="py-5 bg-dark" style="background-image: linear-gradient( 58.2deg,  rgba(40,91,212,0.73) -3%, rgba(171,53,163,0.45) 49.3%, rgba(255,204,112,0.37) 97.7% );">
        <div class="container-fluid">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7">
                    <h3 class="text-light">Sign up for discount up to 30% OFF</h3>
                    <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                    <p class=""><a href="#" class="btn btn-outline-white">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</section>



<section>
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="block clear"><a href="#"><i class="fas fa-phone fa-1x"></i></a> <span><strong class="px-3 text-info">Give us a call:</strong>
                        <br> +00 (123) 456 7890</span></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="block clear"><a href="#"><i class="fas fa-envelope fa-1x"></i></a> <span><strong class="px-3 text-info">Send us a mail:</strong>
                        <br> support@domain.com</span></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="block clear"><a href="#"><i class="fas fa-clock fa-1x"></i></a> <span><strong class="px-3 text-info"> Monday - Saturday:</strong>
                        <br> 08.00am - 18.00pm</span></div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt fa-1x"></i></a> <span><strong class="px-3 text-info">Come visit us:</strong>
                        <br> Directions to <a href="#">our location</a></span></div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container-fluid border border-dark py-2 px-1 shadow-lg my-3">
        <div>
            <iframe style="width: 100%; height: 300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2041.8390990308933!2d82.8242207803666!3d21.279052011892823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a2660d43e7c317d%3A0x6ea7e9ed6e7cc640!2sBasna%2C%20Chhattisgarh%20493554!5e0!3m2!1sen!2sin!4v1689596163486!5m2!1sen!2sin" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</section>