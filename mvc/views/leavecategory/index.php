<div class="box">
    <div class="box-header">      
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_leavecategory')?></li>
        </ol>
          <?php
                   if(permissionChecker('leavecategory_add')) {
                ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('leavecategory/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th><?=$this->lang->line('slno')?></th>
                                <th><?=$this->lang->line('leavecategory_category')?></th>
                                <th><?=$this->lang->line('leavecategory_gender')?></th>
                                <?php if(permissionChecker('leavecategory_edit') || permissionChecker('leavecategory_delete')) { ?>
                                    <th class="col-md-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($leave_categories)) {$i = 1; foreach($leave_categories as $leavecategory) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('leavecategory_category')?>">
                                        <?php
                                            if(strlen($leavecategory->leavecategory) > 25)
                                                echo strip_tags(substr($leavecategory->leavecategory, 0, 25)."...");
                                            else
                                                echo strip_tags(substr($leavecategory->leavecategory, 0, 25));
                                        ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('leavecategory_gender')?>">
                                        <?php
                                            $leavegenderArray = array(
                                                0 => $this->lang->line('leavecategory_select_gender'),
                                                1 => $this->lang->line('leavecategory_gender_general'),
                                                2 => $this->lang->line('leavecategory_gender_male'),
                                                3 => $this->lang->line('leavecategory_gender_female')
                                            );
                                            if(isset($leavegenderArray[$leavecategory->leavegender])) {
                                                echo $leavegenderArray[$leavecategory->leavegender];
                                            }
                                        ?>
                                    </td>
                                    <?php if(permissionChecker('leavecategory_edit') || permissionChecker('leavecategory_delete')) { ?>
                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit('leavecategory/edit/'.$leavecategory->leavecategoryID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('leavecategory/delete/'.$leavecategory->leavecategoryID, $this->lang->line('delete')) ?>
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