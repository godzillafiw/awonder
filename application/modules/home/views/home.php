<div id="top-banner-and-menu">
 <div class="container">
       <div class="col-xs-12 col-sm-12 col-md-12 ">
        <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                <div class="item" style="background-image: url(<?php echo base_url()?>assets/front/images/sliders/slider01.jpg);">
                </div>
                <div class="item" style="background-image: url(<?php echo base_url()?>assets/front/images/sliders/slider02.jpg);">
                </div>
            </div>
        </div>

    </div><!-- /.homebanner-holder -->

</div><!-- /.container -->
</div><!-- /#top-banner-and-menu -->
<br>

<section id="bestsellers" class="color-bg wow fadeInUp">
    <div class="container">
        <h1 class="section-title"><?= $this->lang->line("bestseller");?></h1>

        <div class="product-grid-holder medium">
            <div class="col-xs-12 col-md-7 no-margin">

                <div class="row no-margin">
                    <?php if (!empty($products)) {
                       foreach ($products as $key => $product) { ?>
                       <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" width="90" height="90"  src="<?php echo base_url()?>assets/front/uploads/product/<?= $product->product_image?>" data-echo="<?php echo base_url()?>assets/front/uploads/product/<?= $product->product_image?>" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="<?php echo base_url()?>products/detail/<?php echo $product->p_id?>"><?=  (strlen($product->product_name) > 40) ? substr($product->product_name, 0,40).'...' : $product->product_name ?></a>
                                </div>
                                <div class="brand"><?= $product->cat_name?></div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right"><?php echo !empty($product->product_price) ? '฿'.$product->product_price : 'N/A'?></div>
                            </div>
                            <div class="" style="bottom: 11px;text-align: center;">
                                <div class="add-cart-button">
                                 <?php if (empty($product->product_price)) { ?>
                                 <a href="<?php echo base_url()?>quotation" class="le-button">
                                    <?= $this->lang->line("quotation");?>
                                </a>
                                <?php } else{ ?>
                                <a href="<?php echo base_url()?>products/detail/<?php echo $product->p_id?>" class="le-button">
                                    <?= $this->lang->line("add_cart");?>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div><!-- /.product-item-holder -->
                <?php } }?>
            </div><!-- /.row -->
        </div><!-- /.col -->

        <div class="col-xs-12 col-md-5 no-margin">
            <?php if (!empty($product_random)) {
             foreach ($product_random as $key => $random) { ?>
             <div class="product-item-holder size-big single-product-gallery small-gallery">
                 <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                    <div class="single-product-gallery-item" id="slide1">
                        <a data-rel="prettyphoto"  href="javasrcipt:void(0)">
                            <img alt="" width="420" height="389" src="<?php echo base_url()?>assets/front/uploads/product/<?= $random->product_image?>" data-echo="<?php echo base_url()?>assets/front/uploads/product/<?= $random->product_image?>" />
                        </a>
                    </div><!-- /.single-product-gallery-item -->
                </div><!-- /.single-product-slider -->

                <div class="body">
                    <div class="label-discount clear"></div>
                    <div class="title">
                        <a href="<?php echo base_url()?>products/detail/<?php echo $random->p_id?>"><?=  (strlen($random->product_name) > 80) ? substr($random->product_name, 0,80).'...' : $random->product_name ?></a>
                    </div>
                    <div class="brand"><?= $random->cat_name?></div>
                </div>
                <div class="prices text-right">
                    <div class="price-current inline"><?php echo !empty($random->product_price) ? '฿'.$random->product_price : 'N/A'?></div>
                    <?php if (empty($random->product_price)) { ?>
                    <a href="<?php echo base_url()?>quotation" class="le-button">
                        <?= $this->lang->line("quotation");?>
                    </a>
                    <?php } else{ ?>
                    <a href="<?php echo base_url()?>products/detail/<?php echo $product->p_id?>" class="le-button">
                        <?= $this->lang->line("add_cart");?>
                    </a>
                    <?php } ?>
                </div>
            </div><!-- /.product-item-holder -->
            <?php } }?>
        </div><!-- /.col -->

    </div><!-- /.product-grid-holder -->
</div><!-- /.container -->
</section><!-- /#bestsellers -->


<div id="products-tab" class="wow fadeInUp">
    <div class="container">
        <div class="tab-holder">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" >
                <li class="active"><a href="#featured" data-toggle="tab"><?= $this->lang->line("bestseller");?></a></li>
                <li><a href="#top-sales" data-toggle="tab"><?= $this->lang->line("product_other");?></a></li>
            </ul>



            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <?php if (!empty($bestsellers)) {
                     foreach ($bestsellers as $key => $bestseller) { ?>
                     <div class="product-grid-holder">
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span><?= $this->lang->line("bestseller");?></span></div>
                                <div class="image">
                                 <img alt="" src="<?php echo base_url()?>assets/front/uploads/product/<?= $bestseller->product_image?>" data-echo="<?php echo base_url()?>assets/front/uploads/product/<?= $bestseller->product_image?>" />
                             </div>
                             <div class="body">
                                <div class="title">
                                    <a href="<?php echo base_url()?>products/detail/<?php echo $bestseller->p_id?>"><?=  (strlen($bestseller->product_name) > 40) ? substr($bestseller->product_name, 0,40).'...' : $bestseller->product_name ?></a>
                                </div>
                                <div class="brand"><?= $bestseller->cat_name?></div>
                            </div>
                            <div class="prices">
                                <div class="price-prev"></div> 
                                <div class="price-current pull-right"><?php echo !empty($bestseller->product_price) ? '฿'.$bestseller->product_price : 'N/A'?></div>
                            </div>

                            <div class="" style="bottom: 11px;text-align: center;">
                                <div class="add-cart-button">
                                   <?php if (empty($bestseller->product_price)) { ?>
                                   <a href="<?php echo base_url()?>quotation" class="le-button">
                                    <?= $this->lang->line("quotation");?>
                                </a>
                                <?php } else{ ?>
                                <a href="<?php echo base_url()?>products/detail/<?php echo $product->p_id?>" class="le-button">
                                    <?= $this->lang->line("add_cart");?>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } }?>
        </div>

        <div class="tab-pane" id="top-sales">
         <?php if (!empty($others)) {
            foreach ($others as $key => $other) { ?>
            <div class="product-grid-holder">
                <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                    <div class="product-item">
                        <div class="image">
                         <img alt="" src="<?php echo base_url()?>assets/front/uploads/product/<?= $other->product_image?>" data-echo="<?php echo base_url()?>assets/front/uploads/product/<?= $other->product_image?>" />
                     </div>
                     <div class="body">
                        <div class="title">
                            <a href="<?php echo base_url()?>products/detail/<?php echo $bestseller->p_id?>"><?=  (strlen($other->product_name) > 40) ? substr($other->product_name, 0,40).'...' : $other->product_name ?></a>
                        </div>
                        <div class="brand"><?= $other->cat_name?></div>
                    </div>
                    <div class="prices">
                        <div class="price-prev"></div> 
                        <div class="price-current pull-right"><?php echo !empty($other->product_price) ? '฿'.$other->product_price : 'N/A'?></div>
                    </div>

                    <div class="" style="bottom: 11px;text-align: center;">
                        <div class="add-cart-button">
                           <?php if (empty($other->product_price)) { ?>
                           <a href="<?php echo base_url()?>quotation" class="le-button">
                            <?= $this->lang->line("quotation");?>
                        </a>
                        <?php } else{ ?>
                        <a href="<?php echo base_url()?>products/detail/<?php echo $product->p_id?>" class="le-button">
                            <?= $this->lang->line("add_cart");?>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } }?>
    <div class="loadmore-holder text-center">
    </div> 
</div>
</div>
</div>
</div>
</div>

