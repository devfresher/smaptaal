<div class="box">
    <div class="box-header">
    
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
          <h5 class="page-header">
                    <a href="<?php echo base_url('permissionlog/add') ?>" class="pull-right btn btn-success text-white">
                        <i class="fa fa-plus"></i>
                        <?=$this->lang->line('add_title')?>
                    </a>
                </h5>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">

            
                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-sm-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('permissionlog_name')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('permissionlog_description')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('permissionlog_active')?></th>
<!--                                --><?php //if(permissionChecker('permissionlog_edit') || permissionChecker('permissionlog_delete') || permissionChecker('permissionlog_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
<!--                                --><?php //} ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($permissionlogs)) {$i = 1; foreach($permissionlogs as $permissionlog) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('permissionlog_name')?>">
                                        <?=$permissionlog->name?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('permissionlog_description')?>">
                                        <?=$permissionlog->description?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('permissionlog_active')?>">
                                        <?=$permissionlog->active?>
                                    </td>
<!--                                    --><?php //if(permissionChecker('permissionlog_edit') || permissionChecker('permissionlog_delete') || permissionChecker('permissionlog_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit_show('permissionlog/edit/'.$permissionlog->permissionID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete_show('permissionlog/delete/'.$permissionlog->permissionID, $this->lang->line('delete')) ?>
                                        </td>
<!--                                    --><?php //} ?>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>