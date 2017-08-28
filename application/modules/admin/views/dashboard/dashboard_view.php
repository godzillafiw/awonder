<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">Dashboard</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Dashboard</h1>
		</div>
	</div><!--/.row-->

	<div class="panel panel-container">
		<div class="row">
			<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
				<div class="panel panel-teal panel-widget border-right">
					<div class="row no-padding"><em class="fa fa-xl fa fa-cubes color-blue"></em>
						<div class="large"><?php echo $total_products;?></div>
						<div class="text-muted">สินค้าทั้งหมด</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
				<div class="panel panel-blue panel-widget border-right">
					<div class="row no-padding"><em class="fa fa-xl fa-file-text color-orange"></em>
						<div class="large"><?php echo $total_quotations;?></div>
						<div class="text-muted">ใบเสนอราคาั้งหมด</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
				<div class="panel panel-orange panel-widget border-right">
					<div class="row no-padding"><em class="fa fa-xl fa-envelope-open color-teal"></em>
						<div class="large"><?php echo $total_contacts;?></div>
						<div class="text-muted">ผู้ติดต่อ</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
				<div class="panel panel-red panel-widget ">
					<div class="row no-padding"><em class="fa fa-xl fa-shopping-bag color-red"></em>
						<div class="large"><?php echo $total_orders;?></div>
						<div class="text-muted">ออร์เดอร์ทั้งหมด</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>
	<div class="panel panel-container">
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6 no-padding">
				<div class="panel panel-teal panel-widget border-right">
					<div class="row no-padding"><em class="fa fa-xl fa-database color-blue"></em>
						<div class="large"><?php echo $total_category;?></div>
						<div class="text-muted">หมวดหมู่ทั้งหมด</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 no-padding">
				<div class="panel panel-orange panel-widget border-right">
					<div class="row no-padding"><em class="fa fa-xl fa-user-circle color-teal"></em>
						<div class="large"><?php echo $total_users;?></div>
						<div class="text-muted">ผู้ดูแลทั้งหมด</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>
