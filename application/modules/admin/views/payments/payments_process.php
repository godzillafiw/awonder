<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">ชำระเงิน</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">ชำระเงิน</h1>
		</div>

	</div><!--/.row-->


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="<?php echo base_url()?>admin/payments/confirm" type="button" class="btn btn-md btn-success"><i class="fa fa-cc-visa" aria-hidden="true"></i> รายการที่ชำระแล้ว</a>
					<a href="<?php echo base_url()?>admin/payments/process" type="button" class="btn btn-md btn-info"><i class="fa fa-snowflake-o" aria-hidden="true"></i> กำลังดำเดินการ</a>
				</div>

				<div class="panel-body">
					<div class="col-md-12">
						<table class="table">
							<thead>
								<tr>
									<th>ชื่อ</th>
									<th>หมายเลขการโอน</th>
									<th>วันที่</th>
									<th>สลิปการโอน</th>
									<th>สถานะ</th>
									<th>เมนู</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($payments)) {
									foreach ($payments as $key => $payment) { ?>
									<tr>
										<td><?php echo $payment->fullname?></td>
										<td><?php echo $payment->transaction_number ?></td>
										<td><?php echo $payment->create_at ?></td>
										<td><a type="button" class="btn btn-sm btn-info" target="_blank" href="<?php echo base_url()?>assets/front/uploads/<?php echo $payment->slip_file?>"><i class="fa fa-file"></i></a>
										</td>
										<td>
											<?php echo statusCheck($payment->status)?>
										</td>
										<td>
											<a type="button" class="btn btn-sm btn-success add_confirm" data-action="deleteJob" data-id="<?php echo $payment->pay_id?>"><i class="fa fa-check"></i></a>
											<a type="button" class="btn btn-sm btn-danger del-job" id="del" data-action="deleteJob" data-id="<?php echo $payment->pay_id?>"><i class="fa fa-trash"></i></a>
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
