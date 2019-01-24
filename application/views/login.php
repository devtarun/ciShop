
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                        <?php echo $this->session->flashdata('error'); ?>
                        <?php echo $this->session->flashdata('signupsuccess'); ?>
                    </div>
                    <!-- Login Content Start -->
                    <div class="col-lg-6 offset-lg-3">
                        <div class="login-reg-form-wrap  pr-lg-50">
                            <h2>Sign In</h2>
                            <?php echo form_open('home/signin'); ?>
                                <div class="single-input-item">
                                    <?php echo form_input(array(
                                        'name' => 'lce',
                                        'placeholder'=>'Enter your email'
                                    )); ?>
                                </div>
                                <div class="single-input-item">
                                    <?php echo form_password(array(
                                        'name'=>'lcpwd',
                                        'placeholder'=>'Enter your password'
                                    )); ?>
                                </div>
                                <div class="single-input-item">
                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                        <a href="<?php echo base_url('home/forgetPass') ?>" class="forget-pwd">Forget Password?</a>
                                    </div>
                                </div>
                                <div class="single-input-item">
                                    <button class="sqr-btn" type="submit">Login</button>
                                    <a href="<?php echo base_url('home/register'); ?>" class="sqr-btn pull-right">Register</a>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                    <!-- Login Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- login register wrapper end -->
</main>