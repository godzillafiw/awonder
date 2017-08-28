<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sailian - Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Loading third party fonts -->
	<link href="<?php echo base_url()?>assets/back/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/back/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/back/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url()?>assets/back/css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Admin Login</div>
				<div class="panel-body">
				 <?=$this->session->flashdata('warning')?>
             	<?=$this->session->flashdata('error')?>
					<form role="form" action="<?php echo base_url()?>admin/login/check_login" method="POST">
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<button type="submit"  class="btn-btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->


<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body></html>
