<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>assets/front/images/favicon/favicon-16x16.png">
    <!-- App title -->
    <title><?= $template['title']?></title>

    <?php if (isset($assets['sweetAlert'][0])&&!empty($assets['sweetAlert'][0])) : 
    foreach ($assets['sweetAlert'] as $asset) :?>
    <link href="<?= $asset['link']?>" rel="stylesheet" type="text/css" />
    <?php endforeach; 
    endif;?>

    <!-- include  -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <!-- Switchery css -->
    <link href="<?php echo base_url()?>assets/back/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>assets/back/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- App CSS -->
    <link href="<?php echo base_url()?>assets/back/css/style.css" rel="stylesheet" type="text/css" />

    


    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Modernizr js -->
        <script src="<?php echo base_url()?>assets/back/js/modernizr.min.js"></script>
        <style type="text/css">
            body {
                font-family: 'Kanit', sans-serif;
            }
            #datatable_paginate,#datatable_filter{
                float: right;
            }
        </style>
    </head>
    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="<?= base_url('admin')?>" class="logo">
                        <i class="fa fa-shopping-bag icon-c-user"></i>
                        <span>Awonder</span></a>
                    </div>

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" style="margin-top: 17px" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <span><?= ucfirst(substr($this->session->userdata('username'),0,1)); ?></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>Welcome</small> </h5>
                        </div>
                        <a href="<?= base_url('admin/login/logout')?>" class="dropdown-item notify-item">
                            <i class="zmdi zmdi-power"></i> <span>ออกจากระบบ</span>
                        </a>

                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="zmdi zmdi-menu"></i>
                    </button>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Navigation</li>

                    <li class="">
                        <a href="<?= base_url('admin')?>" class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i><span> แดชบอร์ด </span> </a>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0)" class="waves-effect"><i class="fa fa-archive"></i><span> สินค้า </span><span class="menu-arrow"></span> </a>
                            <ul class="list-unstyled" style="display: block;">
                                    <li><a href="<?= base_url('admin/products')?>">สินค้าทั้งหมด</a></li>
                                    <li><a href="<?= base_url('admin/products/add')?>">เพิ่มสินค้า</a></li>
                            </ul>
                    </li>
                    <li class="">
                        <a href="<?= base_url('admin/orders')?>" class="waves-effect"><i class="fa fa-shopping-bag"></i><span> ออร์เดอร์ </span> </a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('admin/payments')?>" class="waves-effect"><i class="fa fa-paypal"></i><span> ชำระเงิน </span> </a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('admin/quotations')?>" class="waves-effect"><i class="fa fa-file-text-o"></i><span> ใบเสนอราคา </span> </a>
                    </li>
                    <li class="">
                        <a href="<?= base_url('admin/contacts')?>" class="waves-effect"><i class="fa fa-file-text-o"></i><span> ผู้ติดต่อ </span> </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title-box">
                            <h4 class="page-title float-left"><?= $page_title?></h4>
                            <ol class="breadcrumb float-right">
                                <?php $active = end($breadcrumbs)?>
                                <?php foreach ($breadcrumbs as $breadcrumb) : ?>
                                    <?php if($breadcrumb != $active) : ?>
                                        <li class="breadcrumb-item">
                                            <a href="<?=$breadcrumb['url']?>"><?=$breadcrumb['title']?></a>
                                        </li>
                                    <?php else : ?>
                                       <li class="breadcrumb-item active">
                                        <?=$breadcrumb['title']?>
                                    </li>
                                <?php endif?>
                            <?php endforeach;?>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end row -->

        <?php echo $template['body']?>

    </div> <!-- container -->

</div> <!-- content -->
</div>
<!-- End content-page -->
<footer class="footer text-right">
    2016 - 2017 © Uplon.
</footer>
</div>
<!-- END wrapper -->
<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo base_url()?>assets/back/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/back/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="<?php echo base_url()?>assets/back/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/back/js/detect.js"></script>
<script src="<?php echo base_url()?>assets/back/js/fastclick.js"></script>
<script src="<?php echo base_url()?>assets/back/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url()?>assets/back/js/waves.js"></script>
<script src="<?php echo base_url()?>assets/back/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>assets/back/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>assets/back/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/back/plugins/switchery/switchery.min.js"></script>

<?php if (isset($assets['sweetAlertJS'][0])&&!empty($assets['sweetAlertJS'][0])) : 
    foreach ($assets['sweetAlertJS'] as $asset) :?>
    <script src="<?= $asset['link']?>"></script>
<?php endforeach; 
endif;?>

<!--Morris Chart-->
<script src="<?php echo base_url()?>assets/back/plugins/chart.js/chart.min.js"></script>
<script src="<?php echo base_url()?>assets/back/pages/chartjs.init.js"></script>

<!-- Counter Up  -->
<script src="<?php echo base_url()?>assets/back/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo base_url()?>assets/back/plugins/counterup/jquery.counterup.min.js"></script>

<!-- include  -->
<?php if (isset($assets['datatable'][0])&&!empty($assets['datatable'][0])) : 
    foreach ($assets['datatable'] as $asset) :?>
    <script src="<?= $asset['link']?>"></script>
<?php endforeach; 
endif;?>
<?php if (isset($assets['parsleyjs'][0])&&!empty($assets['parsleyjs'][0])) : 
    foreach ($assets['parsleyjs'] as $asset) :?>
    <script src="<?= $asset['link']?>"></script>
<?php endforeach; 
endif;?>
<?php if (isset($assets['ckeditorfull'][0])&&!empty($assets['ckeditorfull'][0])) : 
    foreach ($assets['ckeditorfull'] as $asset) :?>
    <script src="<?= $asset['link']?>"></script>
<?php endforeach; 
endif;?>



<!-- App js -->
<script src="<?php echo base_url()?>assets/back/js/jquery.core.js"></script>
<script src="<?php echo base_url()?>assets/back/js/jquery.app.js"></script>

<!-- Page specific js -->
<script src="<?php echo base_url()?>assets/back/pages/jquery.dashboard.js"></script>
<script type="text/javascript">

 var table = $("table").removeAttr('style');
            var elements = $(table);
            elements.find('*').removeAttr('style');
            elements.removeAttr('border');
            elements.removeAttr('align');
            elements.addClass('table');
</script>

</body>
</html>

