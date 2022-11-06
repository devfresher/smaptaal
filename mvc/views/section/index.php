

<div class="box">

    <div class="box-header">
<?php

if($this->session->flashdata('failed')!==null){
    echo "<div  class='alert alert-danger'>The Session already exists</div>";
}
?>
        <ol class="breadcrumb col-md-8">

            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>

            <li class="active"><?=$this->lang->line('menu_section')?></li>
        
          

        </ol>



        <h5 class="page-header">

                    <?php if(permissionChecker('section_add')) { ?>

                        <a href="<?php echo base_url('section/add') ?>" class="pull-right btn btn-success text-white">

                            <i class="fa fa-plus"></i>

                            <?=$this->lang->line('add_title')?>

                        </a>

                    <?php } ?>

                    <?php if($this->session->userdata('usertypeID') != 3) { ?>

                        <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12 drop-marg">

                            <?php

                                $array = array("0" => $this->lang->line("section_select_class")); 

                                if(!empty($classes)) {

                                    foreach ($classes as $classa) {

                                        $array[$classa->classesID] = $classa->classes;

                                    }

                                }

                                echo form_dropdown("classesID", $array, set_value("classesID", $set), "id='classesID' class='pull-right form-control select2'");

                            ?>

                        </div>

                    <?php } ?>

                </h5>

    </div><!-- /.box-header -->

    <!-- form start -->

    <div class="box-body">

        <div class="row">

            <div class="col-sm-12">

                



                <div id="hide-table">

                    <table id="example1" class="table dataTable no-footer">

                        <thead>

                            <tr>

                                <th><?=$this->lang->line('slno')?></th>

                                <th><?=$this->lang->line('section_name')?></th>

                                <th><?=$this->lang->line('section_category')?></th>

                                <th><?=$this->lang->line('section_capacity')?></th>

                                <th><?=$this->lang->line('section_teacher_name')?></th>

                                <th><?=$this->lang->line('section_note')?></th>

                                <?php if(permissionChecker('section_edit') || permissionChecker('section_delete')) { ?>

                                <th><?=$this->lang->line('action')?></th>

                                <?php } ?>

                            </tr>

                        </thead>

                        <tbody>

                            <?php if(!empty($sections)) {$i = 1; foreach($sections as $section) { ?>

                                <tr>

                                    <td data-title="<?=$this->lang->line('slno')?>">

                                        <?php echo $i; ?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('section_name')?>">

                                        <?php echo $section->section; ?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('section_category')?>">

                                        <?php echo $section->category; ?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('section_capacity')?>">

                                        <?php echo $section->capacity; ?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('section_teacher_name')?>">

                                        <?=isset($teachers[$section->teacherID]) ? $teachers[$section->teacherID] : ''?>

                                    </td>

                                    <td data-title="<?=$this->lang->line('section_note')?>">

                                        <?php echo $section->note; ?>

                                    </td>

                                    <?php if(permissionChecker('section_edit') || permissionChecker('section_delete')) { ?>

                                    <td data-title="<?=$this->lang->line('action')?>">

                                        <?php echo btn_edit('section/edit/'.$section->sectionID.'/'.$set, $this->lang->line('edit')) ?>

                                        <?php echo btn_delete('section/delete/'.$section->sectionID.'/'.$set, $this->lang->line('delete')) ?>

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

    $('#classesID').change(function() {

        var classesID = $(this).val();

        if(classesID == 0) {

            $('#hide-table').hide();

        } else {

            $.ajax({

                type: 'POST',

                url: "<?=base_url('section/section_list')?>",

                data: "id=" + classesID,

                dataType: "html",

                success: function(data) {

                    window.location.href = data;

                }

            });

        }

    });

</script>



<script>

$( ".select2" ).select2( { placeholder: "", maximumSelectionSize: 6 } );

</script>

