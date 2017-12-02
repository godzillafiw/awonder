
<header>
	<div class="container no-padding">
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
      <div class="logo" style="float: left;margin-top: -35px">
       <a href="<?= base_url()?>">
        <!--<img alt="logo" src="assets/images/logo.svg" width="233" height="54"/>-->
        <!--<object id="sp" type="image/svg+xml" data="assets/images/logo.svg" width="233" height="54"></object>-->
        <img alt=""  src="<?php echo base_url()?>assets/front/images/logo_new.png" />
      </a>
    </div><!-- /.logo -->
  </div><!-- /.logo-holder -->
		

  <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder no-margin">
   <div class="contact-row">
    <div class="phone inline">
      <i class="fa fa-phone"></i> 02-375-0499  <span class="le-color">FAX:</span> 02-375-0588
    </div>
    <div class="contact inline">
      <i class="fa fa-envelope"></i> Email:<span class="le-color"> awondersell@hotmail.com</span>
    </div>
  </div><!-- /.contact-row -->

  <div class="search-area">
    <form action="<?= base_url('products')?>" method="GET">
      <div class="control-group">
        <input class="search-field" name="search" placeholder="<?= $this->lang->line("search");?>" value="<?= @$_GET['search']?>" />
        <button type="submit" class="le-button huge search-button"></button>  
      </div>
    </form>
  </div><!-- /.search-area -->
</div><!-- /.top-search-holder -->

<div class="col-xs-12 col-sm-12 col-md-2 top-cart-row no-margin">
 <div class="top-cart-row-container">
  <div class="top-cart-holder dropdown animate-dropdown">
    <div class="basket right">
      <a class="dropdown-toggle" href="<?php echo base_url('cart') ?>">
        <div class="basket-item-count">
          <span class="count" id="update_cart"><?php echo count($this->cart->contents()); ?></span>
          <img src="<?php echo base_url()?>assets/front/images/icon-cart.png" alt="" />
        </div>
        <div class="total-price-basket">
          <span class="lbl"><?= $this->lang->line("cart");?>:</span>
          <span class="total-price">
            <span class="sign">฿</span>
            <span class="value" id="total"><?php echo number_format($this->cart->total(),2)?></span>
          </span>
        </div>
      </a>
    </div><!-- /.basket -->
  </div><!-- /.top-cart-holder -->
</div><!-- /.top-cart-row-container -->
</div><!-- /.top-cart-row -->
</div><!-- /.container -->
</header>
<?php  echo modules::run('sidebar/menuhorizental'); ?>
