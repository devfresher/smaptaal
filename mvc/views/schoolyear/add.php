
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("schoolyear/index")?>"><?=$this->lang->line('menu_schoolyear')?></a></li>
            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_schoolyear')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">

                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                    <?php 
                        if(form_error('schoolyear')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="schoolyear" class="col-sm-2 control-label">
                            <?=$this->lang->line("schoolyear_schoolyear")?>
                            <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="schoolyear" name="schoolyear" value="<?=set_value('schoolyear')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('schoolyear'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('schoolyeartitle')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="schoolyeartitle" class="col-sm-2 control-label">
                            <?php 
                                if($siteinfos->school_type == 'classbase') {
                                    echo $this->lang->line("schoolyear_schoolyeartitle");
                                } else {
                                     echo $this->lang->line("schoolyear_semestertitle");
                                }
                            ?>

                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="schoolyeartitle" name="schoolyeartitle" value="<?=set_value('schoolyeartitle')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('schoolyeartitle'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('startingdate')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="startingdate" class="col-sm-2 control-label">
                            <?=$this->lang->line("schoolyear_startingdate")?>
                            <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="startingdate" name="startingdate" value="<?=set_value('startingdate')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('startingdate'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('endingdate')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="endingdate" class="col-sm-2 control-label">
                            <?=$this->lang->line("schoolyear_endingdate")?>
                            <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="endingdate" name="endingdate" value="<?=set_value('endingdate')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('endingdate'); ?>
                        </span>
                    </div>

                    <?php if($siteinfos->school_type ==  'semesterbase') { ?>
                    <?php 
                        if(form_error('semestercode')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="semestercode" class="col-sm-2 control-label">
                            <?=$this->lang->line("schoolyear_semestercode")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="semestercode" name="semestercode" value="<?=set_value('semestercode')?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('semestercode'); ?>
                        </span>
                    </div>
                    <?php } ?>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("add_schoolyear")?>" >
                        </div>
                    </div>

                </form>

            </div><!-- /col-sm-8 -->
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#startingdate').datepicker()
    $('#endingdate').datepicker()
</script>