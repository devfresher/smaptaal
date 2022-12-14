
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-8">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_subject')?></li>
        </ol>
        <h5 class="page-header">
                <?php if(permissionChecker('subject_add')) { ?>
                    <a href="<?php echo base_url('subject/add') ?>" class="pull-right btn btn-success text-white">
                        <i class="fa fa-plus"></i>
                        <?=$this->lang->line('add_title')?>
                    </a>
                <?php } ?>

                <?php if($this->session->userdata('usertypeID') != 3) { ?>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12  drop-marg">
                        <?php
                            $array = array("0" => $this->lang->line("subject_select_class"));
                            if(!empty($classes)) {
                                foreach ($classes as $classa) {
                                    $array[$classa->classesID] = $classa->classes;
                                }
                            }
                            echo form_dropdown("classesID", $array, set_value("classesID", $set), "id='classesID' class='form-control select2'");
                        ?>
                    </div>
                <?php } ?>
            </h5>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
    <br/>
        <div class="row">
            <div class="col-sm-12">

                <div id="hide-table">
                    <table id="example1" class="table dataTable no-footer">
                        <thead>
                            <tr>
                                <th><?=$this->lang->line('slno')?></th>
                                <th><?=$this->lang->line('subject_name')?></th>
                                <th><?=$this->lang->line('subject_author')?></th>
                                <th><?=$this->lang->line('subject_code')?></th>
                                <th><?=$this->lang->line('subject_teacher')?></th>
                                <th><?=$this->lang->line('subject_passmark')?></th>
                                <th><?=$this->lang->line('subject_finalmark')?></th>
                                <th><?=$this->lang->line('subject_type')?></th>
                                <?php if(permissionChecker('subject_edit') || permissionChecker('subject_delete')) { ?>
                                <th><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>

                        <tbody>
                            <?php if(!empty($subjects)) {$i = 1; foreach($subjects as $subject) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('subject_name')?>">
                                        <?php echo $subject->subject; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('subject_author')?>">
                                        <?php echo $subject->subject_author; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('subject_code')?>">
                                        <?php echo $subject->subject_code; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('subject_teacher')?>">
                                        <?php 
                                            if(isset($subjectteachers[$subject->subjectID])) {
                                                foreach ($subjectteachers[$subject->subjectID] as $teacherID) {
                                                    if(isset($teachers[$teacherID])) {
                                                        echo $teachers[$teacherID].'<br>';
                                                    }
                                                }
                                            }
                                        ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('subject_passmark')?>">
                                        <?php echo $subject->passmark; ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('subject_finalmark')?>">
                                        <?php echo $subject->finalmark; ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('subject_type')?>">
                                        <?php if($subject->type == 1) { ?>
                                            <button type="button" class="btn btn-primary btn-xs"><?php echo $this->lang->line('subject_mandatory'); ?></button>
                                        <?php } elseif($subject->type == 0) { ?>
                                            <button type="button" class="btn btn-warning btn-xs"><?php echo $this->lang->line('subject_optional'); ?></button>
                                        <?php } ?>
                                    </td>

                                    <?php if(permissionChecker('subject_edit') || permissionChecker('subject_delete')) { ?>
                                    <td data-title="<?=$this->lang->line('action')?>">
                                        <?php echo btn_edit('subject/edit/'.$subject->subjectID."/".$set, $this->lang->line('edit')) ?>
                                        <?php echo btn_delete('subject/delete/'.$subject->subjectID."/".$set, $this->lang->line('delete')) ?>
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


<script type="text/javascript">
    $('.select2').select2();
    $('#classesID').change(function() {
        var classesID = $(this).val();
        if(classesID == 0) {
            $('#hide-table').hide();
        } else {
            $.ajax({
                type: 'POST',
                url: "<?=base_url('subject/subject_list')?>",
                data: "id=" + classesID,
                dataType: "html",
                success: function(data) {
                    window.location.href = data;
                }
            });
        }
    });
</script>
