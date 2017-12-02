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
<main id="contact-us" class="inner-bottom-md">
    <section class="google-map map-holder">   
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12664.03288794478!2d100.62400261411744!3d13.756936072928408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d61ef6812eaf1%3A0x55664751cbaeea70!2sAwonder+Photoenergy+Company+Limited!5e0!3m2!1sth!2sth!4v1502906495149" width="1920" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <section class="section leave-a-message">
                    <h2 class="bordered"><?= $this->lang->line("contact_msg");?></h2>
                    <?php echo $this->session->flashdata('msginfo'); ?>
                    <form class="contact-form cf-style-1 inner-top-xs" method="POST" action="<?= base_url('contact/sends')?>">
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6"> 
                                <label><?= $this->lang->line("your_name");?>*</label>
                                <input class="le-input" name="fullname">
                                <?php echo form_error('fullname')?>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label><?= $this->lang->line("your_email");?>*</label>
                                <input class="le-input" name="email">
                                <?php echo form_error('email')?>
                            </div>
                        </div><!-- /.field-row -->
                        
                        <div class="field-row">
                            <label><?= $this->lang->line("subject");?></label>
                            <input type="text" class="le-input" name="subject">
                            <?php echo form_error('subject')?>
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label><?= $this->lang->line("your_messages");?></label>
                            <textarea rows="8" class="le-input" name="messages"></textarea>
                            <?php echo form_error('messages')?>
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge"><?= $this->lang->line("send_msg");?></button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.contact-form -->
                </section><!-- /.leave-a-message -->
            </div><!-- /.col -->

            <div class="col-md-4">
                <section class="our-store section inner-left-xs">
                    <h2 class="bordered"><?= $this->lang->line("location");?></h2>
                    <address>
                        <?= $this->lang->line("address");?>
                    </address>
                    <h3><?= $this->lang->line("hours_peration");?></h3>
                    <ul class="list-unstyled operation-hours">
                        <li class="clearfix">
                            <span class="day"><?= $this->lang->line("monday");?>:</span>
                            <span class="pull-right hours">09.00 - 18.00 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day"><?= $this->lang->line("tuesday");?>:</span>
                            <span class="pull-right hours">09.00 - 18.00 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day"><?= $this->lang->line("wednesday");?>:</span>
                            <span class="pull-right hours">09.00 - 18.00 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day"><?= $this->lang->line("thursday");?>:</span>
                            <span class="pull-right hours">09.00 - 18.00 PM</span>
                        </li>
                        <li class="clearfix">
                            <span class="day"><?= $this->lang->line("friday");?>:</span>
                            <span class="pull-right hours">09.00 - 18.00 PM</span>
                        </li>
                    </ul>
                </section><!-- /.our-store -->
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container -->
</main>
