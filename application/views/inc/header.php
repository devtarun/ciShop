
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Melani-Multipurpose eCommerce Bootstrap 4 Template</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- IonIcon CSS -->
    <link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="<?php echo base_url(); ?>assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="<?php echo base_url(); ?>assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body>


    <!-- header area start -->
    <header>

        <!-- main menu area start -->
        <div class="header-main sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>assets/img/logo/logo.png" alt="Brand logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="main-header-inner">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <?php foreach ($categories as $cat) {
                                        ?>
                                        <li><a href="<?php echo base_url('category/'.$cat->cn); ?>"><?php echo $cat->cn ?></a></li>
                                        <?php
                                        } ?>
                                        <li><a href="<?php echo base_url('home/account') ?>">My Account</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                        <div class="header-setting-option">
                            <div class="search-wrap">
                                <button type="submit" class="search-trigger"><i class="ion-ios-search-strong"></i></button>
                            </div>
                            <div class="header-mini-cart">
                                <div class="mini-cart-btn">
                                    <i class="ion-bag"></i>
                                    <span class="cart-notification">
                                        <?php if ($orderForAcc != "") {
                                            echo count($orderForAcc);
                                        } else {
                                            echo 0;
                                        } ?>
                                    </span>
                                </div>
                                <ul class="cart-list">
                                    
                                    <?php if ($orderForAcc != "") { ?>
                                        <?php 
                                            $ot = 0;
                                            foreach ($orderForAcc as $orders) { 
                                                $ot += $orders->op
                                        ?>
                                        <li>
                                            <div class="cart-img">
                                                <a href="<?php echo base_url('home/product/').$orders->id ?>"><img src="<?php echo base_url() . $orders->pimg ?>"
                                                        alt=""></a>
                                            </div>
                                            <div class="cart-info">
                                                <h4><a href="<?php echo base_url('home/product/').$orders->id ?>"><?php echo $orders->pn ?></a></h4>
                                                <span>Rs. <?php echo $orders->op ?></span>
                                            </div>
                                            <a href="<?php echo base_url('products/removeOrder/' . $orders->id) ?>" class="del-icon">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <li class="mini-cart-price">
                                            <span class="subtotal">subtotal : </span>
                                            <span class="subtotal-price ml-auto">Rs. <?php echo $ot ?></span>
                                        </li>
                                        <li class="checkout-btn">
                                            <a href="<?php echo base_url('cart') ?>">checkout</a>
                                        </li>
                                    <?php } else {
                                        echo '<li><span>No products in the bag. Start Shopping...</span></li>';
                                    } ?>

                                </ul>
                            </div>
                            <?php if(isset($this->session->userdata['token'])){
                            ?>
                            <div class="settings-top">
                                <a href="<?php echo base_url('home/logout') ?>" class="settings-btn">
                                    <i class="ion-log-out"></i>
                                </a>
                            </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main menu area end -->

        <!-- Start Search Popup -->
        <div class="box-search-content search_active block-bg close__top">
            <?php echo form_open('products/search', 'class="minisearch"'); ?>
                <div class="field__search">
                    <?php echo form_input(array(
                        'name' => 'st',
                        'placeholder' => 'Search our catalogue'
                    )); ?>
                    <div class="action">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="close__wrap">
                <span>close</span>
            </div>
        </div>
        <!-- End Search Popup -->

    </header>
    <!-- header area end -->