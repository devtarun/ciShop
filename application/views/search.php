
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Result</li>
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
    <div class="shop-main-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
        <div class="container">
            <div class="row">
                <!-- product view wrapper area start -->
                <div class="col-xl-12">
                    <div class="shop-product-wrapper">
                        <!-- product view mode wrapper start -->
                        <div class="shop-product-wrap grid row">
                            <?php foreach ($prod_list as $prod) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                                <!-- product grid item start -->
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url('products/').$prod->id ?>">
                                            <img src="<?php echo base_url().$prod->pimg ?>" alt="product image">
                                        </a>
                                    </div>
                                    <div class="product-description text-center">
                                        <div class="product-name">
                                            <h3><a href="<?php echo base_url('products/').$prod->id ?>"><?php echo $prod->pn ?></a></h3>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price">Rs. <?php echo $prod->psp ?></span>
                                            <span class="old-price"><del>Rs. <?php echo $prod->prp ?></del></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- product grid item end -->
                            </div>
                            <?php
                            } ?>
                        </div>
                        <!-- product view mode wrapper start -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>