<style>
  .card-img-top {
    width: 150px; /* Set the desired width */
    height: 150px; /* Set the desired height */
    object-fit: fill;
  }
</style>

<section>
    <div class="container-fluid text-center">
        <div>
            <hr>
            <h3>All Products</h3>
            <hr>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-lg-10 py-4">
            <div class="row g-2">
                <?php
                $qry = $conn->query("SELECT *, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = product_list.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = product_list.id), 0)) as `available` FROM `product_list` where (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = product_list.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = product_list.id), 0)) > 0");
                while ($row = $qry->fetch_assoc()) :
                ?>
                    <div class="col col-xs-6 col-sm-4 col-md-3 col-lg-2 product-item">
                        <a href="./?p=products/view_product&id=<?= $row['id'] ?>">
                            <div class="card h-100">
                                <img src="<?= validate_image($row['image_path']) ?>" class="card-img-top border border-5 p-2" alt=""  />
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
        </div>

    </div>
    <hr>
    <hr>
</section>