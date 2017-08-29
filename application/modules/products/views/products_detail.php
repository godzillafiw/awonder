<?php  echo modules::run('sidebar/menuhorizental'); ?>
<br>
<div id="single-product">
    <div class="container">

       <div class="no-margin col-xs-12 col-sm-6 col-md-5 gallery-holder">
        <div class="product-item-holder size-big single-product-gallery small-gallery">

            <div id="owl-single-product">
                <div class="single-product-gallery-item" id="slide1">
                    <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                    </a>
                </div><!-- /.single-product-gallery-item -->

                <div class="single-product-gallery-item" id="slide2">
                    <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                    </a>
                </div><!-- /.single-product-gallery-item -->

                <div class="single-product-gallery-item" id="slide3">
                    <a data-rel="prettyphoto" href="images/products/product-gallery-01.jpg">
                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/product-gallery-01.jpg" />
                    </a>
                </div><!-- /.single-product-gallery-item -->
            </div><!-- /.single-product-slider -->


            <div class="single-product-gallery-thumbs gallery-thumbs">

                <div id="owl-single-product-thumbnails">
                    <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="0" href="#slide1">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="0" href="#slide1">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="1" href="#slide2">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>

                    <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide3">
                        <img width="67" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/gallery-thumb-01.jpg" />
                    </a>
                </div><!-- /#owl-single-product-thumbnails -->

                <div class="nav-holder left hidden-xs">
                    <a class="prev-btn slider-prev" data-target="#owl-single-product-thumbnails" href="#prev"></a>
                </div><!-- /.nav-holder -->

                <div class="nav-holder right hidden-xs">
                    <a class="next-btn slider-next" data-target="#owl-single-product-thumbnails" href="#next"></a>
                </div><!-- /.nav-holder -->

            </div><!-- /.gallery-thumbs -->

        </div><!-- /.single-product-gallery -->
    </div><!-- /.gallery-holder -->        
    <div class="no-margin col-xs-12 col-sm-7 body-holder">
        <div class="body">
            <div class="star-holder inline"><div class="star" data-score="4"></div></div>
            <div class="availability"><label>Availability:</label><span class="available">  in stock</span></div>

            <div class="title"><a href="#">VAIO fit laptop - windows 8 SVF14322CXW</a></div>
            <div class="brand">sony</div>

            <div class="social-row">
                <span class="st_facebook_hcount"></span>
                <span class="st_twitter_hcount"></span>
                <span class="st_pinterest_hcount"></span>
            </div>

            <div class="excerpt">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare turpis non risus semper dapibus. Quisque eu vehicula turpis. Donec sodales lacinia eros, sit amet auctor tellus volutpat non.</p>
            </div>

            <div class="prices">
                <div class="price-current">$1740.00</div>
            </div>

            <div class="qnt-holder">
                <div class="le-quantity">
                    <form>
                        <a class="minus" href="#reduce"></a>
                        <input name="quantity" readonly="readonly" type="text" value="1" />
                        <a class="plus" href="#add"></a>
                    </form>
                </div>
                <a id="addto-cart" href="cart.html" class="le-button huge">add to cart</a>
            </div><!-- /.qnt-holder -->
        </div><!-- /.body -->

    </div><!-- /.body-holder -->
</div><!-- /.container -->
</div><!-- /.single-product -->

<!-- ========================================= SINGLE PRODUCT TAB ========================================= -->
<section id="single-product-tab">
    <div class="container">
        <div class="tab-holder">

            <ul class="nav nav-tabs simple" >
                <li class="active"><a href="#description" data-toggle="tab">Description</a></li>
                <li><a href="#additional-info" data-toggle="tab">Additional Information</a></li>
            </ul><!-- /.nav-tabs -->

            <div class="tab-content">
                <div class="tab-pane active" id="description">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet porttitor eros. Praesent quis diam placerat, accumsan velit interdum, accumsan orci. Nunc libero sem, elementum in semper in, sollicitudin vitae dolor. Etiam sed tempus nisl. Integer vel diam nulla. Suspendisse et aliquam est. Nulla molestie ante et tortor sollicitudin, at elementum odio lobortis. Pellentesque neque enim, feugiat in elit sed, pharetra tempus metus. Pellentesque non lorem nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <p>Sed consequat orci vel rutrum blandit. Nam non leo vel risus cursus porta quis non nulla. Vestibulum vitae pellentesque nunc. In hac habitasse platea dictumst. Cras egestas, turpis a malesuada mollis, magna tortor scelerisque urna, in pellentesque diam tellus sit amet velit. Donec vel rhoncus nisi, eget placerat elit. Phasellus dignissim nisl vel lectus vehicula, eget vehicula nisl egestas. Duis pretium sed risus dapibus egestas. Nam lectus felis, sodales sit amet turpis se.</p>
                </div><!-- /.tab-pane #description -->

                <div class="tab-pane" id="additional-info">
                    <ul class="tabled-data">
                        <li>
                            <label>weight</label>
                            <div class="value">7.25 kg</div>
                        </li>
                        <li>
                            <label>dimensions</label>
                            <div class="value">90x60x90 cm</div>
                        </li>
                        <li>
                            <label>size</label>
                            <div class="value">one size fits all</div>
                        </li>
                        <li>
                            <label>color</label>
                            <div class="value">white</div>
                        </li>
                        <li>
                            <label>guarantee</label>
                            <div class="value">5 years</div>
                        </li>
                    </ul><!-- /.tabled-data -->
                </div><!-- /.tab-pane #additional-info -->

            </div><!-- /.tab-holder -->
        </div><!-- /.container -->
    </section><!-- /#single-product-tab -->
<!-- ========================================= SINGLE PRODUCT TAB : END ========================================= -->