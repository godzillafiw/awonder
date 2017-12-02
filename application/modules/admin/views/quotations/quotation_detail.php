<div class="row">
	<div class="col-12">
		<div class="card-box">
			<div class="panel-body">
				<div class="clearfix">
					<div class="float-left">
						<h3 class="logo">Awonder</h3>
					</div>
					<div class="float-right">
						<h5>Quotation # <br>
							<small><?= date("Y-m-d")?></small>
						</h5>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-12">

						<div class="float-left m-t-30">
							<address>
								<strong><?= $details[0]['company_name']?></strong><br>
								<?= $details[0]['address']?>
							</address>
						</div>
						<div class="float-right m-t-30">
							<p><strong>วันที่เสนอราคา: </strong> <?= substr($details[0]['create_at'], 0,10)?></p>
							<p class="m-t-10"><strong>สถานะ: </strong>
								<?=statusPayment($details[0]['status'])?>
							</p>
							<p class="m-t-10"><strong>รหัสใบเสนอราคา: </strong> Q0<?=$details[0]['q_id']?></p>
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
										<th>รายละเอียด</th>
									</tr>
								</thead>
								<tbody>
										<tr>
											<td><?= $details[0]['detail']?></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="clearfix m-t-30">
								<h5 class="small text-inverse font-600"><b>ผู้เสนอราคา</b></h5>

								<small>
									<?= $details[0]['fullname']?><br>
									<?= $details[0]['email']?><br>
									<?= $details[0]['phone']?><br>
								</small>
							</div>
						</div>
						<div class="col-6 ">
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
