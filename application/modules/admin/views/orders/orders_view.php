<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">ออร์เดอร์</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">ออร์เดอร์</h1>
		</div>

	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>ชื่อ</th>
									<th>อีเมลล์</th>
									<th>โทรศัพท์</th>
									<th>วันที่สั่ง</th>
									<th>เมนู</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($orders)) {
									foreach ($orders as $key => $order) { ?>
									<tr>
										<td><?php echo $order->fullname?></td>
										<td><?php echo $order->email ?></td>
										<td><?php echo $order->phone ?></td>
										<td><?php echo $order->order_date ?></td>
										<td>
											<a type="button" class="btn btn-sm btn-warning" href="<?php echo base_url()?>admin/job/edit/<?php echo $order->order_id?>"><i class="fa fa-pencil"></i></a>
											<a type="button" class="btn btn-sm btn-danger del-job" id="del" data-action="deleteJob" data-id="<?php echo $order->order_id?>"><i class="fa fa-trash"></i></a>
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
