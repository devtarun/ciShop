
<!-- slider area start -->
<div class="hero-area">
    <div class="hero-slider-active slider-arrow-style slick-dot-style hero-dot">
        <div class="hero-single-slide hero-1 d-flex align-items-center" style="background-image: url(assets/img/slider/slide-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-content">
                            <h1>products that glow <br>as much <span>as you do</span></h1>
                            <h3>Super creamy under eye concealers</h3>
                            <a href="shop-grid-left-sidebar.html" class="slider-btn">view collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-single-slide hero-1 d-flex align-items-center" style="background-image: url(assets/img/slider/slide-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="slider-content">
                            <h1>free shipping beauty</h1>
                            <h4>Shop Top Quality Haircare, Makeup, Skincare, Nailcare & Much More.</h4>
                            <a href="shop-grid-left-sidebar.html" class="slider-btn">view collection</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider area end -->

<!-- banner statistics 01 start -->
<div class="banner-statistic-one bg-gray pt-100 pb-100 pt-sm-58 pb-sm-58">
    <div class="container">
        <div class="row">
            <div class="col1 col-sm-6">
                <div class="img-container img-full fix">
                    <a href="#">
                        <img src="assets/img/banner/banner-1.jpg" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col2 col-sm-6">
                <div class="img-container img-full fix">
                    <a href="#">
                        <img src="assets/img/banner/banner-2.jpg" alt="banner image">
                    </a>
                </div>
            </div>
            <div class="col3 col">
                <div class="img-container img-full fix mb-30">
                    <a href="#">
                        <img src="assets/img/banner/banner-3.jpg" alt="banner image">
                    </a>
                </div>
                <div class="img-container img-full fix">
                    <a href="#">
                        <img src="assets/img/banner/banner-4.jpg" alt="banner image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner statistics 01 end -->

<!-- featured product area start -->
<div class="page-section pt-100 pb-14 pt-sm-60 pb-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center pb-44">
                    <p>The latest featured products</p>
                    <h2>Featured products</h2>
                </div>
            </div>
        </div>
        <div class="row product-carousel-one spt slick-arrow-style" data-row="1">

            <?php foreach ($featuredProd as $prod) { ?>
            <div class="col">
                <div class="product-item mb-20">
                    <div class="product-thumb">
                        <a href="<?php echo base_url('products/').$prod->id ?>">
                            <img src="<?php echo $prod->pimg ?>" alt="product image">
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
            </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- featured product area end -->

<!-- block container start -->
<div class="page-section  bg-gray-light">
    <div class="container-fluid p-0">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="block-container-banner img-full fix">
                    <a href="#">
                        <img src="assets/img/banner/block-container.jpg" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="bloc-container-inner text-center pt-sm-54 pb-sm-60">
                    <h2>New Fragrances</h2>
                    <p>Diverse variety of perfumes from top brands at the discount prices</p>
                    <a href="shop-grid-left-sidebar.html">SHOP PERFUMES</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- block container end -->

<!-- banner feature start -->
<div class="banner-feature-area bg-navy-blue pt-62 pb-60 pt-sm-56 pb-sm-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-paper-airplane"></i>
                    <h4>FREE SHIPPING & DELIVERY</h4>
                    <p>We’re one of the furniture online retailers, who offer free of charge delivery</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-ios-time-outline"></i>
                    <h4>365-DAY HOME TRIAL</h4>
                    <p>Our unique return policy will allow you to return furniture for almost a year</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="banner-single-feature text-center mb-sm-30">
                    <i class="ion-trophy"></i>
                    <h4>LIFETIME WARRANTY</h4>
                    <p>Purchasing furniture with us comes with warranty, than anyone else offers!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner feature end -->

<!-- feature category area start -->
<div class="feature-category-area pt-96 pb-14 pt-md-114 pt-sm-54 pb-sm-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tab-menu-one mb-58">
                    <ul class="nav justify-content-center">
                        <li>
                            <a class="active" data-toggle="tab" href="#tab_one">For Men</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_two">For Women</a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab_three">For Kids</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content text-center">
                    <div class="tab-pane fade show active" id="tab_one">
                        <div class="row feature-category-carousel slick-arrow-style spt">
                            <?php foreach ($forMen as $prod) { ?>
                            <div class="col">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url('products/').$prod->id ?>">
                                            <img src="<?php echo $prod->pimg ?>" alt="product image">
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
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_two">
                        <div class="row feature-category-carousel slick-arrow-style spt">

                            <?php foreach ($forWomen as $prod) { ?>
                            <div class="col">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url('products/').$prod->id ?>">
                                            <img src="<?php echo $prod->pimg ?>" alt="product image">
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
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab_three">
                        <div class="row feature-category-carousel slick-arrow-style spt">

                            <?php foreach ($forKids as $prod) { ?>
                            <div class="col">
                                <div class="product-item mb-20">
                                    <div class="product-thumb">
                                        <a href="<?php echo base_url('products/').$prod->id ?>">
                                            <img src="<?php echo $prod->pimg ?>" alt="product image">
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
                            </div>
                            <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature category area end -->

<!-- hot deals section start -->
<div class="hot-deals-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-7 col-md-6 ml-auto">
                <div class="countdown-area">
                    <div class="deals-title pb-30">
                        <h3>Latest Products</h3>
                    </div>
                    <div class="row deals-slider-active slider-arrow-style spt">
                        <?php foreach ($latestProd as $prod) { ?>
                        <div class="col">
                            <div class="product-item mb-20">
                                <div class="product-countdown" data-countdown="2019/04/20"></div>
                                <div class="product-thumb">
                                    <a href="<?php echo base_url('products/').$prod->id ?>">
                                        <img src="assets/img/product/product-1.jpg" alt="product image">
                                    </a>                                 
                                </div>
                                <div class="product-description white-bg text-center">
                                    <div class="product-name">
                                        <h3><a href="<?php echo base_url('products/').$prod->id ?>"><?php echo $prod->pn ?></a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">Rs. <?php echo $prod->psp ?></span>
                                        <span class="old-price"><del>Rs. <?php echo $prod->prp ?></del></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hot deals section end -->

<!-- banner statistics 02 start -->
<div class="banner-statistic-two pt-100 pt-sm-60">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-content-inner overlay text-center banner-1">
                    <div class="banner-content">
                        <h2>perfect rougue</h2>
                        <p>wrap your lips in luxurious moisture</p>
                        <a href="#" class="sqr-btn">view details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner statistics 02 end -->

<!-- latest blog area start -->
<div class="latest-blog-area pt-100 pb-90 pt-sm-58 pb-sm-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center pb-44">
                    <p>New our blogs</p>
                    <h2>From the blog</h2>
                </div>
            </div>
        </div>
        <div class="blog-carousel-active row slick-arrow-style">
            <div class="col">
                <div class="blog-item">
                    <article class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-top">
                                <div class="post-date-time">
                                    <span>10 December,18 </span>
                                </div>
                                <div class="post-blog-meta">
                                    <p>post by HasTech</p>
                                </div>
                            </div>
                            <div class="blog-thumb img-full">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-1.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard ever since the ...
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col">   
                <div class="blog-item">
                    <article class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-top">
                                <div class="post-date-time">
                                    <span>10 December,18 </span>
                                </div>
                                <div class="post-blog-meta">
                                    <p>post by HasTech</p>
                                </div>
                            </div>
                            <div class="blog-thumb img-full">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard ever since the ...
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col">
                <div class="blog-item">
                    <article class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-top">
                                <div class="post-date-time">
                                    <span>10 December,18 </span>
                                </div>
                                <div class="post-blog-meta">
                                    <p>post by HasTech</p>
                                </div>
                            </div>
                            <div class="blog-thumb img-full">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard ever since the ...
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col">
                <div class="blog-item">
                    <article class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-top">
                                <div class="post-date-time">
                                    <span>10 December,18 </span>
                                </div>
                                <div class="post-blog-meta">
                                    <p>post by HasTech</p>
                                </div>
                            </div>
                            <div class="blog-thumb img-full">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard ever since the ...
                            </p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="col">
                <div class="blog-item">
                    <article class="blog-post">
                        <div class="blog-post-content">
                            <div class="blog-top">
                                <div class="post-date-time">
                                    <span>10 December,18 </span>
                                </div>
                                <div class="post-blog-meta">
                                    <p>post by HasTech</p>
                                </div>
                            </div>
                            <div class="blog-thumb img-full">
                                <a href="blog-details.html">
                                    <img src="assets/img/blog/blog-2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4><a href="blog-details.html">This is Secound Post For XipBlog</a></h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard ever since the ...
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- latest blog area end -->

