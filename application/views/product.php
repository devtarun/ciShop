
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">product details</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>


<main>
    <div class="product-details-wrapper pt-100 pb-14 pt-sm-58">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20 slider-arrow-style slider-arrow-style__style-2">
                                    <div class="pro-large-img img-zoom" id="img1">
                                        <img src="<?php echo base_url() . $pimg ?>" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des pt-md-98 pt-sm-58">
                                    <h3><?php echo $pn ?></h3>
                                    <div class="pricebox">
                                        <span class="regular-price">Rs. <strong><?php echo $psp ?></strong></span>
                                        <span class="old-price"><del>Rs. <?php echo $prp ?></del></span>
                                    </div>
                                    <p><?php echo $psd ?></p>
                                
                                    <?php echo form_open('products/addtocart/'); ?>
                                        <div class="quantity-cart-box d-flex align-items-center mb-24">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="hidden" name="op" value="<?php echo $psp ?>">
                                                    <input type="hidden" name="pid" value="<?php echo $id ?>">
                                                    <input type="hidden" name="cid" value="<?php echo $cid ?>">
                                                    <input id="oq" type="text" name="oq" value="1">
                                                </div>
                                            </div>
                                            <div class="product-btn product-btn__color">
                                                <button type="submit"><i class="ion-bag"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="availability mb-20">
                                        <h5>Availability:</h5>
                                        <span><?php if ($psq > 100) {
                                        	echo 'In Stock';
                                        } elseif ($psq < 100 && $psq > 0) {
                                        	echo 'Only '.$psq.' left';
                                        } else {
                                        	echo '<i class="text-red">Out of Stock</i>';
                                        } ?></span>
                                    </div>
                                    <div class="share-icon">
                                        <h5>share:</h5>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                    <!-- product details reviews start -->
                    <div class="product-details-reviews pt-98 pt-sm-58">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#tab_one">description</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <?php echo $pld ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- product details reviews end --> 
                    <!-- featured product area start -->
                    <div class="page-section pt-100 pt-sm-58">
                        <div class="section-title text-center pb-44">
                            <p>The latest products</p>
                            <h2>related products</h2>
                        </div>
                        <div class="releted-product spt slick-padding slick-arrow-style">
                            <div class="product-item mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?php echo base_url()?>assets/img/product/product-1.jpg" alt="product image">
                                    </a>
                                    <div class="box-label">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>-5%</span>
                                        </div>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                            data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                            class="ion-ios-loop"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                            class="ion-ios-shuffle"></i></a>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="manufacturer">
                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Endeavor Daytrip</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                        <span class="old-price"><del>$120.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                    <div class="hover-box text-center">
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?php echo base_url()?>assets/img/product/product-2.jpg" alt="product image">
                                    </a>
                                    <div class="box-label">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-action-link">
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="manufacturer">
                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Crown Backpacks</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$60.00</span>
                                        <span class="old-price"><del>$80.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                    <div class="hover-box text-center">
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?php echo base_url()?>assets/img/product/product-3.jpg" alt="product image">
                                    </a>
                                    <div class="box-label">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                    <div class="product-action-link">
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="manufacturer">
                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Joust Duffle Bags</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                        <span class="old-price"><del></del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                    <div class="hover-box text-center">
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?php echo base_url()?>assets/img/product/product-4.jpg" alt="product image">
                                    </a>
                                    <div class="box-label">
                                        <div class="product-label discount">
                                            <span>-5%</span>
                                        </div>
                                    </div>
                                    <div class="product-action-link">
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="manufacturer">
                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Chaz Kangeroo Hoodies</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                        <span class="old-price"><del>$140.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                    <div class="hover-box text-center">
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?php echo base_url()?>assets/img/product/product-5.jpg" alt="product image">
                                    </a>
                                    <div class="box-label">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                    </div>
                                    <div class="product-action-link">
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="manufacturer">
                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Compete Track Totes</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$100.00</span>
                                        <span class="old-price"><del></del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                    <div class="hover-box text-center">
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item mb-20">
                                <div class="product-thumb">
                                    <a href="product-details.html">
                                        <img src="<?php echo base_url()?>assets/img/product/product-6.jpg" alt="product image">
                                    </a>
                                    <div class="box-label">
                                        <div class="product-label new">
                                            <span>new</span>
                                        </div>
                                        <div class="product-label discount">
                                            <span>-15%</span>
                                        </div>
                                    </div>
                                    <div class="product-action-link">
                                        <div class="product-action-link">
                                            <a href="#" data-toggle="modal" data-target="#quick_view"> <span
                                                data-toggle="tooltip" data-placement="left" title="Quick view"><i class="ion-ios-eye-outline"></i></span> </a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i
                                                class="ion-ios-loop"></i></a>
                                            <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i
                                                class="ion-ios-shuffle"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-description text-center">
                                    <div class="manufacturer">
                                        <p><a href="product-details.html">Fashion Manufacturer</a></p>
                                    </div>
                                    <div class="product-name">
                                        <h3><a href="product-details.html">Driven Backpacks</a></h3>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price">$90.00</span>
                                        <span class="old-price"><del>$70.00</del></span>
                                    </div>
                                    <div class="product-btn">
                                        <a href="#"><i class="ion-bag"></i>Add to cart</a>
                                    </div>
                                    <div class="hover-box text-center">
                                        <div class="ratings">
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                            <span><i class="fa fa-star"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- featured product area end -->
                </div>
                <div class="col-lg-3">
                    <div class="sidebar-wrapper pt-md-16 pb-md-86 pb-sm-44">
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
                        <!-- single sidebar end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>