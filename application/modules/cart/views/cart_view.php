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
<section id="cart-page">
    <div class="container">
        <div class="col-xs-12 col-md-9 items-holder no-margin">
            <?php echo form_open('cart/update'); ?>
            <?php $i = 1; ?>
            <?php if(!empty($this->cart->contents())): ?>
            <?php foreach ($this->cart->contents() as $items): ?>

                <?php echo form_hidden('id'.'[]', $items['rowid']); ?>

                <div class="row no-margin cart-item" style="border-bottom: 1px solid #e0e0e0;
                padding: 27px 0 24px;">
                <div class="col-xs-12 col-sm-2 no-margin">
                    <a href="#" class="thumb-holder">
                        <img class="lazy" width="60" height="60" alt="" src="<?= base_url()?>assets/front/uploads/product/<?= $items['image'];?>" />
                    </a>
                </div>

                <div class="col-xs-12 col-sm-5 ">
                    <div class="title">
                        <a href="#"> <?php echo $items['name']; ?></a>
                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>
                           <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                            <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="brand"><?php echo $items['cname']; ?></div>
            </div> 

            <div class="col-xs-12 col-sm-3 no-margin">
                <div class="quantity">
                    <div class="le-quantity">
                        <a class="minus" href="#reduce"></a>
                        <?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
                        <a class="plus" href="#add"></a>
                    </div>
                </div>
            </div> 

            <div class="col-xs-12 col-sm-2 no-margin">
                <div class="price">
                    <?php echo $this->cart->format_number($items['price']); ?>
                </div>
                <a class="close-btn" href="<?php echo base_url()?>cart/delete/<?=$items['rowid']?>"></a>
            </div>
        </div><!-- /.cart-item -->
        <?php $i++; ?>

    <?php endforeach; ?>
    <?php else :?>
        <div class="alert alert-warning alert-dismissible">
            <a class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Warning!</strong> ไม่มีรายการสินค้า กรุณาสั่งซื้อสินค้า
        </div>
    <?php endif?>
    <br>
    <?php echo form_submit('le-button big', $this->lang->line('update_cart')); ?>
</div>

<div class="col-xs-12 col-md-3 no-margin sidebar ">
    <div class="widget cart-summary">
        <h1 class="border"><?= $this->lang->line("cart");?></h1>
        <div class="body">
            <ul class="tabled-data no-border inverse-bold">
                <li>
                    <label><?= $this->lang->line("sub_total");?></label>
                    <div class="value pull-right">฿<?php echo number_format($this->cart->total(),2);?></div>
                </li>
                        <!-- <li>
                            <label>shipping</label>
                            <div class="value pull-right">free shipping</div>
                        </li> -->
                    </ul>
                    <ul id="total-price" class="tabled-data inverse-bold no-border">
                        <li>
                            <label><?= $this->lang->line("order_total");?></label>
                            <div class="value pull-right">฿<?php echo number_format($this->cart->total(),2);?></div>
                        </li>
                    </ul>
                    <div class="buttons-holder">
                        <a class="le-button big" id="order_confirm" disabled href="<?php echo base_url('cart/checkout')?>" ><?= $this->lang->line("check_out");?></a>
                        <a class="simple-link block" href="<?php echo base_url('products') ?>" ><?= $this->lang->line("shopping_continue");?></a>
                    </div>
                </div>
            </div><!-- /.widget -->
        </div><!-- /.sidebar -->
    </div>
</section>