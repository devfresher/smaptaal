
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_usertype')?></li>
        </ol>
        <?php 
                $usertype = $this->session->userdata("usertype");
                if(permissionChecker('usertype_add')) {
            ?>
                <h5 class="page-header">
                    <a href="<?php echo base_url('usertype/add') ?>" class="pull-right btn btn-success text-white">
                        <i class="fa fa-plus"></i> 
                        <?=$this->lang->line('add_title')?>
                    </a>
                </h5>
            <?php } ?>

    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-lg-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-lg-8"><?=$this->lang->line('usertype_usertype')?></th>
                                <?php if(permissionChecker('usertype_edit') || permissionChecker('usertype_delete')) { ?>
                                <th class="col-lg-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($usertypes)) {$i = 1; foreach($usertypes as $usertype) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('usertype_usertype')?>">
                                        <?php echo $usertype->usertype; ?>
                                    </td>
                                    <?php if(permissionChecker('usertype_edit') || permissionChecker('usertype_delete')) { ?>
                                    <td data-title="<?=$this->lang->line('action')?>">
                                        <?php
                                            $reletionarray = array(1,2,3,4,5,6,7);
                                            echo btn_edit('usertype/edit/'.$usertype->usertypeID, $this->lang->line('edit'));
                                            if(!in_array($usertype->usertypeID, $reletionarray)) {
                                                echo btn_delete('usertype/delete/'.$usertype->usertypeID, $this->lang->line('delete'));
                                            }
                                        ?>
                                    </td>
                                    <?php } ?>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
