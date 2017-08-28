<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Edit Job</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Job</h1>
			</div>
		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><a href="<?php echo base_url()?>admin/job" type="button" class="btn btn-md btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ </a></div>
					<div class="panel-body">
						<div class="col-md-12">
						 <?php if (!empty($jobs)) {
              				foreach ($jobs as $key => $job) { ?>
							<form data-action="jobUpdate" method="POST" action="<?= base_url()?>admin/actions/jobUpdate">
								<div class="form-group error">
									<label>ตำแหน่ง</label>
									<input class="form-control" type="hidden" name="id" id="job_name" value="<?= $job->j_id?>">
									<input class="form-control" placeholder="ตำแหน่ง" name="job_name" id="job_name" value="<?= $job->job_name?>">
								</div>
								<div class="form-group error">
									<label>รายละเอียด</label>
									<textarea class="form-control ckeditor" rows="4" name="detail" id="detail"><?= $job->job_detail?></textarea>
								</div>
								<button type="submit" class="btn btn-md btn-primary">บันทึก</button>
								<a type="button" class="btn btn-md btn-danger" href="<?php echo base_url()?>admin/job">ยกเลิก</a>
								<?php } } ?>
							</form></div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->

		</div>
