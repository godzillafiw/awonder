<nav id="top-megamenu-nav" class="megamenu-vertical animate-dropdown">
    <div class="container">
        <div class="yamm navbar">
         <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mc-horizontal-menu-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="mc-horizontal-menu-collapse">
                <ul class="nav navbar-nav">
                   <?php if (!empty($mains)) { 
                    foreach ($mains as $key => $main) { 
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><?php echo $main->main_name?></a>
                    
                   <?php if (!empty($categories)) { ?>

                        <ul class="dropdown-menu">
                        <?php foreach ($categories as $key => $category) { ?>
                            <?php if ($category->mid == $main->mid) { ?>
                            <li>
                                <a href="<?php echo base_url()?>products/?categories=<?php echo $category->cat_id?>"><?php echo $category->cat_name?>
                                </a>
                            </li>
                             <?php } }?>
                        </ul>

                        <?php }  ?>

                    </li> 
                   
                    <?php } }?>                 
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
        </div><!-- /.navbar -->
    </div><!-- /.container -->
</nav>
