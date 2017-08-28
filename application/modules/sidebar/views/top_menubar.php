<!-- ============================================================= TOP NAVIGATION ============================================================= -->
<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-8 no-margin">
            <ul>
                <li><a class="active" href="<?= base_url()?>"> <i class="fa fa-home" aria-hidden="true"></i> <?= $this->lang->line("home");?></a></li>
                <li><a href="<?= base_url()?>products"><i class="fa fa-archive" aria-hidden="true"></i> <?= $this->lang->line("products");?></a></li>
                <li><a href="<?= base_url()?>payment"><i class="fa fa-credit-card" aria-hidden="true"></i> <?= $this->lang->line("payment");?></a></li>
                <li><a href="<?= base_url()?>about"><i class="fa fa-info-circle" aria-hidden="true"></i> <?= $this->lang->line("abouts");?></a></li>
                <li><a href="<?= base_url()?>contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?= $this->lang->line("contacts");?></a></li>
                <li><a href="<?= base_url()?>quotation"><i class="fa fa-file-word-o" aria-hidden="true"></i>  <?= $this->lang->line("quotation");?></a></li>
            </ul>
        </div><!-- /.col -->

        <div class="col-xs-12 col-sm-4 no-margin">
            <ul class="right">
                <li><a href="<?php echo base_url("lang/change/thailand"); ?>"><img src="<?php echo base_url("assets/front/images/flag/thai.png"); ?>" title="Thai Langues"></a></li>
                <li><a href="<?php echo base_url("lang/change/english"); ?>"><img src="<?php echo base_url("assets/front/images/flag/eng.png"); ?>" title="English Langues"></a></li>
            </ul>
        </div><!-- /.col -->
    </div><!-- /.container -->
</nav><!-- /.top-bar -->
<!-- ============================================================= TOP NAVIGATION : END ============================================================= -->