<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">สินค้าของเรา</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">สินค้าของเรา</h1>
		</div>

	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="<?php echo base_url()?>admin/products/add" type="button" class="btn btn-md btn-success"><i class="fa fa-plus-circle" aria-hidden="true"></i> เพิ่ม</a></div>

				<div class="panel-body">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>ชื่อ</th>
									<th>วันที่</th>
									<th>เมนู</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($products)) {
									foreach ($products as $key => $product) { ?>
									<tr>
										<td><?php echo $product->product_name?></td>
										<td><?php echo $product->product_detail ?></td>
										<td>
											<a type="button" class="btn btn-sm btn-warning" href="<?php echo base_url()?>admin/job/edit/<?php echo $product->p_id?>"><i class="fa fa-pencil"></i></a>
											<a type="button" class="btn btn-sm btn-danger del-job" id="del" data-action="deleteJob" data-id="<?php echo $product->p_id?>"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php } }?>

								</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.panel-->
		</div><!-- /.col-->

	</div>
