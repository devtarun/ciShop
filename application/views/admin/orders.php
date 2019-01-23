
<div class="content-wrapper">
    <div class="container-fluid">
        <!--End Row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header border-0">
                        Manage Orders
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Product</th>
                                    <th>Product Price</th>
                                    <th>Customer Name</th>
                                    <th>Order Quantity</th>
                                    <th>Order Date</th>
                                    <th>Order Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order) {
                                ?>
                                <tr>
                                    <td>
                                        <img alt="Image placeholder" src="<?php echo base_url().$order->pimg ?>" class="product-img" alt="product img">
                                    </td>
                                    <td><?php echo $order->pn ?></td>
                                    <td>Rs. <?php echo $order->psp ?></td>
                                    <td><?php echo $order->cn ?></td>
                                    <td><?php echo $order->oq ?></td>
                                    <td><?php echo date("d M Y", strtotime($order->ocd)); ?></td>
                                    <td>
                                        <span class="badge-dot">
                                        <i class="bg-danger"></i> <?php echo ucfirst($order->os) ?>
                                        </span>
                                    </td>
                                    <td>
                                      <a href="" 
                                         class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i>
                                       </a>
                                      <a href="" 
                                         class="btn btn-danger btn-sm"><i class="fa fa-times"></i>
                                       </a>
                                    </td>
                                </tr>
                                <?php
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--End Dashboard Content-->
    </div>
    <!-- End container-fluid-->
</div>
<!--End content-wrapper-->
