<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Blog</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">SEO</h1>
			</div>

		</div><!--/.row-->


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel panel-default">
						<div class="panel-heading">ตั้งค่า</div>
						<div class="panel-body">
							<div class="col-md-6">
								<form role="form" id="form-seo" method="POST" data-action="seo_update">
									<div class="form-group">
										<label>Site Name</label>
										<input class="form-control" placeholder="Site Name" name="site_name" value="<?=$this->config->item('website_name')?>">
									</div>

									<div class="form-group">
										<label>Descrition</label>
										<textarea class="form-control" placeholder="Descrition" rows="5" name="descrition" ><?=$this->config->item('site_desc')?></textarea>
									</div>
									<div class="form-group">
										<label>Keyword</label>
										<textarea class="form-control" placeholder="Keyword" rows="10" name="keyword"><?=$this->config->item('site_keyword')?></textarea>
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
