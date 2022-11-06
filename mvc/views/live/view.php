<div class="well">
    <div class="row">
        <div class="col-sm-6">
            <a href="<?php echo $join_url  ?>"><button class="btn btn-success btn-sm"> Join</button></a>
            <?php
            if($status != 'started')
                {?>
            <a href="<?php echo $start_url  ?>"><button class="btn btn-success btn-sm" > Start</button></a>
            <?php } ?>
        </div>


        <div class="col-sm-6">
            <ol class="breadcrumb">
                <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
                <li><a href="<?=base_url("instruction/index")?>"><?=$this->lang->line('panel_title')?></a></li>
                <li class="active"><?=$this->lang->line('menu_view')?></li>
            </ol>
        </div>

    </div>

</div>


<section class="panel">
    <div class="panel-body bio-graph-info">
        <div id="printablediv" class="box-body">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Status</h2>
                    <?php
                    if($status == 'waiting')
                    {
                        $setButton = 'btn-warning';
                    }elseif($status == 'started'){
                        $setButton = 'btn-success';

                    }

                    ?>
                    <p><button class='btn <?php echo $setButton ?> btn-xs'><?php echo $status ?></button></p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- email end here -->
\