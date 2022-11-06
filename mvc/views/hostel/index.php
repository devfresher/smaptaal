<div class="box">
    <div class="box-header">
       
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_hostel')?></li>
        </ol>
         <?php if(permissionChecker('hostel_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('hostel/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class="col-sm-2"><?=$this->lang->line('hostel_name')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('hostel_htype')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('hostel_address')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('hostel_note')?></th>
                                <?php if(permissionChecker('hostel_edit') || permissionChecker('hostel_delete')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($hostels)) {$i = 1; foreach($hostels as $hostel) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('hostel_name')?>">
                                        <?php echo $hostel->name; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('hostel_htype')?>">
                                        <?php echo $hostel->htype; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('hostel_address')?>">
                                        <?php echo $hostel->address; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('hostel_note')?>">
                                        <?php echo $hostel->note; ?>
                                    </td>

                                    <?php if(permissionChecker('hostel_edit') || permissionChecker('hostel_delete')) { ?>
                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit('hostel/edit/'.$hostel->hostelID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('hostel/delete/'.$hostel->hostelID, $this->lang->line('delete')) ?>
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