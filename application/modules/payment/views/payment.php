<?php  echo modules::run('sidebar/menuhorizental'); ?>
</header>

<main id="contact-us" class="inner-bottom-md">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <section id="comments" class="inner-bottom-xs">
                    <br>

                    <div class="comment-item">
                        <div class="row no-margin">
                            <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                                <div class="avatar">
                                 <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/payments/logo_scb.png" />
                             </div>
                         </div>
                         <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                            <div class="comment-body">
                                <div class="meta-info">
                                    <header class="row no-margin">
                                        <div class="pull-left">
                                            <h4 class="author"><a href="#">014-123-445</a></h4>
                                            <span class="date">- ธนาคารไทยพาณิชย์</span>
                                        </div>
                                    </header>
                                </div>
                                <p class="comment-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="comment-item">
                    <div class="row no-margin">
                        <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                            <div class="avatar">
                             <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/payments/ktb.jpg" />
                         </div>
                     </div>
                     <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                        <div class="comment-body">
                            <div class="meta-info">
                                <header class="row no-margin">
                                    <div class="pull-left">
                                        <h4 class="author"><a href="#">056-145-445</a></h4>
                                        <span class="date">- ธนาคารกรุงไทย</span>
                                    </div>
                                </header>
                            </div>
                            <p class="comment-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <div class="row no-margin">
                    <div class="col-lg-1 col-xs-12 col-sm-2 no-margin">
                        <div class="avatar">
                         <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/payments/k.png" />
                     </div>
                 </div>
                 <div class="col-xs-12 col-lg-11 col-sm-10 no-margin-right">
                    <div class="comment-body">
                        <div class="meta-info">
                            <header class="row no-margin">
                                <div class="pull-left">
                                    <h4 class="author"><a href="#">056-145-445</a></h4>
                                    <span class="date">- ธนาคารกสิกรไทย</span>
                                </div>
                            </header>
                        </div>
                        <p class="comment-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section leave-a-message">
        <h2 class="bordered">แจ้งการชำระเงิน</h2>
        <?php $this->session->flashdata('msginfo'); ?>
        <form class="contact-form cf-style-1 inner-top-xs" action="<?php echo base_url('payment/send')?>" method="post">
            <div class="row field-row">
                <div class="col-xs-12 col-sm-6">
                    <label><?= $this->lang->line("full_name");?>*</label>
                    <input class="le-input" name="fullname">
                    <?php echo form_error('fullname')?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label><?= $this->lang->line("transaction_number");?>*</label>
                    <input class="le-input" name="transaction_number">
                    <?php echo form_error('transaction_number')?>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <label><?= $this->lang->line("slip_file");?>*</label>
                    <input class="le-input" type="file" name="slip_file">
                    <?php echo form_error('err_slip_file')?> <?php echo form_error('slip_file')?>
                </div>
            </div><!-- /.field-row -->


            <div class="buttons-holder">
                <button type="submit" class="le-button huge">ส่งสลิป</button>
            </div><!-- /.buttons-holder -->
        </form><!-- /.contact-form -->
    </section><!-- /.leave-a-message -->
</div><!-- /.col -->


</div><!-- /.row -->
</div><!-- /.container -->
</main>
