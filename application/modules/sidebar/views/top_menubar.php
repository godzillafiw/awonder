<nav class="top-bar animate-dropdown">
    <div class="container">
        <div class="col-xs-12 col-sm-8 no-margin">
            <ul>
                <li><a class="active" href="<?= base_url()?>"> <?= $this->lang->line("home");?></a></li>
                <li><a href="<?= base_url()?>about"><?= $this->lang->line("about");?></a></li>
                <li><a href="<?= base_url()?>products"><?= $this->lang->line("products");?></a></li>
                <li><a href="<?= base_url()?>payment"><?= $this->lang->line("payment");?></a></li>
                <li><a href="<?= base_url()?>contact"><?= $this->lang->line("contact");?></a></li>
                <li><a href="<?= base_url()?>quotation"><?= $this->lang->line("quotation");?></a></li>
                <li><a href="<?= base_url()?>warranty"><?= $this->lang->line("warranty_conditions");?></a></li>
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