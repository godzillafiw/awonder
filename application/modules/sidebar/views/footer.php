
<footer id="footer" class="color-bg">

    <div class="container">
        <div class="row no-margin widgets-row">
            <div class="col-xs-12  col-sm-4 no-margin-left">
                
        </div><!-- /.col -->

    </div><!-- /.widgets-row-->
</div><!-- /.container -->

<div class="sub-form-row">
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 no-padding">
            <!-- <form role="form">
                <input placeholder="<?= $this->lang->line('subscribe_detail')?>">
                <button class="le-button"><?= $this->lang->line('subscribe')?></button>
            </form> -->
        </div>
    </div><!-- /.container -->
</div><!-- /.sub-form-row -->

<div class="link-list-row">
    <div class="container no-padding">
        <div class="col-xs-12 col-md-4 ">

            <div class="contact-info">
                <div class="footer-logo">

                </div><!-- /.footer-logo -->

                <p class="regular-bold"> <?= $this->lang->line('my_company')?></p>

                <p>
                    <?= $this->lang->line('address')?>
                </p>

                <div class="social-icons">
                    <h3>Get in touch</h3>
                    <ul>
                        <li><a href="http://www.facebook.com/ledlight.thai" target="_blank" class="fa fa-facebook"></a></li>
                    </ul>
                </div><!-- /.social-icons -->

            </div>
        </div>

        <div class="col-xs-12 col-md-8 no-margin">
            <div class="link-widget">
                <div class="widget">
                    <h3><?= $this->lang->line('menu')?></h3>
                    <ul>
                     <li><a class="active" href="<?= base_url()?>"> <?= $this->lang->line("home");?></a></li>
                     <li><a href="<?= base_url()?>products"><?= $this->lang->line("products");?></a></li>
                     <li><a href="<?= base_url()?>payment"> <?= $this->lang->line("payment");?></a></li>
                     <li><a href="<?= base_url()?>about"> <?= $this->lang->line("abouts");?></a></li>
                     <li><a href="<?= base_url()?>contact"> <?= $this->lang->line("contacts");?></a></li>
                     <li><a href="<?= base_url()?>quotation"> <?= $this->lang->line("quotation");?></a></li>
                 </ul>
             </div><!-- /.widget -->
         </div><!-- /.link-widget -->

         <div class="link-widget">
            <div class="widget">
                <h3><?= $this->lang->line("all_categories");?></h3>
                <ul>
                    <?php if (!empty($categories)) {
                        foreach ($categories as $key => $category) { ?>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url()?>products/?categories=<?php echo $category->cat_id?>"><?php echo $category->cat_name?></a></li>
                        <?php } }?>

                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.link-widget -->

            <div class="link-widget">
                <div class="widget">
                    <h3><?= $this->lang->line("service_customer");?></h3>
                    <ul>
                        <li><a href="<?= base_url()?>assets/front/uploads/pdf/warranty_conditions.pdf"><?= $this->lang->line("warranty_conditions");?></a></li>
                    </ul>
                </div><!-- /.widget -->
            </div><!-- /.link-widget -->
        </div>
    </div><!-- /.container -->
</div><!-- /.link-list-row -->

<div class="copyright-bar">
    <div class="container">
        <div class="col-xs-12 col-sm-6 no-margin">
            <div class="copyright">
                &copy; <a href="#"> Awonder Photoenergy Company Limited</a> - all rights reserved
            </div><!-- /.copyright -->
        </div>
        <div class="col-xs-12 col-sm-6 no-margin">
            <div class="payment-methods ">
                   <!--  <ul>
                       <li><img alt="" src="assets/images/payments/payment-visa.png"></li>
                       <li><img alt="" src="assets/images/payments/payment-master.png"></li>
                       <li><img alt="" src="assets/images/payments/payment-paypal.png"></li>
                       <li><img alt="" src="assets/images/payments/payment-skrill.png"></li>
                   </ul> -->
               </div><!-- /.payment-methods -->
           </div>
       </div><!-- /.container -->
   </div><!-- /.copyright-bar -->

</footer><!-- /#footer -->