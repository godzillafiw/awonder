<!-- ============================================================= HEADER ============================================================= -->
<header>
	<div class="container no-padding">
		
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
			<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
	<a href="index.html">
		<!--<img alt="logo" src="assets/images/logo.svg" width="233" height="54"/>-->
		<!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
		<img alt="" src="<?php echo base_url()?>assets/front/images/logo.png" />
	</a>
</div><!-- /.logo -->
</div><!-- /.logo-holder -->

		<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder no-margin">
			<div class="contact-row">
    <div class="phone inline">
        <i class="fa fa-phone"></i> 02-375-0499  <span class="le-color">FAX:</span> 02-375-0588
    </div>
    <div class="contact inline">
        <i class="fa fa-envelope"></i> Email:<span class="le-color"> awondersell@hotmail.com</span>
    </div>
</div><!-- /.contact-row -->

<div class="search-area">
    <form>
        <div class="control-group">
            <input class="search-field" placeholder="<?= $this->lang->line("search");?>" />

            <ul class="categories-filter animate-dropdown">
                <li class="dropdown">

                    <a class="dropdown-toggle"  data-toggle="dropdown" href="category-grid.html"><?= $this->lang->line("all_categories");?></a>

                    <ul class="dropdown-menu" role="menu" >
                     <?php if (!empty($categories)) {
                        foreach ($categories as $key => $category) { ?>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="category-grid.html"><?php echo $category->cat_name?></a></li>
                    <?php } }?>
                    </ul>
                </li>
            </ul>

            <a class="search-button" href="#" ></a>    

        </div>
    </form>
</div><!-- /.search-area -->
</div><!-- /.top-search-holder -->

		<div class="col-xs-12 col-sm-12 col-md-3 top-cart-row no-margin">
			<div class="top-cart-row-container">

    <div class="top-cart-holder dropdown animate-dropdown">
        
        <div class="basket right">
            
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <div class="basket-item-count">
                    <span class="count">3</span>
                    <img src="<?php echo base_url()?>assets/front/images/icon-cart.png" alt="" />
                </div>

                <div class="total-price-basket"> 
                    <span class="lbl"><?= $this->lang->line("cart");?>:</span>
                    <span class="total-price">
                        <span class="sign">$</span><span class="value">3219,00</span>
                    </span>
                </div>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="assets/images/products/product-small-01.jpg" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">Blueberry</div>
                                <div class="price">$270.00</div>
                            </div>
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </li>

                <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="assets/images/products/product-small-01.jpg" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">Blueberry</div>
                                <div class="price">$270.00</div>
                            </div>
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </li>

                <li>
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 no-margin text-center">
                                <div class="thumb">
                                    <img alt="" src="assets/images/products/product-small-01.jpg" />
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 no-margin">
                                <div class="title">Blueberry</div>
                                <div class="price">$270.00</div>
                            </div>
                        </div>
                        <a class="close-btn" href="#"></a>
                    </div>
                </li>


                <li class="checkout">
                    <div class="basket-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <a href="cart.html" class="le-button inverse"><?= $this->lang->line("view_cart");?></a>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <a href="checkout.html" class="le-button"><?= $this->lang->line("check_out");?></a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div><!-- /.basket -->
    </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
</div><!-- /.top-cart-row -->
</div><!-- /.container -->
</header>