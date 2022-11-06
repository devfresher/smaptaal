<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
           <?php
                if(permissionChecker('certificate_template_add')) {
            ?>
            <h5 class="page-header">
                <a href="<?php echo base_url('certificate_template/add') ?>">
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
                                <th class="col-sm-2"><?=$this->lang->line('certificate_template_name')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('certificate_template_theme')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('certificate_template_main_middle_text')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('certificate_template_template')?></th>
                              <?php if(permissionChecker('certificate_template_edit') || permissionChecker('certificate_template_delete') || permissionChecker('certificate_template_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                              <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($certificate_templates)) {$i = 1; foreach($certificate_templates as $certificate_template) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('certificate_template_name')?>">
                                        <?=namesorting($certificate_template->name, 25)?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('certificate_template_theme')?>">
                                        <?php
                                            echo isset($buildinThemes[$certificate_template->theme]) ? $buildinThemes[$certificate_template->theme] : '';
                                        ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('certificate_template_main_middle_text')?>">
                                        <?=namesorting($certificate_template->main_middle_text, 25)?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('certificate_template_template')?>">
                                        <?=namesorting($certificate_template->template, 20)?>
                                    </td>

                                  <?php if(permissionChecker('certificate_template_edit') || permissionChecker('certificate_template_delete') || permissionChecker('certificate_template_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_view('certificate_template/view/'.$certificate_template->certificate_templateID, $this->lang->line('view')) ?>
                                            <?php echo btn_edit('certificate_template/edit/'.$certificate_template->certificate_templateID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('certificate_template/delete/'.$certificate_template->certificate_templateID, $this->lang->line('delete')) ?>
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