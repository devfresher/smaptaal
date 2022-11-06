

<div class="box">

    <div class="box-header">

        <ol class="breadcrumb col-md-6">

            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>

            <?php if($siteinfos->school_type == 'classbase') { ?>

                <li class="active"><?=$this->lang->line('menu_classes')?></li>

            <?php } else { ?>

                <li class="active"><?=$this->lang->line('menu_department')?></li>

            <?php } ?>

        </ol>

        <?php 

                    $usertype = $this->session->userdata("usertype");

                    if(permissionChecker('classes_add')) {

                ?>

                    <h5 class="page-header">

                        <a href="<?php echo base_url('classes/add') ?>" class="pull-right btn btn-success text-white">

                            <i class="fa fa-plus"></i> 

                            <?=$this->lang->line('add_title')?>

                        </a>

                    </h5>

                <?php } ?>

    </div><!-- /.box-header -->

    

    <!-- form start -->

    <div class="box-body">

    <br/>

        <div class="row">

            <div class="col-sm-12">



              



                <div id="hide-table">

                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">

                        <thead>

                            <tr>

                                <th class="col-lg-1"><?=$this->lang->line('slno')?></th>

                                <th class="col-lg-2"><?=$this->lang->line('classes_name')?></th>

                                

                                <th class="col-lg-3"><?=$this->lang->line('teacher_name')?></th>

                                <th class="col-lg-2"><?=$this->lang->line('classes_note')?></th>

                                 <?php if(permissionChecker('classes_edit') || permissionChecker('classes_delete')) { ?>

                                <th class="col-lg-2"><?=$this->lang->line('action')?></th>

                                <?php } ?>

                            </tr>

                        </thead>

                        <tbody>

                            <?php if(!empty($classes)) {$i = 1; foreach($classes as $class) { ?>

                                <tr>

                                    <td data-title="<?=$this->lang->line('slno')?>">

                                        <?php echo $i; ?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('classes_name')?>">

                                        <?php echo $class->classes; ?>

                                    </td>

                                

                                    

                        

                                    <td data-title="<?=$this->lang->line('teacher_name')?>">

                                        <?=isset($teachers[$class->teacherID]) ? $teachers[$class->teacherID] : '' ?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('classes_note')?>">

                                        <?php echo $class->note; ?>

                                    </td>

                                    <?php if(permissionChecker('classes_edit') || permissionChecker('classes_delete')) { ?>

                                    <td data-title="<?=$this->lang->line('action')?>">

                                        <?php echo btn_edit('classes/edit/'.$class->classesID, $this->lang->line('edit')) ?>

                                        <?php echo btn_delete('classes/delete/'.$class->classesID, $this->lang->line('delete')) ?>

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

