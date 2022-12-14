
<div class="box">
    <div class="box-header">       
        <ol class="breadcrumb col-md-7">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_tattendance')?></li>
        </ol>
        <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1)) { ?>
                <?php if(permissionChecker('tattendance_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('tattendance/add') ?>" class="pull-right btn btn-success text-white">
                            <i class="fa fa-plus"></i> 
                            <?=$this->lang->line('add_title')?>
                        </a>
                    </h5>
                <?php } ?>
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
                                <th class="col-sm-2"><?=$this->lang->line('tattendance_photo')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('tattendance_name')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('tattendance_email')?></th>
                                <?php if(permissionChecker('tattendance_view')) { ?>
                                <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($teachers)) {$i = 1; foreach($teachers as $teacher) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('tattendance_photo')?>">
                                        <?=profileimage($teacher->photo);?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('tattendance_name')?>">
                                        <?php echo $teacher->name; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('tattendance_email')?>">
                                        <?php echo $teacher->email; ?>
                                    </td>
                                    <?php if(permissionChecker('tattendance_view')) { ?>
                                    <td data-title="<?=$this->lang->line('action')?>">
                                        <?php echo btn_view('tattendance/view/'.$teacher->teacherID, $this->lang->line('view')); ?>
                                    </td>
                                    <?php } ?>
                               </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>

            </div> <!-- col-sm-12 -->
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<script type="text/javascript">
    $('#classesID').change(function() {
        var classesID = $(this).val();
        if(classesID == 0) {
            $('#hide-table').hide();
        } else {
            $.ajax({
                type: 'POST',
                url: "<?=base_url('tattendance/student_list')?>",
                data: "id=" + classesID,
                dataType: "html",
                success: function(data) {
                    window.location.href = data;
                }
            });
        }
    });
</script>