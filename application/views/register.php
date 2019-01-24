
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- page main wrapper start -->
<main>
    <!-- login register wrapper start -->
    <div class="login-register-wrapper pt-100 pb-100 pt-sm-58 pb-sm-58">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <?php echo validation_errors('<span class="error">', '</span>'); ?>
                    </div>

                    <!-- Register Content Start -->
                    <div class="col-lg-6 offset-lg-3">
                        <div class="login-reg-form-wrap mt-md-100 mt-sm-58">
                            <h2>Singup Form</h2>
                            <?php echo form_open('home/signup'); ?>
                                <div class="single-input-item">
                                    <?php echo form_input(array(
                                        'name' => 'cn',
                                        'placeholder'=>'Full Name'
                                    )); ?>
                                </div>
                                <div class="single-input-item">
                                    <?php echo form_input(array(
                                        'name' => 'ce',
                                        'placeholder'=>'Enter your email'
                                    )); ?>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <?php echo form_password(array(
                                                'name' => 'cpwd',
                                                'placeholder'=>'Enter passowrd'
                                            )); ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-input-item">
                                            <?php echo form_password(array(
                                                'name' => 'ccpwd',
                                                'placeholder'=>'Repeat your password'
                                            )); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="sqr-btn" type="submit">Register</button>
                                    <a href="<?php echo base_url('home/login'); ?>" class="sqr-btn pull-right">Login</a>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <!-- Register Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</main>