<div class="row">
	<div class="col-12">
		<div class="card-box">
			<div class="panel-body">
				<div class="clearfix">
					<div class="float-left">
						<h3 class="logo">Awonder</h3>
					</div>
					<div class="float-right">
						<h5>Invoice # <br>
							<small><?= date("Y-m-d")?></small>
						</h5>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">

						<div class="float-left m-t-30">
							<address>
								<strong><?= $order[0]['company_name']?></strong><br>
								<?= $order[0]['address']?>
							</address>
						</div>
						<div class="float-right m-t-30">
							<p><strong>วันที่สั่งซื้อ: </strong> <?= substr($order[0]['create_at'], 0,10)?></p>
							<p class="m-t-10"><strong>สถานะ: </strong>
								<?=statusCheck($order[0]['status'])?>
							</p>
							<p class="m-t-10"><strong>รหัสการสั่งซื้อ: </strong> #0<?=$order[0]['order_id']?></p>
						</div>
					</div><!-- end col -->
				</div>
				<!-- end row -->

				<div class="m-h-50"></div>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table class="table m-t-30">
								<thead class="bg-faded">
									<tr>
										<th>#</th>
										<th>สินค้า</th>
										<th>จำนวน</th>
										<th>ราคา</th>
										<th>ยอดเงิน</th>
									</tr>
								</thead>
								<tbody>
									<?php $total = 0; $name;?>
									<?php $i = 1; if (!empty($details)) {
										foreach ($details as $key => $order) { ?>
										<tr>
											<td><?= $i++?></td>
											<td><?= $order->product_name?></td>
											<td><?= $order->quantity ?></td>
											<td><?= $order->price ?></td>
											<td>
											<?= number_format(convertInt($order->price) * $order->quantity,2) ?>
											</td>
										</tr>
										<?php $total = $order->total; $name = $order->fullname ?>
										<?php } }?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="clearfix m-t-30">
								<h5 class="small text-inverse font-600"><b>PAYMENT TERMS AND POLICIES</b></h5>

								<small>
									All accounts are to be paid within 7 days from receipt of
									invoice. To be paid by cheque or credit card or direct payment
									online. If account is not paid within 7 days the credits details
									supplied as confirmation of work undertaken will be charged the
									agreed quoted fee noted above.
								</small>
							</div>
						</div>
						<div class="col-6 ">
							<p class="text-right"><b>ยอดรวม:</b> <?= '฿'.number_format($total,2)?></p>
							<p class="text-right">VAT: 7%</p>
							<hr>
							<h3 class="text-right">THB <?= number_format($total - ($total*0.07),2)?></h3>
						</div>
					</div>
					<hr>
					<div class="hidden-print">
						<div class="float-right">
							<a href="javascript:window.print()" class="btn btn-primary waves-effect waves-light"><i class="fa fa-print"></i></a>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
