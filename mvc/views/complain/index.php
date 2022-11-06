<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
        <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1)) { ?>
                <?php if(permissionChecker('complain_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('complain/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class=""><?=$this->lang->line('complain_title')?></th>
                                <th class=""><?=$this->lang->line('complain_description')?></th>
                                <th class=""><?=$this->lang->line('complain_attachment')?></th>
                                <?php if(permissionChecker('complain_edit') || permissionChecker('complain_delete') || permissionChecker('complain_view')) { ?>
                                    <th class=""><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($complains)) {$i = 1; foreach($complains as $complain) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('complain_title')?>">
                                        <?php
                                            if(strlen($complain->title) > 30)
                                                echo strip_tags(substr($complain->title, 0, 30)."...");
                                            else
                                                echo strip_tags(substr($complain->title, 0, 30));
                                        ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('complain_description')?>">
                                        <?php
                                            if(strlen($complain->description) > 30)
                                                echo strip_tags(substr($complain->description, 0, 30)."...");
                                            else
                                                echo strip_tags(substr($complain->description, 0, 30));
                                        ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('complain_attachment')?>">
                                         <?php 
                                            if($complain->originalfile) { echo btn_download_file('complain/download/'.$complain->complainID, namesorting($complain->originalfile, 12), $this->lang->line('complain_download')); 
                                            }
                                        ?>  
                                    </td>

                                    <?php if(permissionChecker('complain_edit') || permissionChecker('complain_delete') || permissionChecker('complain_view')) { ?>
                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_view('complain/view/'.$complain->complainID, $this->lang->line('view')) ?>
                                            <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1)) { ?>
                                                <?php echo btn_edit('complain/edit/'.$complain->complainID, $this->lang->line('edit')) ?>
                                                <?php echo btn_delete('complain/delete/'.$complain->complainID, $this->lang->line('delete')) ?>
                                            <?php } ?>
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