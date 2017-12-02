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
</header>

<section id="category-grid">
    <div class="container">
        <div class="col-xs-12 col-sm-3 no-margin sidebar narrow">
            <div class="widget">
                <h1 class="border"><?= $this->lang->line('bestseller')?></h1>
                <ul class="product-list">
                 <?php if (!empty($bestsellers)) {
                   foreach ($bestsellers as $key => $bestseller) { ?>
                   <li>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 no-margin">
                            <a href="#" class="thumb-holder">
                                <img alt="" src="<?php echo base_url()?>assets/front/uploads/product/<?php echo $bestseller->product_image?>" width="73" height="73" />
                            </a>
                        </div>
                        <div class="col-xs-8 col-sm-8 no-margin">
                            <a href="<?php echo base_url()?>products/detail/<?php echo $bestseller->p_id?>"><?php echo $bestseller->product_name?></a>
                            <div class="price">
                                <!-- <div class="price-prev"></div> -->
                                <div class="price-current">
                                    <?php echo !empty($bestseller->product_price) ? $bestseller->product_price : 'N/A';?>
                                </div>
                            </div>
                        </div>  
                    </div>
                </li>
                <?php } }?>
            </ul>
        </div><!-- /.widget -->

        <div class="widget">
            <h1 class="border"><?= $this->lang->line('product_other')?></h1>
            <ul class="product-list">

               <?php if (!empty($others)) {
                foreach ($others as $key => $other) { ?>
                <li>
                    <div class="row">
                        <div class="col-xs-4 col-sm-4 no-margin">
                            <a href="#" class="thumb-holder">
                                <img alt="" src="<?php echo base_url()?>assets/front/uploads/product/<?php echo $other->product_image?>" width="73" height="73" />
                            </a>
                        </div>
                        <div class="col-xs-8 col-sm-8 no-margin">
                            <a href="#"><?php echo $other->product_name?></a>
                            <div class="price">
                                <!-- <div class="price-prev"></div> -->
                                <div class="price-current">
                                    <?php echo !empty($other->product_price) ? $other->product_price : 'N/A';?>
                                </div>
                            </div>
                        </div>  
                    </div>
                </li>
                <?php } }?>
            </ul><!-- /.product-list -->
        </div><!-- /.widget -->
    </div>

    <div class="col-xs-12 col-sm-9 no-margin wide sidebar">

        <section id="gaming">
            <div class="grid-list-products">
                <div class="tab-content">
                    <div id="grid-view" class="products-grid fade tab-pane active in">

                        <div class="product-grid-holder">
                            <div class="row no-margin">
                              <?php if (!empty($products)) {
                                foreach ($products as $key => $product) { ?>
                                <div class="col-xs-12 col-sm-4 no-margin product-item-holder hover">
                                    <div class="product-item">
                                        <div class="image">
                                            <img alt="" src="<?php echo base_url()?>assets/front/uploads/product/<?php echo $product->product_image?>" data-echo="<?php echo base_url()?>assets/front/uploads/product/<?php echo $product->product_image?>" width="194" height="143"/>
                                        </div>
                                        <div class="body">
                                            <div class="title">
                                                <a href="<?php echo base_url()?>products/detail/<?php echo $product->p_id?>"><?php echo $product->product_name?></a>
                                            </div>
                                            <div class="brand"><?php echo $product->cat_name?></div>
                                        </div>
                                        <div class="prices">
                                            <div class="price-prev"></div> 
                                            <div class="price-current pull-right"><?php echo !empty($product->product_price) ? '฿'.$product->product_price : 'N/A'?></div>
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
                                    </div><!-- /.product-item -->
                                </div><!-- /.product-item-holder -->
                                <?php } }else{ ?>
                                 <div class="alert alert-warning alert-dismissible">
                                    <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong>Warning!</strong> ไม่มีรายการสินค้า
                                </div>

                                 <?php  }?>

                            </div><!-- /.row -->
                        </div><!-- /.product-grid-holder -->

                        <div class="pagination-holder">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 text-left">
                                    <ul class="pagination ">
                                        <?php echo $link; ?>
                                    </ul>
                                </div>

                                    <!-- <div class="col-xs-12 col-sm-6">
                                        <div class="result-counter">
                                            Showing <span>1-9</span> of <span>11</span> results
                                        </div>
                                    </div>
                                -->
                            </div><!-- /.row -->
                        </div><!-- /.pagination-holder -->
                    </div><!-- /.products-grid #grid-view -->

                </div><!-- /.tab-content -->
            </div><!-- /.grid-list-products -->

        </section><!-- /#gaming -->            
    </div><!-- /.col -->
    <!-- ========================================= CONTENT : END ========================================= -->    
</div><!-- /.container -->
</section>
