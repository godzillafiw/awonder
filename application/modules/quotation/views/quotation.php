<?php  echo modules::run('sidebar/menuhorizental'); ?>
</header>

<main id="contact-us" class="inner-bottom-md">

    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <section class="section leave-a-message">
                    <h2 class="bordered"><?= $this->lang->line("quotation");?></h2>
                    <?php echo $this->session->flashdata('msginfo'); ?>
                    <form  class="contact-form cf-style-1 inner-top-xs" action="<?php echo base_url('quotation/send')?>" method="post">
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label><?= $this->lang->line("company_name");?>*</label>
                                <input class="le-input" name="company_name" value="">
                                <?php echo form_error('company_name')?>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label><?= $this->lang->line("full_name");?>*</label>
                                <input class="le-input" name="full_name" value="">
                                <?php echo form_error('full_name')?>
                            </div>
                        </div><!-- /.field-row -->
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label><?= $this->lang->line("phone");?>*</label>
                                <input class="le-input" name="you_phone" value="">
                                <?php echo form_error('you_phone')?>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label><?= $this->lang->line("you_email");?>*</label>
                                <input class="le-input" name="you_email">
                                <?php echo form_error('you_email')?>
                            </div>
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label><?= $this->lang->line("you_address");?></label>
                            <textarea rows="5" class="le-input" name="you_address"></textarea>
                            <?php echo form_error('you_address')?>
                        </div><!-- /.field-row -->
                        
                        <div class="field-row">
                            <label><?= $this->lang->line("you_quotation");?></label>
                            <textarea rows="8" class="le-input" name="you_quotation"></textarea>
                            <?php echo form_error('you_quotation')?>
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge"><?= $this->lang->line("sent_quotation");?></button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.contact-form -->
                </section><!-- /.leave-a-message -->
            </div><!-- /.col -->


        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
