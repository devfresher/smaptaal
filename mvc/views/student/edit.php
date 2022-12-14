
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("student/index/$set")?>"><?=$this->lang->line('menu_student')?></a></li>
            <li class="active"><?=$this->lang->line('menu_edit')?> <?=$this->lang->line('menu_student')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <form  role="form" method="post" enctype="multipart/form-data">
            <div class="col-sm-8 col-md-8" style="border-right: 1px solid #423e3e38;">
                <div class="col-md-12"> 
                    <h4><b> Student Informations Upda </b></h4><br/>
                </div>
<!------------------------ Start first clumn ----------------->
               <div class="col-md-6">
                    <?php 
                        if(form_error('name')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group'>";
                    ?>
                        <label for="name_id" class=" control-label">
                            <?=$this->lang->line("student_name")?> <span class="text-red">*</span>
                        </label>
                            <input type="text" class="form-control" id="name_id" name="name" value="<?=set_value('name', $student->name)?>" >
                      
                        <span class=" control-label">
                            <?php echo form_error('name'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('guargianID')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="guargianID" class="control-label">
                            <?=$this->lang->line("student_guargian")?>
                        </label>
                            <?php
                                $array = array('0' => $this->lang->line('student_select_guargian'));
                                foreach ($parents as $parent) {
                                    $parentsemail = '';
                                    if($parent->email) {
                                        $parentsemail = " (" . $parent->email ." )";
                                    }
                                    $array[$parent->parentsID] = $parent->name.$parentsemail;
                                }
                                echo form_dropdown("guargianID", $array, set_value("guargianID", $student->parentID), "id='guargianID' class='form-control guargianID select2'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('guargianID'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('dob')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="dob" class="control-label">
                            <?=$this->lang->line("student_dob")?>
                        </label>
                            <?php $dob = ''; if($student->dob) { $dob = date("d-m-Y", strtotime($student->dob)); }  ?>
                            <input type="text" class="form-control" id="dob" name="dob" value="<?=set_value('dob', $dob)?>" >
                        
                        <span class="control-label">
                            <?php echo form_error('dob'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('sex')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="sex" class="control-label">
                            <?=$this->lang->line("student_sex")?>
                        </label>
                            <?php 
                                echo form_dropdown("sex", array($this->lang->line('student_sex_male') => $this->lang->line('student_sex_male'), $this->lang->line('student_sex_female') => $this->lang->line('student_sex_female')), set_value("sex", $student->sex), "id='sex' class='form-control'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('sex'); ?>
                        </span>

                    </div>

                    <?php 
                        if(form_error('bloodgroup')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="bloodgroup" class="control-label">
                            <?=$this->lang->line("student_bloodgroup")?>
                        </label>
                            <?php 
                                $bloodArray = array(
                                    '0' => $this->lang->line('student_select_bloodgroup'),
                                    'A+' => 'A+',
                                    'A-' => 'A-',
                                    'B+' => 'B+',
                                    'B-' => 'B-',
                                    'O+' => 'O+',
                                    'O-' => 'O-',
                                    'AB+' => 'AB+',
                                    'AB-' => 'AB-'
                                );
                                echo form_dropdown("bloodgroup", $bloodArray, set_value("bloodgroup", $student->bloodgroup), "id='bloodgroup' class='form-control select2'"); 
                            ?>
                        <span class="control-label">
                            <?php echo form_error('bloodgroup'); ?>
                        </span>
                    </div>

                   
                    <?php 
                        if(form_error('religion')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="religion" class="control-label">
                            <?=$this->lang->line("student_religion")?>
                        </label>
                            <input type="text" class="form-control" id="religion" name="religion" value="<?=set_value('religion', $student->religion)?>" >
                         <span class="control-label">
                            <?php echo form_error('religion'); ?>
                        </span>
                    </div>

                  

                    <?php 
                        if(form_error('phone')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group'>";
                    ?>
                        <label for="phone" class="control-label">
                            <?=$this->lang->line("student_phone")?>
                        </label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?=set_value('phone', $student->phone)?>" >
                      
                        <span class="control-label">
                            <?php echo form_error('phone'); ?>
                        </span>
                    </div>

                    

                    <?php 
                        if(form_error('state')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="state" class="control-label">
                            <?=$this->lang->line("student_state")?>
                        </label>
                            <input type="text" class="form-control" id="state" name="state" value="<?=set_value('state', $student->state)?>" >
                      
                        <span class="control-label">
                            <?php echo form_error('state'); ?>
                        </span>
                    </div>
                    <?php 
                        if(form_error('country')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="country" class="control-label">
                            <?=$this->lang->line("student_country")?>
                        </label>
                            <?php
                                $country['0'] = $this->lang->line('student_select_country');  
                                foreach ($allcountry as $allcountryKey => $allcountryit) {
                                    $country[$allcountryKey] = $allcountryit;
                                }
                            ?>
                            <?php 
                                echo form_dropdown("country", $country, set_value("country", $student->country), "id='country' class='form-control select2'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('country'); ?>
                        </span>
                    </div>
                   
                </div>
            <!--------------end first clumn --------------->
            <!--------------Start secound clumn --------------->
                <div class="col-md-6">
                    
               

                    <?php 
                        if(form_error('classesID')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group'>";
                    ?>
                        <label for="classesID" class="control-label">
                            <?=$this->lang->line("student_classes")?> <span class="text-red">*</span>
                        </label>
                            <?php
                                $classArray = array(0 => $this->lang->line("student_select_class"));
                                foreach ($classes as $classa) {
                                    $classArray[$classa->classesID] = $classa->classes;
                                }
                                echo form_dropdown("classesID", $classArray, set_value("classesID", $student->srclassesID), "id='classesID' class='form-control select2'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('classesID'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('sectionID')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="sectionID" class="control-label">
                            <?=$this->lang->line("student_section")?> <span class="text-red">*</span>
                        </label>
                            <?php
                                $array = array(0 => $this->lang->line("student_select_section"));
                                foreach ($sections as $section) {
                                    $array[$section->sectionID] = $section->section;
                                }
                                echo form_dropdown("sectionID", $array, set_value("sectionID", $student->srsectionID), "id='sectionID' class='form-control select2'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('sectionID'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('studentGroupID') ? ' has-error' : ''  ?>">
                        <label for="studentGroupID" class="control-label">
                            <?=$this->lang->line("student_studentgroup")?>
                        </label>
                            <?php
                            $groupArray = array(0 => $this->lang->line("student_select_studentgroup"));
                            if(!empty($studentgroups)) {
                                foreach ($studentgroups as $studentgroup) {
                                    $groupArray[$studentgroup->studentgroupID] = $studentgroup->group;
                                }
                            }
                            echo form_dropdown("studentGroupID", $groupArray, set_value("studentGroupID", $student->srstudentgroupID), "id='studentGroupID' class='form-control select2'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('studentGroupID'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('optionalSubjectID') ? ' has-error' : ''  ?>">
                        <label for="optionalSubjectID" class="control-label">
                            <?=$this->lang->line("student_optionalsubject")?>
                        </label>
                            <?php
                            $optionalSubjectArray = array(0 => $this->lang->line("student_select_optionalsubject"));
                            if($optionalSubjects != "empty") {
                                foreach ($optionalSubjects as $optionalSubject) {
                                    $optionalSubjectArray[$optionalSubject->subjectID] = $optionalSubject->subject;
                                }
                            }

                            echo form_dropdown("optionalSubjectID", $optionalSubjectArray, set_value("optionalSubjectID", $student->sroptionalsubjectID), "id='optionalSubjectID' class='form-control select2'");
                            ?>
                        <span class="control-label">
                            <?php echo form_error('optionalSubjectID'); ?>
                        </span>
                    </div>

                    <?php 
                        if(form_error('registerNO')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="registerNO" class="control-label">
                            <?=$this->lang->line("student_registerNO")?> <span class="text-red">*</span>
                        </label>
                            <input type="text" class="form-control" id="registerNO" name="registerNO" value="<?=set_value('registerNO', $student->srregisterNO)?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('registerNO'); ?>
                        </span>

                    <?php 
                        if(form_error('roll')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group'>";
                    ?>
                        <label for="roll" class="control-label">
                            <?=$this->lang->line("student_roll")?> <span class="text-red">*</span>
                        </label>
                            <input type="text" class="form-control" id="roll" name="roll" value="<?=set_value('roll', $student->srroll)?>" >
                     
                        <span class="control-label">
                            <?php echo form_error('roll'); ?>
                        </span>
                    </div>

                    <?php
                        if(form_error('photo'))
                            echo "<div class='form-group has-error' >";
                        else
                            echo "<div class='form-group'>";
                    ?>
                        <label for="photo" class="control-label">
                            <?=$this->lang->line("student_photo")?>
                        </label>
                            <div class="input-group image-preview">
                                <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                                        <span class="fa fa-remove"></span>
                                        <?=$this->lang->line('student_clear')?>
                                    </button>
                                    <div class="btn btn-success image-preview-input">
                                        <span class="fa fa-repeat"></span>
                                        <span class="image-preview-input-title">
                                        <?=$this->lang->line('student_file_browse')?></span>
                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/>
                                    </div>
                                </span>
                        </div>

                        <span>
                            <?php echo form_error('photo'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('extraCurricularActivities') ? ' has-error' : ''  ?>">
                        <label for="extraCurricularActivities" class="control-label">
                            <?=$this->lang->line("student_extracurricularactivities")?>
                        </label>
                            <input type="text" class="form-control" id="extraCurricularActivities" name="extraCurricularActivities" value="<?=set_value('extraCurricularActivities', $student->extracurricularactivities)?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('extraCurricularActivities'); ?>
                        </span>

                    <div class="form-group <?=form_error('remarks') ? ' has-error' : ''  ?>">
                        <label for="remarks" class="control-label">
                            <?=$this->lang->line("student_remarks")?>
                        </label>
                            <input type="text" class="form-control" id="remarks" name="remarks" value="<?=set_value('remarks', $student->remarks)?>" >
                        </div>
                        <span class="control-label">
                            <?php echo form_error('remarks'); ?>
                        </span>

                </div>

                <div class="col-md-12">
                 <?php 
                        if(form_error('address')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group' >";
                    ?>
                        <label for="address" class="control-label">
                            <?=$this->lang->line("student_address")?>
                        </label>
                            <textarea type="text" class="form-control" id="address" name="address" value="<?=set_value('address', $student->address)?>" ></textarea>
                     
                        <span class="control-label">
                            <?php echo form_error('address'); ?>
                        </span>
                    </div>
                </div>
            </div> <!-- col-sm-8 -->
        <!-------------- start third clumn ------------->
            <div class="col-md-4">
              <?php 
                        if(form_error('username')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group'>";
                    ?>
                        <label for="username" class="control-label">
                            <?=$this->lang->line("student_username")?> <span class="text-red">*</span>
                        </label>
                            <input type="text" class="form-control" id="username" name="username" value="<?=set_value('username', $student->username)?>" >
                       
                         <span class="control-label">
                            <?php echo form_error('username'); ?>
                        </span>
                    </div>
                    <?php 
                        if(form_error('email')) 
                            echo "<div class='form-group has-error' >";
                        else     
                            echo "<div class='form-group'>";
                    ?>
                        <label for="email" class="control-label">
                            <?=$this->lang->line("student_email")?>
                        </label>
                            <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email', $student->email)?>" >
                        
                        <span class="control-label">
                            <?php echo form_error('email'); ?>
                        </span>
                    </div>
                  <!-------------- End third clumn ------------->
            </div>
            <div class="col-md-12">
               <div class="form-group">
                        <div class="col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_student")?>" >
                        </div>
                    </div>
            </div>
         </form>
         
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<script type="text/javascript">
$( ".select2" ).select2();
$('#dob').datepicker({ startView: 2 });

$('#username').keyup(function() {
    $(this).val($(this).val().replace(/\s/g, ''));
});

$('#classesID').change(function(event) {
    var classesID = $(this).val();
    if(classesID === '0') {
        $('#classesID').val(0);
    } else {
        $.ajax({
            type: 'POST',
            url: "<?=base_url('student/sectioncall')?>",
            data: "id=" + classesID,
            dataType: "html",
            success: function(data) {
               $('#sectionID').html(data);
            }
        });

        $.ajax({
            type: 'POST',
            url: "<?=base_url('student/optionalsubjectcall')?>",
            data: "id=" + classesID,
            dataType: "html",
            success: function(data2) {
                $('#optionalSubjectID').html(data2);
            }
        });
    }
});

$(document).on('click', '#close-preview', function(){ 
    $('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
        function () {
           $('.image-preview').popover('show');
           $('.content').css('padding-bottom', '130px');
        }, 
         function () {
           $('.image-preview').popover('hide');
           $('.content').css('padding-bottom', '20px');
        }
    );    
});

$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
        type:"button",
        text: 'x',
        id: 'close-preview',
        style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
        trigger:'manual',
        html:true,
        title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
        content: "There's no image",
        placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
        $('.image-preview').attr("data-content","").popover('hide');
        $('.image-preview-filename').val("");
        $('.image-preview-clear').hide();
        $('.image-preview-input input:file').val("");
        $(".image-preview-input-title").text("<?=$this->lang->line('student_file_browse')?>"); 
    }); 
    // Create the preview image
    $(".image-preview-input input:file").change(function (){     
        var img = $('<img/>', {
            id: 'dynamic',
            width:250,
            height:200,
            overflow:'hidden'
        });      
        var file = this.files[0];
        var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
            $(".image-preview-input-title").text("<?=$this->lang->line('student_file_browse')?>");
            $(".image-preview-clear").show();
            $(".image-preview-filename").val(file.name);            
            img.attr('src', e.target.result);
            $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            $('.content').css('padding-bottom', '130px');
        }        
        reader.readAsDataURL(file);
    });  
});


</script>
