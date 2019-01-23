<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- page main wrapper start -->
<main>
    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Cart Table Area -->
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="pro-thumbnail">Image</th>
                                <th class="pro-title">Product</th>
                                <th class="pro-price">Price</th>
                                <th class="pro-quantity">Quantity</th>
                                <th class="pro-subtotal">Total</th>
                                <th class="pro-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($orderForAcc != "") {
                            ?>
                            <?php 
                            $ot = 0;
                            foreach ($orderForAcc as $orders) {
                                $ot += $orders->op;
                            ?>
                            <tr>
                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="<?php echo base_url().$orders->pimg ?>" alt="Product"/></a></td>
                                <td class="pro-title"><a href="#"><?php echo $orders->pn ?></a></td>
                                <td class="pro-price"><span>Rs. <?php echo $orders->psp ?></span></td>
                                <td class="pro-quantity">
                                    <span><?php echo $orders->oq ?></span>
                                </td>
                                <td class="pro-subtotal"><span><?php echo $orders->op ?></span></td>
                                <td class="pro-remove">
                                    <a href="<?php echo base_url('products/removeOrder/' . $orders->id) ?>"><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                            <?php
                            } ?>
                            <?php
                            } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Update Option -->
                    <div class="cart-update-option d-block d-md-flex justify-content-between">
                        <div class="apply-coupon-wrapper">
                            <?php echo form_open('cart/applycoupon', 'class="d-block d-md-flex"'); ?>
                                <?php echo form_input(array(
                                    'name' => 'cc', 
                                    'placeholder' => 'Enter Your Coupon Code'
                                )); ?>
                                <button class="sqr-btn" type="submit">Apply Coupon</button>
                            </form>
                        </div>
                        <div><?php echo validation_errors('<span class="error">', '</span>'); ?></div>
                        <div><?php echo $this->session->flashdata('ccerror'); ?></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 ml-auto">
                    <!-- Cart Calculation Area -->
                    <div class="cart-calculator-wrapper">
                        <div class="cart-calculate-items">
                            <h3>Cart Totals</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>Sub Total</td>
                                        <td>Rs. <?php echo $ot ?></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping</td>
                                        <td>
                                            <?php if ($ot <= '500') {
                                                $sc = 100;
                                                echo 'Rs. 100';
                                            } else {
                                                $sc = 0;
                                                echo 'Free Shipping';
                                            } ?>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <td class="total-amount">
                                            <?php 
                                            if (isset($cp)) {
                                                if ($ct == 'percent') {
                                                    echo 'Rs.' . ($ot*$cp)/100;
                                                } elseif ($ct == 'amount') {
                                                    $ot -= $cp; echo 'Rs. ' . $ot;
                                                }
                                            } else {
                                                $ot += $sc; echo 'Rs.' . $ot;
                                            } 
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <a href="<?php echo base_url('cart/checkout') ?>" class="sqr-btn d-block">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
</main>