
<div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
                    <div class="col-xl-3 col-lg-4 order-2 order-lg-1">
                        <div class="sidebar-wrapper mt-md-100 mt-sm-48">
                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>shop</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="sidebar-category">
                                        <?php foreach ($categories as $cat) {
                                        ?>
                                        <li><a href="<?php echo base_url('category/'.$cat->cn); ?>"><?php echo $cat->cn ?></a></li>
                                        <?php
                                        } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product view wrapper area start -->
                    <div class="col-xl-9 col-lg-8 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row">
                                    <div class="col-lg-7 col-md-6">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                            </div>
                                            <div class="product-amount">
                                                <p>Showing 1–16 of 21 results</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6">
                                        <div class="top-bar-right">
                                            <div class="product-short">
                                                <p>Sort By : </p>
                                                <select class="nice-select" name="sortby">
                                                    <option value="trending">Relevance</option>
                                                    <option value="sales">Name (A - Z)</option>
                                                    <option value="sales">Name (Z - A)</option>
                                                    <option value="rating">Price (Low &gt; High)</option>
                                                    <option value="date">Rating (Lowest)</option>
                                                    <option value="price-asc">Model (A - Z)</option>
                                                    <option value="price-asc">Model (Z - A)</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->
                            <!-- product view mode wrapper start -->
                            <div class="shop-product-wrap grid row">
                                <?php foreach ($products as $prod) {
                                ?>
                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                                    <!-- product list item start -->
                                    <div class="product-list-item mb-20">
                                        <div class="product-thumb">
                                            <a href="<?php echo base_url('products/').$prod->id ?>">
                                                <img src="<?php echo base_url().$prod->pimg ?>" alt="product image">
                                            </a>
                                        </div>
                                        <div class="product-list-content">
                                            <h3><a href="<?php echo base_url('products/').$prod->id ?>"><?php echo $prod->pn ?></a></h3>
                                            <div class="pricebox">
                                                <span class="regular-price">Rs. <?php echo $prod->psp ?></span>
                                                <span class="old-price"><del>Rs. <?php echo $prod->prp ?></del></span>
                                            </div>
                                            <p><?php echo $prod->psd ?></p>
                                        </div>
                                    </div>
                                    <!-- product list item end -->
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