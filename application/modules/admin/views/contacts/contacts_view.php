<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">ติดต่อกลับ</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">ติดต่อกลับ</h1>
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
									<th>หัวข้อ</th>
									<th>ชื่อผู้ส่ง</th>
									<th>อีเมลล์</th>
									<th>ข้อความ</th>
									<th>ส่งเมื่อ</th>
									<th>เเมนู</th>
								</tr>
							</thead>
							<tbody>
								<?php if (!empty($contacts)) {
									foreach ($contacts as $key => $contact) { ?>
									<tr>
										<td><?php echo $contact->subject?></td>
										<td><?php echo $contact->fullname ?></td>
										<td><?php echo $contact->email ?></td>
										<td><?php echo $contact->messages ?></td>
										<td><?php echo $contact->create_at ?></td>
										<td>
											<a type="button" class="btn btn-sm btn-warning" href="<?php echo base_url()?>admin/job/edit/<?php echo $contact->con_id?>"><i class="fa fa-pencil"></i></a>
											<a type="button" class="btn btn-sm btn-danger del-job" id="del" data-action="deleteJob" data-id="<?php echo $contact->con_id?>"><i class="fa fa-trash"></i></a>
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
