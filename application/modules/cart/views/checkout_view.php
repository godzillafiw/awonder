<?php  echo modules::run('sidebar/menuhorizental'); ?>
<br>
<section id="checkout-page">
	<div class="container">
		<div class="col-xs-12 no-margin">

			<div class="billing-address">
				<h2 class="border h1">billing address</h2>
				<form>
					<div class="row field-row">
						<div class="col-xs-12 col-sm-6">
							<label>full name*</label>
							<input class="le-input" >
						</div>
						<div class="col-xs-12 col-sm-6">
							<label>last name*</label>
							<input class="le-input" >
						</div>
					</div><!-- /.field-row -->

					<div class="row field-row">
						<div class="col-xs-12">
							<label>company name</label>
							<input class="le-input" >
						</div>
					</div><!-- /.field-row -->

					<div class="row field-row">
						<div class="col-xs-12 col-sm-6">
							<label>address*</label>
							<input class="le-input" data-placeholder="street address" >
						</div>
						<div class="col-xs-12 col-sm-6">
							<label>&nbsp;</label>
							<input class="le-input" data-placeholder="town" >
						</div>
					</div><!-- /.field-row -->

					<div class="row field-row">
						<div class="col-xs-12 col-sm-4">
							<label>postcode / Zip*</label>
							<input class="le-input"  >
						</div>
						<div class="col-xs-12 col-sm-4">
							<label>email address*</label>
							<input class="le-input" >
						</div>

						<div class="col-xs-12 col-sm-4">
							<label>phone number*</label>
							<input class="le-input" >
						</div>
					</div><!-- /.field-row -->
				</form>
			</div><!-- /.billing-address -->
			<div class="place-order-button">
				<button class="le-button big">place order</button>
			</div><!-- /.place-order-button -->

		</div><!-- /.col -->
	</div><!-- /.container -->    
</section><!-- /#checkout-page -->