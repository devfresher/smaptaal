
<div class="box">
    <div class="box-header">
         <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_feetypes')?></li>
        </ol>
        <?php if(permissionChecker('feetypes_add')) { ?>
                <h5 class="page-header">
                    <a href="<?php echo base_url('feetypes/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class="col-sm-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('feetypes_name')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('feetypes_note')?></th>
                                <?php if(permissionChecker('feetypes_edit') || permissionChecker('feetypes_delete')) { ?>
                                <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($feetypes)) {$i = 1; foreach($feetypes as $feetype) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('feetypes_name')?>">
                                        <?php echo $feetype->feetypes; ?>
                                    </td>
                  
                                    <td data-title="<?=$this->lang->line('feetypes_note')?>">
                                        <?php echo $feetype->note; ?>
                                    </td>
                                    <?php if(permissionChecker('feetypes_edit') || permissionChecker('feetypes_delete')) { ?>
                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit('feetypes/edit/'.$feetype->feetypesID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('feetypes/delete/'.$feetype->feetypesID, $this->lang->line('delete')) ?>
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