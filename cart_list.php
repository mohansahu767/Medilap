<?php
if ($_settings->userdata('id') == '' || $_settings->userdata('login_type') != 2) {
    echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
}
?>

<section class="">
    <div class="">
        <div class="container-fluid text-center">
            <div class="py-2">
                <hr>
                <h3>Cart List</h3>
                <hr>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-sm-10">
                <div class="">
                    <div class="">
                        <div class="">
                            <div id="item_list" class="">
                                <?php
                                $gt = 0;
                                $cart = $conn->query("SELECT c.*, p.name as product, p.brand as brand, p.price, cc.name as category, p.image_path, (COALESCE((SELECT SUM(quantity) FROM `stock_list` where product_id = p.id and (expiration IS NULL or date(expiration) > '" . date("Y-m-d") . "') ), 0) - COALESCE((SELECT SUM(quantity) FROM `order_items` where product_id = p.id), 0)) as `available` FROM `cart_list` c inner join product_list p on c.product_id = p.id inner join category_list cc on p.category_id = cc.id where customer_id = '{$_settings->userdata('id')}' ");
                                while ($row = $cart->fetch_assoc()) :
                                    $gt += $row['price'] * $row['quantity'];
                                ?>
                                    <hr>
                                    <div class="cart-item  py-5" data-id='<?= $row['id'] ?>' data-max='<?= format_num($row['available'], 0) ?>'>
                                        <div class="d-flex row row-cols-1 row-cols-sm-6">
                                            <div class="col-3 d-flex justify-content-center">
                                                <img src="<?= validate_image($row['image_path']) ?>" alt="" class="img-thumbnail border p-2 product-logo" style="width: 140px;">
                                            </div>
                                            <div class="col-6 d-flex align-items-center">
                                                <div>
                                                    <h4 class='mb-0'>Name   :    <?= $row['product'] ?></h4>
                                                    <div class="text-muted">Brand      :    <?= $row['brand'] ?></div>
                                                    <div class="text-muted"><?= $row['category'] ?></div>
                                                    <div class="text-muted"><?= $row['price'] ?>   /--</div>
                                                    <div class="text-muted d-flex w-100">
                                                        <div class="input-group input-group-sm rounded-0" style="width:10em!important">
                                                            <button class="btn btn-xs btn-flat btn-primary bg-gradient-primary minus-qty" type="button"><i class="fa fa-minus"></i></button>
                                                            <input type="text" value="<?= $row['quantity'] ?>" class="form-control form-control-sm rounded-0 qty text-center" readonly="readonly">
                                                            <button class="btn btn-xs btn-flat btn-primary bg-gradient-primary add-qty" type="button"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                        <div class="col-auto">
                                                            <button class="btn btn-sm btn-flat btn-danger del-item" type="button"><i class="fa fa-trash"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center py-1">
                                                <h4>Cost : <?= format_num($row['price'] * $row['quantity'], 2) ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                <?php endwhile; ?>

                            </div>
                            <?php if ($cart->num_rows <= 0) : ?>
                                <h5 class="text-center text-muted">Add Any Items</h5>
                            <?php endif; ?>
                            <div class="d-flex  py-3">
                                <div class="col-4 d-flex justify-content-start">
                                    <small class="font-italic text-info"><strong>Cash On Delivery Only--</strong></small>
                                </div>
                                <div class="col-8 d-flex justify-content-end">
                                    <h3><b>Grand Total: <?= format_num($gt, 2) ?></b></h3>
                                </div>
                            </div>
                            <?php if ($gt > 0) : ?>
                                <div class="py-1 d-flex justify-content-center">
                                    <a href="./?p=checkout" class="btn btn-primary btn-block gradient-custom-2 text-light rounded-pill col-sm-4">Checkout</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    function update_item(cart_id = '', qty = 0) {
        start_loader()
        $.ajax({
            url: _base_url_ + 'classes/Master.php?f=update_cart',
            method: 'POST',
            data: {
                cart_id: cart_id,
                qty: qty
            },
            dataType: 'json',
            error: err => {
                console.log(err)
                alert_toast("An error occurred.", 'error')
                end_loader()
            },
            success: function(resp) {
                if (resp.status == 'success') {
                    location.reload()
                } else {
                    alert_toast("An error occurred.", 'error')
                }
                end_loader()
            }
        })
    }
    $(function() {
        $('.add-qty').click(function() {
            var item = $(this).closest('.cart-item')
            var qty = parseFloat(item.find('.qty').val())
            var id = item.attr('data-id')
            var max = item.attr('data-max')
            if (qty == max)
                qty = max;
            else
                qty += 1;
            item.find('.qty').val(qty)
            update_item(id, qty)
        })
        $('.minus-qty').click(function() {
            var item = $(this).closest('.cart-item')
            var qty = parseFloat(item.find('.qty').val())
            var id = item.attr('data-id')
            if (qty == 1)
                qty = 1;
            else
                qty -= 1;
            item.find('.qty').val(qty)
            update_item(id, qty)
        })
        $('.del-item').click(function() {
            var item = $(this).closest('.cart-item')
            var id = item.attr('data-id')
            _conf("Are you sure to remove this item from your cart?", "delete_cart", [id])
        })
    })

    function delete_cart($id) {
        start_loader();
        $.ajax({
            url: _base_url_ + "classes/Master.php?f=delete_cart",
            method: "POST",
            data: {
                id: $id
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
                } else {
                    alert_toast("An error occured.", 'error');
                    end_loader();
                }
            }
        })
    }
</script>