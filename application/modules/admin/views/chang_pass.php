<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Chang password</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Chang password</h1>
			</div>

		</div><!--/.row-->

			
		<div class="row">
			<div class="col-lg-12">
			<?php echo $this->session->flashdata('msginfo'); ?>
				<div class="panel panel-default">
					<div class="panel panel-default">
						<div class="panel-heading">เปลี่ยนรหัสผ่าน</div>
						<div class="panel-body">
							<div class="col-md-6">
								<form  method="POST" action="<?= base_url()?>admin/login/changpassword">
									<div class="form-group">
										<label>รหัสผ่านใหม่</label>
										<input type="password" class="form-control" placeholder="New Password" name="new_password">
										<?php echo form_error('new_password'); ?>
									</div>
									<div class="form-group">
										<label>รหัสผ่านใหม่อีกครั้ง</label>
										<input type="password" class="form-control" placeholder="Confirm Password" name="conf_password">
										<?php echo form_error('conf_password'); ?>
									</div>

									<button type="submit" class="btn btn-md btn-primary">บันทึก</button>
									<a type="button" href="<?= base_url()?>admin" class="btn btn-md btn-danger">ยกเลิก</a>
									</form>
								</div>
							</div>
						</div>
				</div><!-- /.panel-->
				</div><!-- /.panel-->
			</div><!-- /.col-->

		</div>
