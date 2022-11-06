<div class="box">
    <div class="box-header">
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
         <?php
            if(permissionChecker('question_level_add')) {
        ?>
        <h5 class="page-header">
            <a href="<?php echo base_url('question_level/add') ?>" class="pull-right btn btn-success text-white">
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
                                <th class="col-sm-2"><?=$this->lang->line('question_level_title')?></th>
                                <?php if(permissionChecker('question_level_edit') || permissionChecker('question_level_delete') || permissionChecker('question_level_view')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($question_levels)) {$i = 1; foreach($question_levels as $question_level) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('question_level_title')?>">
                                        <?=$question_level->name?>
                                    </td>
                                    <?php if(permissionChecker('question_level_edit') || permissionChecker('question_level_delete') || permissionChecker('question_level_view')) { ?>

                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit('question_level/edit/'.$question_level->questionLevelID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('question_level/delete/'.$question_level->questionLevelID, $this->lang->line('delete')) ?>
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