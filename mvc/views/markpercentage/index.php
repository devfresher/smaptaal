
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-7">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_markpercentage')?></li>
        </ol>
        <?php 
                    $usertype = $this->session->userdata("usertype");
                    if(permissionChecker('markpercentage_add')) {
                ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('markpercentage/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class="col-lg-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-lg-4"><?=$this->lang->line('markpercentage_markpercentagetype')?></th>
                                <th class="col-lg-2"><?=$this->lang->line('markpercentage_percentage')?></th>
                                <?php if(actionChecker(array('markpercentage_edit', 'markpercentage_delete'))) { ?>
                                <th class="col-lg-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($markpercentage)) {$i = 1; foreach($markpercentage as $markpercentage) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('markpercentage_markpercentagetype')?>">
                                        <?php echo $markpercentage->markpercentagetype; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('markpercentage_percentage')?>">
                                        <?=$markpercentage->percentage;?>
                                    </td>
                                    <?php if(actionChecker(array('markpercentage_edit', 'markpercentage_delete'))) { ?>
                                    <td data-title="<?=$this->lang->line('action')?>">
                                        <?php
                                            echo btn_edit('markpercentage/edit/'.$markpercentage->markpercentageID, $this->lang->line('edit'));
                                            if($markpercentage->markpercentageID != 1) {
                                                
                                                echo btn_delete('markpercentage/delete/'.$markpercentage->markpercentageID, $this->lang->line('delete'));
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
