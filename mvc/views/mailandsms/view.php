
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("mailandsms/index")?>"><?=$this->lang->line('menu_mailandsms')?></a></li>
            <li class="active"><?=$this->lang->line('menu_view')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div id="printablediv" class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <?php echo $mailandsms->message; ?><br><br>
                <?php
                     
                    if($mailandsms->users) {
                        $expUsers = explode(',', $mailandsms->users);
                        if(count($expUsers) > 1) {
                            echo '<h4>'.$this->lang->line('mailandsms_reciver_users').'</h4><br>';
                            $i = 1;
                            foreach ($expUsers as $key => $expUser) {
                                if(!empty($expUser) && $expUser != ' ' && $expUser !='') {
                                    echo $i .'. '. trim($expUser) . '<br>';
                                    $i++;
                                }
                            }
                        } else {
                            echo '<h4>'.$this->lang->line('mailandsms_reciver_user').'</h4><br>';
                            echo $mailandsms->users;
                        }
                    }

                ?>
            </div>
        </div>
    </div>
</div>
