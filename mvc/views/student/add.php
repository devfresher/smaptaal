

<div class="box">

    <div class="box-header">

        <!-- <h3 class="box-title"><i class="fa icon-student"></i> <?=$this->lang->line('panel_title')?></h3> -->



        <ol class="breadcrumb">

            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>

            <li><a href="<?=base_url("student/index")?>"><?=$this->lang->line('menu_student')?></a></li>

            <li class="active"><?=$this->lang->line('menu_add')?> <?=$this->lang->line('menu_student')?></li>

        </ol>

    </div><!-- /.box-header -->

    <!-- form start -->

    <div class="box-body">

        <div class="row">

          <form  role="form" method="post" enctype="multipart/form-data">

            <div class="col-sm-8 col-md-8" style="border-right: 1px solid #423e3e38;">

            <div class="col-md-12"> 

                <h4><b> Student Informations </b></h4><br/>

            </div>

                <div class="col-md-6">               

                     <?php

                        if(form_error('name'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group'>";

                    ?>

                        <label for="name_id" class="control-label">

                            <?=$this->lang->line("student_name")?> <span class="text-red">*</span>

                        </label>                        

                            <input type="text" class="form-control" id="name_id" name="name" value="<?=set_value('name')?>" >                     

                        <span class="control-label">

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

                                        $array[$parent->parentsID] = $parent->father_name.$parentsemail;

                                    }

                                    echo form_dropdown("guargianID", $array, set_value("guargianID"), "id='guargianID' class='form-control guargianID select2'");

                                ?>

                        <span control-label>

                            <?php echo form_error('guargianID'); ?>

                        </span>

                    </div>

                    <?php

                        if(form_error('dob'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group'>";

                    ?>

                        <label for="dob" class="control-label">

                            <?=$this->lang->line("student_dob")?>

                        </label>

                            <input type="text" class="form-control" id="dob" name="dob" value="<?=set_value('dob')?>" >

                        

                        <span class=" control-label">

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

                                echo form_dropdown("sex", array($this->lang->line('student_sex_male') => $this->lang->line('student_sex_male'), $this->lang->line('student_sex_female') => $this->lang->line('student_sex_female')), set_value("sex"), "id='sex' class='form-control'");

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

                                echo form_dropdown("bloodgroup", $bloodArray, set_value("bloodgroup"), "id='bloodgroup' class='form-control select2'");

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

                            <input type="text" class="form-control" id="religion" name="religion" value="<?=set_value('religion')?>" >

                        <span class="control-label">

                            <?php echo form_error('religion'); ?>

                        </span>

                    </div>



                    

                    <?php

                        if(form_error('phone'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="phone" class="control-label">

                            <?=$this->lang->line("student_phone")?>

                        </label>

                            <input type="text" class="form-control" id="phone" name="phone" value="<?=set_value('phone')?>" >

                        

                        <span class="control-label">

                            <?php echo form_error('phone'); ?>

                        </span>

                    </div>



                     <div class="form-group <?=form_error('extraCurricularActivities') ? ' has-error' : ''  ?>">

                        <label for="extraCurricularActivities" class="control-label">

                            <?=$this->lang->line("student_extracurricularactivities")?>

                        </label>

                            <input type="text" class="form-control" id="extraCurricularActivities" name="extraCurricularActivities" value="<?=set_value('extraCurricularActivities')?>" >

                      

                        <span class=" control-label">

                            <?php echo form_error('extraCurricularActivities'); ?>

                        </span>

                    </div>



                    <div class="form-group <?=form_error('remarks') ? ' has-error' : ''  ?>">

                        <label for="remarks" class="control-label">

                            <?=$this->lang->line("student_remarks")?>

                        </label>

                            <input type="text" class="form-control" id="remarks" name="remarks" value="<?=set_value('remarks')?>" >

                       

                        <span class="control-label">

                            <?php echo form_error('remarks'); ?>

                        </span>

                    </div>

                </div>



        <!---------------------- Second Rows ----------------->

                <div class="col-md-6">

               

                    <?php

                        if(form_error('state'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="state" class="control-label">

                            <?=$this->lang->line("student_state")?>

                        </label>

                            <input type="text" class="form-control" id="state" name="state" value="<?=set_value('state')?>" >

                      

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

                                echo form_dropdown("country", $country, set_value("country"), "id='country' class='form-control select2'");

                            ?>

                        <span class="control-label">

                            <?php echo form_error('country'); ?>

                        </span>

                    </div>



                    <?php

                        if(form_error('classesID'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="classesID" class="control-label">

                            <?=$this->lang->line("student_classes")?> <span class="text-red">*</span>

                        </label>

                            <?php

                                $classArray = array(0 => $this->lang->line("student_select_class"));

                                foreach ($classes as $classa) {

                                    $classArray[$classa->classesID] = $classa->classes;

                                }

                                echo form_dropdown("classesID", $classArray, set_value("classesID"), "id='classesID' class='form-control select2'");

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

                                $sectionArray = array(0 => $this->lang->line("student_select_section"));

                                if($sections != "empty") {

                                    foreach ($sections as $section) {

                                        $sectionArray[$section->sectionID] = $section->section;

                                    }

                                }



                                $sID = 0;

                                if($sectionID == 0) {

                                    $sID = 0;

                                } else {

                                    $sID = $sectionID;

                                }



                                echo form_dropdown("sectionID", $sectionArray, set_value("sectionID", $sID), "id='sectionID' class='form-control select2'");

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

                                echo form_dropdown("studentGroupID", $groupArray, set_value("studentGroupID"), "id='studentGroupID' class='form-control select2'");

                            ?>

                        <span class=" control-label">

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



                            echo form_dropdown("optionalSubjectID", $optionalSubjectArray, set_value("optionalSubjectID", $optionalSubjectID), "id='optionalSubjectID' class='form-control select2'");

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

                            <input type="text" class="form-control" id="registerNO" name="registerNO" value="<?=set_value('registerNO')?>" >

                       

                        <span class="control-label">

                            <?php echo form_error('registerNO'); ?>

                        </span>

                    </div>



                    <?php

                        if(form_error('roll'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="roll" class="control-label">

                            <?=$this->lang->line("student_roll")?> <span class="text-red">*</span>

                        </label>

                            <input type="text" class="form-control" id="roll" name="roll" value="<?=set_value('roll')?>" >

                      

                        <span class="control-label">

                            <?php echo form_error('roll'); ?>

                        </span>

                    </div>

                 <?php

                        if(form_error('photo'))

                            echo "<div class='form-group has-error'>";

                        else

                            echo "<div class='form-group' >";

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

                                    <div class="btn btn-info image-preview-input">

                                        <span class="fa fa-repeat"></span>

                                        <span class="image-preview-input-title">

                                        <?=$this->lang->line('student_file_browse')?></span>

                                        <input type="file" accept="image/png, image/jpeg, image/gif" name="photo"/>

                                    </div>

                                </span>

                            </div>



                        <span class="">

                            <?php echo form_error('photo'); ?>

                        </span>

                    </div>

                    

                </div>

                <div class="col-md-12">

                     <?php

                        if(form_error('address'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group'>";

                    ?>

                        <label for="address" class="control-label">

                            <?=$this->lang->line("student_address")?>

                        </label>

                            <textarea type="text" class="form-control" id="address" name="address" value="<?=set_value('address')?>" ></textarea>

                       

                        <span class="control-label">

                            <?php echo form_error('address'); ?>

                        </span>

                    </div>

                </div>

            </div> <!-- col-sm-8 -->

            <div class="col-md-4">

             <h4><b> Login Informations </b></h4><br/>

                    <?php

                        if(form_error('email'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="email" class="control-label">

                            <?=$this->lang->line("student_email")?>

                        </label>

                            <input type="text" class="form-control" id="email" name="email" value="<?=set_value('email')?>" >

                        <span class="control-label">

                            <?php echo form_error('email'); ?>

                        </span>

                    </div>



                    <?php

                        if(form_error('username'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="username" class="control-label">

                            <?=$this->lang->line("student_username")?> <span class="text-red">*</span>

                        </label>

                            <input type="text" class="form-control" id="username" name="username" value="<?=set_value('username')?>" >

                       

                         <span class="control-label">

                            <?php echo form_error('username'); ?>

                        </span>

                    </div>



                    <?php

                        if(form_error('password'))

                            echo "<div class='form-group has-error' >";

                        else

                            echo "<div class='form-group' >";

                    ?>

                        <label for="password" class="control-label">

                            <?=$this->lang->line("student_password")?> <span class="text-red">*</span>

                        </label>

                            <input type="password" class="form-control" id="password" name="password" value="<?=set_value('password')?>" >

                       

                         <span class="control-label">

                            <?php echo form_error('password'); ?>

                        </span>

                    </div>



                    

            </div>

            <div class="col-md-12">

                <div class="form-group">

                    <div class="col-sm-8">

                        <button type="submit" class="btn btn-primary" value="<?=$this->lang->line("add_student")?>" ><span class="glyphicon glyphicon-saved"></span> <?=$this->lang->line("add_student")?> </button>

                    </div>

                </div>

                <div style="clear:both"></div><br/>

            <!-- <?php if ($siteinfos->note==1) { ?>

                    <div class="callout callout-danger">

                        <p><b>Note:</b> Create teacher, class, section before create a new student.</p>

                    </div>

                <?php } ?> -->

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

        $('#sectionID').val(0);

    } else {

        $.ajax({

            async: false,

            type: 'POST',

            url: "<?=base_url('student/sectioncall')?>",

            data: "id=" + classesID,

            dataType: "html",

            success: function(data) {

               $('#sectionID').html(data);

            }

        });



        $.ajax({

            async: false,

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

           $('.content').css('padding-bottom', '100px');

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

            $('.content').css('padding-bottom', '100px');

        }

        reader.readAsDataURL(file);

    });

});





</script>

