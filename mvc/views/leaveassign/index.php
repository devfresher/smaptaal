<div class="box">
    <div class="box-header">      
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_leaveassign')?></li>
        </ol>
         <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1)) { ?>
                    <?php if(permissionChecker('leaveassign_add')) { ?>
                        <h5 class="page-header">
                            <a href="<?php echo base_url('leaveassign/add') ?>" class="pull-right btn btn-success text-white">
                                <i class="fa fa-plus"></i>
                                <?=$this->lang->line('add_title')?>
                            </a>
                        </h5>
                    <?php } ?>
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
                                <th class=""><?=$this->lang->line('slno')?></th>
                                <th class=""><?=$this->lang->line('leaveassign_usertypeID')?></th>
                                <th class=""><?=$this->lang->line('leaveassign_categoryID')?></th>
                                <th class=""><?=$this->lang->line('leaveassign_number_of_day')?></th>
                                <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1)) { ?>
                                    <?php if(permissionChecker('leaveassign_edit') || permissionChecker('leaveassign_delete')) { ?>
                                        <th class="col-md-2"><?=$this->lang->line('action')?></th>
                                    <?php } ?>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($leaveassign)) {$i = 1; foreach($leaveassign as $leaveassign) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('leaveassign_usertypeID')?>">
                                        <?=isset($usertypes[$leaveassign->usertypeID]) ? $usertypes[$leaveassign->usertypeID] : '' ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('leaveassign_categoryID')?>">
                                        <?=isset($leavecategorys[$leaveassign->leavecategoryID]) ? $leavecategorys[$leaveassign->leavecategoryID] : ''?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('leaveassign_number_of_day')?>">
                                        <?php echo $leaveassign->leaveassignday; ?>
                                    </td>
                                    <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1)) { ?>
                                        <?php if(permissionChecker('leaveassign_edit') || permissionChecker('leaveassign_delete')) { ?>
                                            <td data-title="<?=$this->lang->line('action')?>">
                                                <?php echo btn_edit('leaveassign/edit/'.$leaveassign->leaveassignID, $this->lang->line('edit')) ?>
                                                <?php echo btn_delete('leaveassign/delete/'.$leaveassign->leaveassignID, $this->lang->line('delete')) ?>
                                            </td>
                                        <?php } ?>
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