<?php
if ($_settings->userdata('id') == '' || $_settings->userdata('login_type') != 2) {
    echo "<script>alert('You dont have access for this page'); location.replace('./');</script>";
}
?>
<section>
    <div>
        <div class="container-fluid text-center">
            <div class="py-2">
                <hr>
                <h3>Cart List</h3>
                <hr>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="col-sm-6">
                <?php
                $cart_total = $conn->query("SELECT SUM(c.quantity * p.price) FROM `cart_list` c inner join product_list p on c.product_id = p.id inner join category_list cc on p.category_id = cc.id where customer_id = '{$_settings->userdata('id')}' ")->fetch_array()[0];
                $cart_total = $cart_total > 0 ? $cart_total : 0;
                ?>
                <form action="" id="order-form" method="post">
                    <input type="hidden" name="total_amount" value="<?= $cart_total ?>">
                    <h3>Total Cost : <?= format_num($cart_total, 2) ?></h3>
                    <hr>

                    <div class="d-flex row row-cols-1 row-cols-sm-6 px-2 py-3">
                        <div class="col-6"><label for="">Select Available Location</label></div>
                        <div class="col-6"><select class="form-select form-control-sm">
                                <option>Bhilai</option>
                                <option>Durg</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-outline border bg-white">
                        <textarea class="form-control" placeholder="Full Delivery Address" rows="2" name="delivery_address" id="delivery_address" required></textarea>
                        <label class="form-label" for="">Delivery Address</label>
                    </div><small id="statusMsg1"></small>

                    <div class="py-4 d-flex justify-content-center">
                        <button class="btn btn-primary btn-block gradient-custom-2 text-light col-sm-5 rounded-pill">Place Order</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $(function() {
        $('#order-form').submit(function(e) {
            e.preventDefault()
            start_loader()
            $.ajax({
                url: _base_url_ + 'classes/Master.php?f=place_order',
                method: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                error: err => {
                    console.log(err)
                    alert_toast("An error occurred.", 'error')
                    end_loader()
                },
                success: function(resp) {
                    if (resp.status == 'success') {
                        location.replace('./')
                    } else {
                        alert_toast("An error occurred.", 'error')
                    }
                    end_loader()
                }
            })
        })
    })
</script>