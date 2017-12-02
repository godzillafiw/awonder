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
<div id="single-product">
    <div class="container">
        <div id="notification_div"></div>
        <?php if (!empty($details)) {
            foreach ($details as $key => $detail) { ?>
            <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
                <div class="product-item-holder size-big single-product-gallery small-gallery">

                    <div id="owl-single-product">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="javascript:void(0)">
                                <img class="img-responsive"  alt="" src="<?php echo base_url()?>assets/front/uploads/product/<?php echo $detail->product_image?>" data-echo="<?php echo base_url()?>assets/front/uploads/product/<?php echo $detail->product_image?>" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->
                </div><!-- /.single-product-gallery -->
            </div><!-- /.gallery-holder -->        
            <div class="no-margin col-xs-12 col-sm-7 body-holder">
                <div class="body">
                    <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

                    <div class="title"><a href="#" class="product_name"><?php echo $detail->product_name?></a></div>
                    <div class="brand cat_name"><?php echo $detail->cat_name?></div>

                    <div class="social-row">
                        <span class="st_facebook_hcount"></span>
                        <span class="st_twitter_hcount"></span>
                        <span class="st_pinterest_hcount"></span>
                    </div>

                <!-- <div class="excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare turpis non risus semper dapibus. Quisque eu vehicula turpis. Donec sodales lacinia eros, sit amet auctor tellus volutpat non.</p>
                </div> -->

                <div class="prices">
                    <div class="price-current product_price" price="<?php echo $detail->product_price?>"><?php  echo !empty($detail->product_price) ? '฿'.number_format($detail->product_price) : 'N/A'?></div>
                </div>

                <div class="qnt-holder">
                    <!-- <div class="le-quantity">
                        <form>
                            <a class="minus btn-number less_qty" href="#reduce"></a>
                            <input name="quantity" class="qty"  readonly="readonly" type="text" value="1" />
                            <a class="plus" href="#add"></a>
                        </form>
                    </div>
                -->

                <?php if (empty($detail->product_price)) { ?>
                <a id="addto-cart" href="<?php echo base_url()?>quotation" disable class="le-button huge">
                    <?= $this->lang->line("quotation");?>
                </a>
                <?php } else{ ?>
                <button id="add_to_cart" href="javascript:void(0)" onclick="addCart(this)" data-product_id="<?php echo $detail->p_id;?>"  data-price="<?php echo $detail->product_price;?>" data-product_name="<?php echo $detail->product_name;?>" data-cat_name="<?php echo $detail->cat_name;?>" data-img="<?php echo $detail->product_image;?>" class="le-button huge add_to_cart">
                    <?= $this->lang->line("add_cart");?>
                </button>

                <?php  } ?>
            </div><!-- /.qnt-holder -->
        </div><!-- /.body -->

    </div><!-- /.body-holder -->
    <?php } }?>
</div><!-- /.container -->
</div><!-- /.single-product -->


<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">

            <ul class="nav nav-tabs simple" >
                <li class="active"><a href="#description" data-toggle="tab"><?= $this->lang->line('detail')?></a></li>
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="description">
                 <div><p><?php echo $detail->product_detail?></p></div>
             </div><!-- /.tab-pane #description -->

         </div><!-- /.tab-holder -->
     </div><!-- /.container -->
 </section><!-- /#single-product-tab -->
<!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->