<div id="top-banner-and-menu">
   <div class="container">
        
   <div class="col-xs-12 col-sm-4 col-md-3 sidemenu-holder">
	<div class="side-menu animate-dropdown">
	    <div class="head"><i class="fa fa-list"></i> <?= $this->lang->line("all_categories");?></div>        
	    <nav class="yamm megamenu-horizontal" role="navigation">
	        <ul class="nav">
	        <?php if (!empty($categories)) {
	                        foreach ($categories as $key => $category) { ?>
	            <li class="dropdown menu-item">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $category->cat_name?></a>
	            </li><!-- /.menu-item -->
	            <?php } }?>
	        </ul><!-- /.nav -->
	    </nav><!-- /.megamenu-horizontal -->
	</div><!-- /.side-menu -->
</div><!-- /.sidemenu-holder -->

<div class="col-xs-12 col-sm-8 col-md-9 homebanner-holder">
<div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
        
        <div class="item" style="background-image: url(<?php echo base_url()?>assets/front/images/sliders/slider01.jpg);">
           
        </div><!-- /.item -->

        <div class="item" style="background-image: url(<?php echo base_url()?>assets/front/images/sliders/slider01.jpg);">
        </div><!-- /.item -->
    </div><!-- /.owl-carousel -->
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
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/products/light.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">beats studio headphones official one</a>
                                </div>
                                <div class="brand">beats</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->

                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light1.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">playstasion 4 with four games and pad</a>
                                </div>
                                <div class="brand">acer</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->

                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light2.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">EOS rebel t5i DSLR Camera with 18-55mm IS STM lens</a>
                                </div>
                                <div class="brand">canon</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->
                </div><!-- /.row -->
                
                <div class="row no-margin">
                    
                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light3.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">fitbit zip wireless activity tracker - lime</a>
                                </div>
                                <div class="brand">fitbit zip</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->

                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light4.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">PowerShot elph 115 16MP digital camera</a>
                                </div>
                                <div class="brand">canon</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->

                    <div class="col-xs-12 col-sm-4 no-margin product-item-holder size-medium hover">
                        <div class="product-item">
                            <div class="image">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light5.jpg" />
                            </div>
                            <div class="body">
                                <div class="label-discount clear"></div>
                                <div class="title">
                                    <a href="single-product.html">netbook acer travelMate b113-E-10072</a>
                                </div>
                                <div class="brand">acer</div>
                            </div>
                            <div class="prices">
                                <div class="price-current text-right">$1199.00</div>
                            </div>
                            <div class="hover-area">
                                <div class="add-cart-button">
                                    <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-item-holder -->

                </div><!-- /.row -->
            </div><!-- /.col -->
            <div class="col-xs-12 col-md-5 no-margin">
                <div class="product-item-holder size-big single-product-gallery small-gallery">
                    
                    <div id="best-seller-single-product-slider" class="single-product-slider owl-carousel">
                        <div class="single-product-gallery-item" id="slide1">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/product-gallery-01.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide2">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/product-gallery-01.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->

                        <div class="single-product-gallery-item" id="slide3">
                            <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                                <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/product-gallery-01.jpg" />
                            </a>
                        </div><!-- /.single-product-gallery-item -->
                    </div><!-- /.single-product-slider -->

                    <div class="gallery-thumbs clearfix">
                        <ul>
                            <li><a class="horizontal-thumb active" data-target="#best-seller-single-product-slider" data-slide="0" href="#slide1"><img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/gallery-thumb-01.jpg" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="1" href="#slide2"><img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/gallery-thumb-01.jpg" /></a></li>
                            <li><a class="horizontal-thumb" data-target="#best-seller-single-product-slider" data-slide="2" href="#slide3"><img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/gallery-thumb-01.jpg" /></a></li>
                        </ul>
                    </div><!-- /.gallery-thumbs -->

                    <div class="body">
                        <div class="label-discount clear"></div>
                        <div class="title">
                            <a href="single-product.html">CPU intel core i5-4670k 3.4GHz BOX B82-12-122-41</a>
                        </div>
                        <div class="brand">sony</div>
                    </div>
                    <div class="prices text-right">
                        <div class="price-current inline">$1199.00</div>
                        <a href="cart.html" class="le-button big inline"><?= $this->lang->line("add_cart");?></a>
                    </div>
                </div><!-- /.product-item-holder -->
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
                <li><a href="#new-arrivals" data-toggle="tab"><?= $this->lang->line("top_sale");?></a></li>
                <li><a href="#top-sales" data-toggle="tab"><?= $this->lang->line("product_other");?></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="featured">
                    <div class="product-grid-holder">
                        <div class="col-sm-4 col-md-3  no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="image">
                                     <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light4.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount green">-50% sale</div>
                                    <div class="title">
                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light5.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">

                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light2.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="ribbon green"><span>bestseller</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/blank.gif" data-echo="<?php echo base_url()?>assets/front/images/products/light4.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">Netbook Acer TravelMate 
                                            B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> 

                </div>
                <div class="tab-pane" id="new-arrivals">
                    <div class="product-grid-holder">
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount green">-50% sale</div>
                                    <div class="title">
                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="ribbon green"><span>bestseller</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">Netbook Acer TravelMate 
                                            B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">

                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> 

                </div>

                <div class="tab-pane" id="top-sales">
                    <div class="product-grid-holder">

                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="ribbon green"><span>bestseller</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">Netbook Acer TravelMate 
                                            B113-E-10072</a>
                                    </div>
                                    <div class="brand">acer</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">

                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">POV Action Cam</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon blue"><span>new!</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount clear"></div>
                                    <div class="title">
                                        <a href="single-product.html">White lumia 9001</a>
                                    </div>
                                    <div class="brand">nokia</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>
                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-md-3 no-margin product-item-holder hover">
                            <div class="product-item">
                                <div class="ribbon red"><span>sale</span></div> 
                                <div class="image">
                                    <img alt="" src="<?php echo base_url()?>assets/front/images/light.jpg" data-echo="<?php echo base_url()?>assets/front/images/light.jpg" />
                                </div>
                                <div class="body">
                                    <div class="label-discount green">-50% sale</div>
                                    <div class="title">
                                        <a href="single-product.html">VAIO Fit Laptop - Windows 8 SVF14322CXW</a>
                                    </div>
                                    <div class="brand">sony</div>
                                </div>
                                <div class="prices">
                                    <div class="price-prev">$1399.00</div>
                                    <div class="price-current pull-right">$1199.00</div>
                                </div>

                                <div class="hover-area">
                                    <div class="add-cart-button">
                                        <a href="single-product.html" class="le-button"><?= $this->lang->line("add_cart");?></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="loadmore-holder text-center">
                        <a class="btn-loadmore" href="#">
                            <i class="fa fa-plus"></i>
                            load more products</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>

