<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Admin | Awonderled.com</title>
   <link href="<?php echo base_url()?>assets/back/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url()?>assets/back/css/font-awesome.min.css" rel="stylesheet">
   <link href="<?php echo base_url()?>assets/back/css/datepicker3.css" rel="stylesheet">
   <link href="<?php echo base_url()?>assets/back/css/styles.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.css">
   <!--Custom Font-->
   <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        body{
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#"><span>Awonderled</span> Admin</a>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown"><a class="dropdown-toggle count-info" title="Logout" href="<?php echo base_url('admin/login/logout')?>">
                            <em class="fa fa-power-off"></em>
                        </a>
                    </li>
                </ul>
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <div class="profile-sidebar">
            <div class="profile-userpic">
                <img src="<?php echo base_url()?>assets/images/logo.png" class="img-responsive" alt="">
            </div>
            <div class="profile-usertitle">
                <div class="profile-usertitle-name"><?php echo $this->session->userdata('first_name').' '.$this->session->userdata('last_name')?></div>
                <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="divider"></div>

        <ul class="nav menu">
            <li class="<?php echo activate_menu('admin'); ?>"><a href="<?php echo base_url()?>admin"><em class="fa fa-dashboard">&nbsp;</em> หน้าแรก</a></li>
            <li class="<?php echo activate_menu('products'); ?>"><a href="<?php echo base_url()?>admin/products"><em class="fa fa-cubes">&nbsp;</em> สินค้าของเรา</a></li>
            <li class="<?php echo activate_menu('orders'); ?>"><a href="<?php echo base_url()?>admin/orders"><em class="fa fa-shopping-basket">&nbsp;</em> ออร์เดอร์</a></li>
            <li class="<?php echo activate_menu('payments'); ?>"><a href="<?php echo base_url()?>admin/payments"><em class="fa fa-credit-card-alt">&nbsp;</em> ชำระเงิน</a></li>
            <li class="<?php echo activate_menu('quotations'); ?>"><a href="<?php echo base_url()?>admin/quotations"><em class="fa fa-file-text">&nbsp;</em> ใบเสนอราคา</a></li>
            <li class="<?php echo activate_menu('contacts'); ?>"><a href="<?php echo base_url()?>admin/contacts"><em class="fa fa-envelope-open">&nbsp;</em> ติดต่อกลับ</a></li>
            <li class="<?php echo activate_menu('settings'); ?>"><a href="<?php echo base_url()?>admin/settings"><em class="fa fa-cogs">&nbsp;</em> การตั้งค่า</a></li>
        </ul>

    </div><!--/.sidebar-->

    <?php echo $template['body']; ?>

    <div class="col-sm-12">
        <p class="back-link">Support BY <a href="https://www.awonderled.com/" target="_blank">Awonderled.com</a></p>
    </div>
</div><!--/.row-->     
</div>  <!--/.main-->
</body>
</html>
<script src="<?php echo base_url()?>assets/back/js/jquery-latest.min.js"></script>
<script src="<?php echo base_url()?>assets/back/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.js"></script>
<script src="<?php echo base_url()?>assets/back/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>assets/back/js/chart.min.js"></script>
<script src="<?php echo base_url()?>assets/back/js/chart-data.js"></script>
<script src="<?php echo base_url()?>assets/back/js/easypiechart.js"></script>
<script src="<?php echo base_url()?>assets/back/js/easypiechart-data.js"></script>
<script src="<?php echo base_url()?>assets/back/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url()?>assets/back/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/back/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/back/js/custom.js"></script>
