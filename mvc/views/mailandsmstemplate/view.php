<div class="box">
    <div class="box-header">
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("mailandsmstemplate/index")?>"><?=$this->lang->line('menu_mailandsmstemplate')?></a></li>
            <li class="active"><?=$this->lang->line('menu_view')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div id="printablediv" class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $mailandsmstemplate->template; ?><br><br>
            </div>
        </div>
    </div>
</div>