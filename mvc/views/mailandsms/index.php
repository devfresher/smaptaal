<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_mailandsms')?></li>
        </ol>
        <?php if(permissionChecker('mailandsms_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('mailandsms/add') ?>" class="pull-right btn btn-success text-white">
                            <i class="fa fa-plus"></i> 
                            <?=$this->lang->line('add_title')?>
                        </a>
                    </h5>
                <?php } ?>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body"><br/>
        <div class="row">
            <div class="col-sm-12">

                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-lg-1"><?=$this->lang->line('slno')?></th>
                                <th class="col-lg-1"><?=$this->lang->line('mailandsms_usertype')?></th>
                                <th class="col-lg-3"><?=$this->lang->line('mailandsms_users')?></th>
                                <th class="col-lg-1"><?=$this->lang->line('mailandsms_type')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('mailandsms_dateandtime')?></th>
                                <th class="col-lg-3"><?=$this->lang->line('mailandsms_message')?></th>
                                <?php if(permissionChecker('mailandsms_view')) { ?>
                                <th class="col-lg-1"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($mailandsmss)) {$i = 1; foreach($mailandsmss as $mailandsms) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('mailandsms_usertype')?>">
                                        <?=($mailandsms->usertypeID !== NULL) ? $mailandsms->usertype : $this->lang->line('mailandsms_guest_user')?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('mailandsms_users')?>">
                                        <?php
                                            if(strlen($mailandsms->users) > 36) {
                                                echo substr($mailandsms->users, 0, 36). ".."; 
                                            } else {
                                                echo $mailandsms->users;
                                            }
                                        ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('mailandsms_type')?>">
                                        <?php echo $mailandsms->type; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('mailandsms_dateandtime')?>">
                                        <?php echo date("d M Y h:i:s a", strtotime($mailandsms->create_date));?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('mailandsms_message')?>">
                                        <?php echo substr(strip_tags($mailandsms->message), 0, 36). ".."; ?>
                                    </td>
                                    <?php if(permissionChecker('mailandsms_view')) { ?>
                                    <td data-title="<?=$this->lang->line('action')?>">
                                        <?php echo btn_view('mailandsms/view/'.$mailandsms->mailandsmsID, $this->lang->line('view')) ?>
                                    </td>
                                    <?php } ?>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>
   

            </div> <!-- col-sm-12 -->
            
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->
