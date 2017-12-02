<div class="row">
	<div class="col-12">
		<div class="card-box table-responsive">
			<?php echo $this->session->flashdata('msginfo'); ?>
					<div class="col-md-12">
						<form action="<?php echo base_url('admin/products/update')?>" method="POST" enctype="multipart/form-data" >
							<div class="form-group error">
								<label>ชื่อสินค้า</label>
								<input class="form-control" parsley-trigger="change" required="" placeholder="ชื่อสินค้า" name="product_name" value="<?= $detail[0]['product_name'];?>">
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
										    <option value="<?php echo $category->cat_id;?>" <?= ($category->cat_name == $detail[0]['cat_name'] ) ? 'selected' : '' ?> >
										    <?php echo $category->cat_name;?></option>
										    <?php } ?>
										    <?php } }?>
									  </optgroup>
										<?php } }?>
									</select>
									<?php echo form_error('cat_id');?>
								</div>
								<div class="form-group error">
									<label>ราคา</label>
									<input type="text" data-parsley-type="number" class="form-control" name="price" placeholder="ราคา" value="<?= $detail[0]['product_price']?>">
									<?php echo form_error('price');?>
								</div>
								<div class="form-group error">
									<label>รายละเอียด</label>
									<textarea class="form-control ckeditor" parsley-trigger="change" required="" rows="4" name="product_detail" id="product_detail"><?= $detail[0]['product_detail']?> </textarea>
									<?php echo form_error('product_detail');?>
								</div>
								<div class="checkbox checkbox-primary">
                                                    <input id="checkbox2" type="checkbox" name="type" value="1" <?= ($detail[0]['type']) == 1 ? 'checked' : ''?> >
                                                    <label for="checkbox2">
                                                        สินค้าขายดี
                                                    </label>
                                    </div>
								<div class="form-group error">
									<label>รูปสินค้า</label><br>
									<input type="file" name="product_image" ><br><br>
									<img width="50" height="35" src="<?= base_url()?>assets/front/uploads/product/<?= $detail[0]['product_image']?> " alt="user">
								</div>
								<input type="hidden" name="p_id" value="<?= $detail[0]['p_id']?> ">
								<button type="submit" class="btn btn-success waves-effect waves-light">บันทึก</button>
								<a  class="btn btn-danger waves-effect waves-light" href="<?php echo base_url()?>admin/products">ยกเลิก</a>
							</form>
						</div>
		</div>
	</div> <!-- end row -->





