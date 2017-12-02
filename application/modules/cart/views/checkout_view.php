<div class="animate-dropdown">
<div id="breadcrumb-alt">
    <div class="container">
        <div class="breadcrumb-nav-holder minimal">
            <ul>
                <li class="breadcrumb-item">
                    <a href="<?= base_url()?>"><?= $this->lang->line("home");?></a>
                </li>
                <li class="breadcrumb-item current">
                    <a href="javascript:void(0)"><?= $this->lang->line($this->uri->segment(1));?></a>
                </li>
            </ul>
        </div><!-- .breadcrumb-nav-holder -->
    </div><!-- /.container -->
</div><!-- /#breadcrumb-alt -->
</div>
<br>
<section id="checkout-page">
	<div class="container">
		<?php echo $this->session->flashdata('msginfo'); ?>
		<div class="col-xs-12 no-margin">

			<div class="billing-address">
				<h2 class="border h1"><?= $this->lang->line('bill_address')?></h2>
				<form action="<?php echo base_url()?>cart/orderConfirm" method="POST">
					<div class="row field-row">
						<div class="col-xs-12 col-sm-12">
							<label><?= $this->lang->line('full_name')?>*</label>
							<input class="le-input" name="full_name">
							<?php echo form_error('full_name')?>
						</div>
						<!-- <div class="col-xs-12 col-sm-6">
							<label>last name*</label>
							<input class="le-input" >
						</div> -->
					</div><!-- /.field-row -->

					<div class="row field-row">
						<div class="col-xs-12">
							<label><?= $this->lang->line('company_name')?></label>
							<input class="le-input" name="company_name">
							<?php echo form_error('company_name')?>
						</div>
					</div><!-- /.field-row -->

					<div class="row field-row">
						<div class="col-xs-12 col-sm-12">
							<label><?= $this->lang->line('you_address')?>*</label>
							<textarea class="le-input" name="you_address"></textarea>
							<?php echo form_error('you_address')?>
						</div><!-- 
						<div class="col-xs-12 col-sm-6">
							<label>&nbsp;</label>
							<input class="le-input" data-placeholder="town" >
						</div> -->
					</div><!-- /.field-row -->

					<div class="row field-row">
						<div class="col-xs-12 col-sm-4">
							<label><?= $this->lang->line('post_code')?></label>
							<input class="le-input" name="post_code" >
							<?php echo form_error('post_code')?>
						</div>
						<div class="col-xs-12 col-sm-4">
							<label><?= $this->lang->line('you_email')?></label>
							<input class="le-input" name="you_email">
						</div>

						<div class="col-xs-12 col-sm-4">
							<label><?= $this->lang->line('phone')?>*</label>
							<input class="le-input" name="phone">
							<?php echo form_error('phone')?>
						</div>
					</div><!-- /.field-row -->
					<div class="place-order-button">
						<button class="le-button big" id="send_order" type="submit"><?= $this->lang->line('place_order')?></button>
					</div><!-- /.place-order-button -->
				</form>
			</div><!-- /.billing-address -->
			

		</div><!-- /.col -->
	</div><!-- /.container -->    
</section><!-- /#checkout-page -->