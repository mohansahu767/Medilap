<!-- <?php
if (isset($_GET['id']) && $_GET['id'] > 0) {
	$qry = $conn->query("SELECT p.*, c.name as `category`, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = p.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = p.id), 0)) as `available`  from `product_list` p inner join `category_list` c on p.category_id = c.id where p.id = '{$_GET['id']}' and p.delete_flag = 0 ");
	if ($qry->num_rows > 0) {
		foreach ($qry->fetch_assoc() as $k => $v) {
			$$k = $v;
		}
	} else {
		echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
	}
} else {
	echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
}
?>

<section>
	<div class="container-fluid text-center">
		<div>
			<hr>
			<h3>Product details</h3>
			<hr>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<div class="col-sm-8">
			<div class="d-flex justify-content-center py-4">
				<img src="<?= validate_image(isset($image_path) ? $image_path : '') ?>" alt="<?= isset($name) ? $name : '' ?>" class="img-thumbnail p-2 border" id="product-img" style="width: 170px;">
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Name</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($name) ? $name : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Brand</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($brand) ? $brand : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Dose</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($dose) ? $dose : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Category</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($category) ? $category : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Description</h5>
				</div>
				<div class="col-8">
					<div><?= isset($description) ? str_replace(["\n\r", "\n", "\r"], "<br>", $description) : '' ?></div>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Price</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($price) ? format_num($price, 2) : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Available Stock</h5>
				</div>
				<div class="col-8">
					<h6><?= isset($available) ? format_num($available, 0) : "" ?></h6>
				</div>
			</div>
			<hr>

			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-6">
					<?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
						<button class="btn btn-primary btn-block fa-lg gradient-custom-2 rounded-0" type="button" id="add_to_cart"><i class="fa fa-cart-plus"></i> Add to Cart</button>
					<?php else : ?>
						<a class="btn btn-primary btn-block gradient-custom-2 text-light rounded-0" href="./login.php"><i class="fa fa-cart-plus"></i> Add to Cart</a>
					<?php endif; ?>
				</div>
				<div class="col-6">
					<a class="btn btn-primary btn-block fa-lg gradient-custom-2 rounded-0" href="./?p=products"><i class="fa fa-angle-left"></i> Back to List</a>
				</div>
			</div>
			<hr>

		</div>

	</div>
</section>

<script>
	$(function() {
		$('#add_to_cart').click(function() {
			_conf("Are you sure to add this product to your cart?", "add_cart", [])
		})
	})

	function add_cart() {
		start_loader();
		$.ajax({
			url: _base_url_ + "classes/Master.php?f=add_to_card",
			method: "POST",
			data: {
				product_id: "<?= isset($id) ? $id : '' ?>"
			},
			dataType: "json",
			error: err => {
				console.log(err)
				alert_toast("An error occured.", 'error');
				end_loader();
			},
			success: function(resp) {
				if (typeof resp == 'object' && resp.status == 'success') {
					location.reload();
				} else if (!!resp.msg) {
					alert_toast(resp.msg, 'error');
				} else {
					alert_toast("An error occured.", 'error');
				}
				end_loader();
			}
		})
	}
</script> -->
























<?php
if (isset($_GET['id']) && $_GET['id'] > 0) {
	$qry = $conn->query("SELECT p.*, c.name as `category`, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = p.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = p.id), 0)) as `available`  from `product_list` p inner join `category_list` c on p.category_id = c.id where p.id = '{$_GET['id']}' and p.delete_flag = 0 ");
	if ($qry->num_rows > 0) {
		foreach ($qry->fetch_assoc() as $k => $v) {
			$$k = $v;
		}
	} else {
		echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
	}
} else {
	echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
}
?>

<!-- <section class="py-3">
	<div class="container">
		<div class="content py-5 px-3 bg-gradient-danger">
			<h2><b>Product Details</b></h2>
		</div>
		<div class="row mt-lg-n4 mt-md-n4 justify-content-center">
			<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="card rounded-0">
					<div class="card-body">
						<div class="container-fluid">
							<center>
								<img src="<?= validate_image(isset($image_path) ? $image_path : '') ?>" alt="<?= isset($name) ? $name : '' ?>" class="img-thumbnail p-0 border" id="product-img">
							</center>
							<dl>
								<dt class="text-muted">Brand</dt>
								<dd class="pl-4"><?= isset($brand) ? $brand : "" ?></dd>
								<dt class="text-muted">Name</dt>
								<dd class="pl-4"><?= isset($name) ? $name : "" ?></dd>
								<dt class="text-muted">Dose</dt>
								<dd class="pl-4"><?= isset($dose) ? $dose : "" ?></dd>
								<dt class="text-muted">Category</dt>
								<dd class="pl-4"><?= isset($category) ? $category : "" ?></dd>
								<dt class="text-muted">Description</dt>
								<dd class="pl-4"><?= isset($description) ? str_replace(["\n\r", "\n", "\r"], "<br>", $description) : '' ?></dd>
								<dt class="text-muted">Price</dt>
								<dd class="pl-4"><?= isset($price) ? format_num($price, 2) : "" ?></dd>
								<dt class="text-muted">Available Stock</dt>
								<dd class="pl-4"><?= isset($available) ? format_num($available, 0) : "" ?></dd>
							</dl>
						</div>
					</div>
					<div class="card-footer py-1 text-center">
						<?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
							<button class="btn btn-maroon btn-sm bg-gradient-maroon text-light rounded-0" type="button" id="add_to_cart"><i class="fa fa-cart-plus"></i> Add to Cart</button>
						<?php else : ?>
							<a class="btn btn-maroon btn-sm bg-gradient-maroon text-light rounded-0" href="./login.php"><i class="fa fa-cart-plus"></i> Add to Cart</a>
						<?php endif; ?>
						<a class="btn btn-light btn-sm bg-gradient-light border rounded-0" href="./?p=products"><i class="fa fa-angle-left"></i> Back to List</a>
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
			<h3>Product details</h3>
			<hr>
		</div>
	</div>
	<div class="d-flex justify-content-center">
		<div class="col-sm-8">
			<div class="d-flex justify-content-center py-4">
				<img src="<?= validate_image(isset($image_path) ? $image_path : '') ?>" alt="<?= isset($name) ? $name : '' ?>" class="img-thumbnail p-2 border" id="product-img" style="width: 170px;">
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Name</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($name) ? $name : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Brand</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($brand) ? $brand : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Dose</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($dose) ? $dose : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Category</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($category) ? $category : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Description</h5>
				</div>
				<div class="col-8">
					<div><?= isset($description) ? str_replace(["\n\r", "\n", "\r"], "<br>", $description) : '' ?></div>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Price</h5>
				</div>
				<div class="col-3">
					<h6><?= isset($price) ? format_num($price, 2) : "" ?></h6>
				</div>
			</div>
			<hr>
			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-3">
					<h5>Available Stock</h5>
				</div>
				<div class="col-8">
					<h6><?= isset($available) ? format_num($available, 0) : "" ?></h6>
				</div>
			</div>
			<hr>

			<div class="d-flex row row-cols-1 row-cols-sm-6">
				<div class="col-6">
					<?php if ($_settings->userdata('id') != '' && $_settings->userdata('login_type') == 2) : ?>
						<button class="btn btn-primary btn-block fa-lg gradient-custom-2 rounded-0" type="button" id="add_to_cart"><i class="fa fa-cart-plus"></i> Add to Cart</button>
					<?php else : ?>
						<a class="btn btn-primary btn-block gradient-custom-2 text-light rounded-0" href="./login.php"><i class="fa fa-cart-plus"></i> Add to Cart</a>
					<?php endif; ?>
				</div>
				<div class="col-6">
					<a class="btn btn-primary btn-block fa-lg gradient-custom-2 rounded-0" href="./?p=products"><i class="fa fa-angle-left"></i> Back to List</a>
				</div>
			</div>
			<hr>

		</div>

	</div>
</section>


<script>
	$(function() {
		$('#add_to_cart').click(function() {
			_conf("Are you sure to add this product to your cart?", "add_cart", [])
		})
	})

	function add_cart() {
		start_loader();
		$.ajax({
			url: _base_url_ + "classes/Master.php?f=add_to_card",
			method: "POST",
			data: {
				product_id: "<?= isset($id) ? $id : '' ?>"
			},
			dataType: "json",
			error: err => {
				console.log(err)
				alert_toast("An error occured.", 'error');
				end_loader();
			},
			success: function(resp) {
				if (typeof resp == 'object' && resp.status == 'success') {
					location.reload();
				} else if (!!resp.msg) {
					alert_toast(resp.msg, 'error');
				} else {
					alert_toast("An error occured.", 'error');
				}
				end_loader();
			}
		})
	}
</script>