<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
         <?php
                if(permissionChecker('salary_template_add')) {
            ?>
            <h5 class="page-header">
                <a href="<?php echo base_url('salary_template/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class="col-sm-2"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('salary_template_salary_grades')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('salary_template_basic_salary')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('salary_template_overtime_rate_not_hour')?></th>
                                <?php if(permissionChecker('salary_template_edit') || permissionChecker('salary_template_delete') || permissionChecker('salary_template_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($salary_templates)) {$i = 1; foreach($salary_templates as $salary_template) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('salary_template_salary_grades')?>">
                                        <?=$salary_template->salary_grades?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('salary_template_basic_salary')?>">
                                        <?=number_format($salary_template->basic_salary, 2)?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('salary_template_overtime_rate_not_hour')?>">
                                        <?=number_format($salary_template->overtime_rate, 2)?>
                                    </td>
                                    <?php if(permissionChecker('salary_template_edit') || permissionChecker('salary_template_delete') || permissionChecker('salary_template_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_view('salary_template/view/'.$salary_template->salary_templateID, $this->lang->line('view')) ?>
                                            <?php echo btn_edit('salary_template/edit/'.$salary_template->salary_templateID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('salary_template/delete/'.$salary_template->salary_templateID, $this->lang->line('delete')) ?>
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