<div class="row">
	<div class="col-12">
		<div class="card-box table-responsive">
			<?php echo $this->session->flashdata('msginfo'); ?>
					<div class="col-md-12">
						<form action="<?php echo base_url('admin/products/insert')?>" method="POST" enctype="multipart/form-data" >
							<div class="form-group error">
								<label>ชื่อสินค้า</label>
								<input class="form-control" parsley-trigger="change" required="" placeholder="ชื่อสินค้า" name="product_name">
								<?php echo form_error('product_name');?>
							</div>
							<div class="form-group error">
								<label>ประเภทสินค้า</label>
								<select class="form-control" parsley-trigger="change" required="" name="cat_id">
									<option value="">เลือกประเภทสินค้า</option>
									<?php if (!empty($mains)) {
										foreach ($mains as $key => $main) { ?>
										<optgroup label="<?= $main->main_name?>">
										<?php if (!empty($categories)) {
										foreach ($categories as $key => $category) { ?>
										<?php if ($category->mid == $main->mid) { ?>
										    <option value="<?php echo $category->cat_id;?>"><?php echo $category->cat_name;?></option>
										    <?php } ?>
										    <?php } }?>
									  </optgroup>
										<?php } }?>
									</select>
									<?php echo form_error('cat_id');?>
								</div>
								<div class="form-group error">
									<label>ราคา</label>
									<input type="text" data-parsley-type="number" class="form-control" name="price" placeholder="ราคา">
									<?php echo form_error('price');?>
								</div>
								<div class="form-group error">
									<label>รายละเอียด</label>
									<textarea class="form-control ckeditor" parsley-trigger="change" required="" rows="4" name="product_detail" id="product_detail"> </textarea>
									<?php echo form_error('product_detail');?>
								</div>
								<div class="checkbox checkbox-primary">
                                                    <input id="checkbox2" type="checkbox" name="type" value="1">
                                                    <label for="checkbox2">
                                                        สินค้าขายดี
                                                    </label>
                                    </div>
								<div class="form-group error">
									<label>รูปสินค้า</label><br>
									<input type="file" name="product_image" parsley-trigger="change" required="">
								</div>
								<button type="submit" class="btn btn-success waves-effect waves-light">บันทึก</button>
								<a  class="btn btn-danger waves-effect waves-light" href="<?php echo base_url()?>admin/products">ยกเลิก</a>
							</form>
						</div>
		</div>
	</div> <!-- end row -->





