<div class="row">
	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
		<div class="card-box tilebox-one">
			<i class="icon-layers float-right text-muted"></i>
			<h6 class="text-muted text-uppercase m-b-20"><span class="label label-success">Orders</span></h6>
			<h2 class="m-b-20" data-plugin="counterup"><?= number_format($total_order)?></h2>
		</div>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
		<div class="card-box tilebox-one">
			<i class="icon-paypal float-right text-muted"></i>
			<h6 class="text-muted text-uppercase m-b-20"><span class="label label-danger"> Payments </span></h6>
			<h2 class="m-b-20">$<span data-plugin="counterup"><?= number_format($total_payment)?></span></h2>
		</div>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
		<div class="card-box tilebox-one">
			<i class="fa fa-file-text-o float-right text-muted"></i>
			<h6 class="text-muted text-uppercase m-b-20"><span class="label label-pink"> Quotations </span></h6>
			<h2 class="m-b-20">$<span data-plugin="counterup"><?= number_format($total_quotation)?></span></h2>
		</div>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
		<div class="card-box tilebox-one">
			<i class="icon-rocket float-right text-muted"></i>
			<h6 class="text-muted text-uppercase m-b-20"><span class="label label-warning">  Product </span></h6>
			<h2 class="m-b-20" data-plugin="counterup"><?= number_format($total_product)?></h2>
		</div>
	</div>
</div>
<!-- end row -->


<div class="row">
	<div class="col-xs-12 col-lg-12 col-xl-8">
		<div class="card-box">

			<h4 class="header-title m-t-0 m-b-20">สถิติการสั่งซื้อ</h4>
			  <canvas id="lineChart" height="300"></canvas>
		</div>
	</div><!-- end col-->

	<div class="col-xs-12 col-lg-12 col-xl-4">
		<div class="card-box">

			<h4 class="header-title m-t-0 m-b-30">รายการชำระเงิน ล่าสุด</h4>
			<div class="table-responsive">
				<table class="table  mb-0">
					<thead>
						<tr>
							<th>ผู้ชำระ</th>
							<th>วันที่</th>
							<th>สถานะ</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					<?php if (!empty($payments)) :?>
						<?php foreach ($payments as $payment) :?>
						<tr>
							<th class="text-muted"><?= $payment->fullname ?></th>
							<td><?= $payment->create_at ?></td>
							<td><span class="label label-success"><?= statusPayment($payment->status) ?></span></td>
						</tr>
						<?php endforeach ?>
					<?php endif?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- end col-->


</div>
<!-- end row -->
