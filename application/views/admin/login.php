<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>DashRock - Bootstrap 4 Admin Dashboard Template</title>
        <!--favicon-->
        <link rel="icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.ico" type="image/x-icon">
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- animate CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Icons CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.css" rel="stylesheet" type="text/css"/>
        <!-- Custom Style-->
        <link href="<?php echo base_url(); ?>assets/admin/css/app-style.css" rel="stylesheet"/>
    </head>
    <body class="authentication-bg">
        <!-- Start wrapper-->
        <div id="wrapper">
            <div class="card card-authentication1 mx-auto my-5 animated zoomIn">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="text-center">
                            <img src="<?php echo base_url(); ?>assets/admin/images/logo-icon.png"/>
                        </div>
                        <div class="card-title text-uppercase text-center py-2">Sign In</div>
                        <?php echo validation_errors('<span class="error">', '</span>'); ?>
                        <?php $this->session->flashdata('loginerror'); ?>
                        <?php echo form_open('admin/login_auth'); ?>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <?php echo form_input(array(
                                        'name' => 'ae',
                                        'placeholder' => 'Email Id',
                                        'class' => 'form-control'
                                    )); ?>
                                    <div class="form-control-position">
                                        <i class="icon-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="position-relative has-icon-left">
                                    <?php echo form_password(array(
                                        'name' => 'ap',
                                        'placeholder' => 'Password',
                                        'class' => 'form-control'
                                    )); ?>
                                    <div class="form-control-position">
                                        <i class="icon-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mr-0 ml-0">
                                <div class="form-group col-12 text-right">
                                    <a href="#">Reset Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger shadow-danger btn-block waves-effect waves-light">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->
        </div>
        <!--wrapper-->
        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
        <!-- waves effect js -->
        <script src="<?php echo base_url(); ?>assets/admin/js/waves.js"></script>
        <!-- Custom scripts -->
        <script src="<?php echo base_url(); ?>assets/admin/js/app-script.js"></script>
    </body>
</html>