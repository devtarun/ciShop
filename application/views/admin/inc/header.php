<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Administrator</title>
        <!--favicon-->
        <link rel="icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.ico" type="image/x-icon">
        <!-- notifications css -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/plugins/notifications/css/lobibox.min.css"/>
        <!-- Vector CSS -->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
        <!-- simplebar CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
        <!-- Bootstrap core CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- animate CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Icons CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/icons.css" rel="stylesheet" type="text/css"/>
        <!-- Sidebar CSS-->
        <link href="<?php echo base_url(); ?>assets/admin/css/sidebar-menu.css" rel="stylesheet"/>
        <!-- Custom Style-->
        <link href="<?php echo base_url(); ?>assets/admin/css/app-style.css" rel="stylesheet"/>
    </head>
    <body>
        <!-- Start wrapper-->
        <div id="wrapper">
            <!--Start sidebar-wrapper-->
            <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
                <div class="brand-logo">
                    <a href="index-2.html">
                        <img src="<?php echo base_url(); ?>assets/admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
                        <h5 class="logo-text"> ciShop</h5>
                    </a>
                </div>
                <div class="user-details">
                    <div class="media align-items-center collapsed">
                        <div class="avatar"><img class="mr-3 side-user-img" src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-4.png" alt="user avatar"></div>
                        <div class="media-body">
                            <h6 class="side-user-name"><?php echo $ar ?></h6>
                        </div>
                    </div>
                </div>
                <?php if ($ar == 'Administrator') {
                ?>
                <ul class="sidebar-menu do-nicescrol">
                    <li class="sidebar-header">MAIN NAVIGATION</li>
                    <li><a href="<?php echo base_url('admin') ?>" class="waves-effect"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                    <li><a href="<?php echo base_url('admin/getproducts') ?>" class="waves-effect"><i class="fa fa-shopping-cart"></i><span>All Products</span></a></li>
                    <li><a href="<?php echo base_url('admin/addproducts') ?>" class="waves-effect"><i class="fa fa-plus"></i><span>Add Products</span></a></li>
                    <li><a href="<?php echo base_url('admin/manageorders') ?>" class="waves-effect"><i class="fa fa-list"></i><span>Manage Orders</span></a></li>
                    <li><a href="<?php echo base_url('admin/categories') ?>" class="waves-effect"><i class="fa fa-eye"></i> Categories</a></li>
                </ul>
                <?php
                } else { 
                ?>
                <ul class="sidebar-menu do-nicescrol">
                    <li class="sidebar-header">MAIN NAVIGATION</li>
                    <li><a href="<?php echo base_url('admin/manageorders') ?>" class="waves-effect"><i class="fa fa-list"></i><span>Manage Orders</span></a></li>
                </ul>
                <?php 
                } ?>

            </div>
            <!--End sidebar-wrapper-->
            <!--Start topbar header-->
            <header class="topbar-nav">
                <nav class="navbar navbar-expand fixed-top gradient-ibiza">
                    <ul class="navbar-nav mr-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center right-nav-link">
                        <li class="nav-item dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="icon-envelope-open"></i></a>
                            <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        You have 4 new messages
                                        <span class="badge badge-danger">4</span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-1.png" alt="user avatar"></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Jhon Deo</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                    <small>Today, 4:10 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-2.png" alt="user avatar"></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Sara Jen</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                    <small>Yesterday, 8:30 AM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-3.png" alt="user avatar"></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Dannish Josh</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                    <small>5/11/2018, 2:50 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <div class="avatar"><img class="align-self-start mr-3" src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-4.png" alt="user avatar"></div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet.</p>
                                                    <small>1/11/2018, 2:50 PM</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown-lg">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                            <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
                            <div class="dropdown-menu dropdown-menu-right animated fadeIn">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        You have 10 Notifications
                                        <span class="badge badge-primary">10</span>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <i class="icon-people fa-2x mr-3 text-info"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">New Registered Users</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <i class="icon-cup fa-2x mr-3 text-warning"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">New Received Orders</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="javaScript:void();">
                                            <div class="media">
                                                <i class="icon-bell fa-2x mr-3 text-danger"></i>
                                                <div class="media-body">
                                                    <h6 class="mt-0 msg-title">New Updates</h6>
                                                    <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-17.png" class="img-circle" alt="user avatar"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right animated fadeIn">
                                <li class="dropdown-item user-details">
                                    <a href="javaScript:void();">
                                        <div class="media">
                                            <div class="avatar"><img class="align-self-start mr-3" src="<?php echo base_url(); ?>assets/admin/images/avatars/avatar-17.png" alt="user avatar"></div>
                                            <div class="media-body">
                                                <h6 class="mt-2 user-title"><?php echo $an ?></h6>
                                                <p class="user-subtitle"><?php echo $ae ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li class="dropdown-item"><i class="icon-power mr-2"></i> <a href="<?php echo base_url('admin/logout') ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </header>
            <!--End topbar header-->
            <div class="clearfix"></div>