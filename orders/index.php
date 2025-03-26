<section>
    <div class="container-fluid text-center">
        <div class="py-2">
            <hr>
            <h3>My Ordered List</h3>
            <hr>
        </div>
    </div>
</section>

<section class="gradient-custom-2 p-4">
    <div class="container">

        <div class="row justify-content-center align-items-center ">
            <div class="col-md-10 col-sm-12 bg-light">
                <div class=" rounded shadow">
                    <div class="">
                        <div class="container">
                            <table class="table table-responsive text-nowrap table-bordered table-hover">
                                <colgroup>
                                    <col width="5%">
                                    <col width="25%">
                                    <col width="25%">
                                    <col width="20%">
                                    <col width="20%">
                                    <col width="15%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="p-2 text-center fw-bold">#</th>
                                        <th class="p-2 text-center fw-bold">Date Ordered</th>
                                        <th class="p-2 text-center fw-bold">Reference No.</th>
                                        <th class="p-2 text-center fw-bold">Total Amount</th>
                                        <th class="p-2 text-center fw-bold">Status</th>
                                        <th class="p-2 text-center fw-bold">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    $orders = $conn->query("SELECT * FROM `order_list` where customer_id = '{$_settings->userdata('id')}' order by abs(unix_timestamp(date_created)) desc ");
                                    while ($row = $orders->fetch_assoc()) :
                                    ?>
                                        <tr>
                                            <th class="p-1 align-middle text-center fw-bold"><?= $i++ ?></th>
                                            <td class="p-1 px-2 align-middle text-center"><?= date("Y-m-d H:i", strtotime($row['date_created'])) ?></td>
                                            <td class="p-1 px-2 align-middle text-center"><?= $row['code'] ?></td>
                                            <td class="p-1 align-middle text-center"><?= format_num($row['total_amount'], 2) ?></td>
                                            <td class="p-1 align-middle text-center">
                                                <?php
                                                switch ($row['status']) {
                                                    case 0:
                                                        echo '<span class="badge badge-danger bg-gradient-secondary px-3 rounded-pill">Pending</span>';
                                                        break;
                                                    case 1:
                                                        echo '<span class="badge badge-primary bg-gradient-primary px-3 rounded-pill">Packed</span>';
                                                        break;
                                                    case 2:
                                                        echo '<span class="badge badge-warning bg-gradient-warning px-3 rounded-pill">Out for Delivery</span>';
                                                        break;
                                                    case 3:
                                                        echo '<span class="badge badge-info bg-gradient-teal px-3 rounded-pill">Paid</span>';
                                                        break;
                                                }
                                                ?>
                                            </td>
                                            <td class="p-1 px-2 align-middle text-center">
                                                <button class="btn btn-flat btn-sm btn-light border-gradient-light border view-order" type="button" data-id="<?= $row['id'] ?>"><i class="fa fa-eye text-dark"></i> View</button>
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<script>
    $(function() {
        $('.view-order').click(function() {
            uni_modal("Order Details", "orders/view_order.php?id=" + $(this).attr('data-id'), 'modal-lg')
        })
    })
</script>