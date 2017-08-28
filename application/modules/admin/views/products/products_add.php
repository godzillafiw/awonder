<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#">
				<em class="fa fa-home"></em>
			</a></li>
			<li class="active">เพิ่มสินค้า</li>
		</ol>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">เพิ่มสินค้า</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<a href="<?php echo base_url()?>admin/products" type="button" class="btn btn-md btn-success"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ </a>
				</div>
				<div class="panel-body">
					<?php echo $this->session->flashdata('msginfo'); ?>
					<div class="col-md-12">
						<form action="<?php echo base_url('admin/products/insert')?>" method="POST" encrpyt="multipart/form-data" >
							<div class="form-group error">
								<label>ชื่อสินค้า</label>
								<input class="form-control" placeholder="ชื่อสินค้า" name="product_name">
								<?php echo form_error('product_name');?>
							</div>
							<div class="form-group error">
								<label>ประเภทสินค้า</label>
								<select class="form-control"  name="cat_id">
									<option value="">เลือกประเภทสินค้า</option>
									<?php if (!empty($categories)) {
										foreach ($categories as $key => $cat) { ?>
										<option value="<?php echo $cat->cat_id;?>"><?php echo $cat->cat_name;?></option>
										<?php } }?>
									</select>
								</div>
								<div class="form-group error">
									<label>รายละเอียด</label>
									<textarea class="form-control ckeditor" rows="4" name="product_detail" id="product_detail"></textarea>
								</div>
								<div class="form-group error">
									<label>รายละเอียด</label>
									<input type="file" name="product_image">
								</div>
								<button type="submit" class="btn btn-md btn-primary">บันทึก</button>
								<a type="button" class="btn btn-md btn-danger" href="<?php echo base_url()?>admin/products">ยกเลิก</a>
							</form></div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div>
