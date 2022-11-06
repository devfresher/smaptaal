<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_location')?></li>
        </ol>        
        <?php
            if(permissionChecker('location_add')) {
        ?>
            <h5 class="page-header">
                <a href="<?php echo base_url('location/add') ?>" class="pull-right btn btn-success text-white">
                    <i class="fa fa-plus"></i>
                    <?=$this->lang->line('add_title')?>
                </a>
            </h5>
        <?php } ?>
    </div><!-- /.box-header -->

    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-sm-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-4"><?=$this->lang->line('location')?></th>
                                <th class="col-sm-4"><?=$this->lang->line('location_description')?></th>
                              <?php if(permissionChecker('location_edit') || permissionChecker('location_delete')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                              <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($locations)) {$i = 1; foreach($locations as $location) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('location')?>">
                                        <?=namesorting($location->location, 50)?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('location_description')?>">
                                        <?=namesorting($location->description, 50)?>
                                    </td>
                                  <?php if(permissionChecker('location_edit') || permissionChecker('location_delete')) { ?>
                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit('location/edit/'.$location->locationID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('location/delete/'.$location->locationID, $this->lang->line('delete')) ?>
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