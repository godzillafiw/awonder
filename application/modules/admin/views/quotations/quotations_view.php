<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">ใบเสนอราคา</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">ใบเสนอราคา</h1>
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
									<th>ชื่อบริษัท</th>
									<th>ชื่อผู้เสนอ</th>
									<th>อีเมลล์</th>
									<th>โทรศัพทท์</th>
									<th>ที่อยู่</th>
									<th>ส่งเมื่อ</th>
									<th>เมนู</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($quotations)) {
									foreach ($quotations as $key => $quotation) { ?>
									<tr>
										<td><?php echo $quotation->company_name?></td>
										<td><?php echo $quotation->fullname ?></td>
										<td><?php echo $quotation->email ?></td>
										<td><?php echo $quotation->phone ?></td>
										<td><?php echo $quotation->address ?></td>
										<td><?php echo $quotation->create_at ?></td>
										<td>
											<a type="button" class="btn btn-sm btn-warning" href="<?php echo base_url()?>admin/job/edit/<?php echo $quotation->q_id?>"><i class="fa fa-pencil"></i></a>
											<a type="button" class="btn btn-sm btn-danger del-job" id="del" data-action="deleteJob" data-id="<?php echo $quotation->q_id?>"><i class="fa fa-trash"></i></a>
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
