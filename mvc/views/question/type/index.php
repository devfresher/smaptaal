<div class="box">
    <div class="box-header">
       
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
          <h5 class="page-header">
            <a href="<?php echo base_url('question_type/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class="col-sm-2"><?=$this->lang->line('question_type_number')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('question_type_name')?></th>
<!--                                --><?php //if(permissionChecker('question_type_edit') || permissionChecker('question_type_delete') || permissionChecker('question_type_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
<!--                                --><?php //} ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($question_types)) {$i = 1; foreach($question_types as $question_type) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('question_type_number')?>">
                                        <?=$question_type->typeNumber?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('question_type_name')?>">
                                        <?=$question_type->name?>
                                    </td>
<!--                                    --><?php //if(permissionChecker('question_type_edit') || permissionChecker('question_type_delete') || permissionChecker('question_type_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit_show('question_type/edit/'.$question_type->questionTypeID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete_show('question_type/delete/'.$question_type->questionTypeID, $this->lang->line('delete')) ?>
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