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
					<a href="<?php echo base_url()?>admin/job/add" type="button" class="btn btn-md btn-success"><i class="fa fa-cc-visa" aria-hidden="true"></i> รายการที่ชำระแล้ว</a>
					<a href="<?php echo base_url()?>admin/job/add" type="button" class="btn btn-md btn-info"><i class="fa fa-snowflake-o" aria-hidden="true"></i> กำลังดำเดินการ</a>
				</div>

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
								<?php if (!empty($payments)) {
									foreach ($payments as $key => $payment) { ?>
									<tr>
										<td><?php echo $payment->job_name?></td>
										<td><?php echo $payment->create_at ?></td>
										<td>
											<a type="button" class="btn btn-sm btn-warning" href="<?php echo base_url()?>admin/job/edit/<?php echo $job->j_id?>"><i class="fa fa-pencil"></i></a>
											<a type="button" class="btn btn-sm btn-danger del-job" id="del" data-action="deleteJob" data-id="<?php echo $job->j_id?>"><i class="fa fa-trash"></i></a>
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
