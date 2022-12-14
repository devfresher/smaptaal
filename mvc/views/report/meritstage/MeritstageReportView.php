<div class="box">
    <div class="box-header">       
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"> <?=$this->lang->line('menu_meritstagereport')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="form-group col-sm-4" id="examDiv">
                    <label><?=$this->lang->line("meritstagereport_exam")?><span class="text-red"> * </span></label>
                    <?php
                        $examsArray['0'] = $this->lang->line("meritstagereport_please_select");
                        if(!empty($exams)) {
                            foreach ($exams as $exam) {
                                $examsArray[$exam->examID] = $exam->exam;
                            }
                        }
                        echo form_dropdown("examID", $examsArray, set_value("examID"), "id='examID' class='form-control select2'");
                     ?>
                </div>

                <div class="form-group col-sm-4" id="classesDiv">
                    <label><?=$this->lang->line("meritstagereport_class")?><span class="text-red"> * </span></label>
                    <?php
                        $classesArray['0'] = $this->lang->line("meritstagereport_please_select");
                        if(!empty($classes)) {
                            foreach ($classes as $classaKey => $classa) {
                                $classesArray[$classa->classesID] = $classa->classes;
                            }
                        }
                        echo form_dropdown("classesID", $classesArray, set_value("classesID"), "id='classesID' class='form-control select2'");
                     ?>
                </div>

                <div class="form-group col-sm-4" id="sectionDiv">
                    <label><?=$this->lang->line("meritstagereport_section")?></label>
                    <?php
                        $sectionArray[0] = $this->lang->line("meritstagereport_please_select");
                        echo form_dropdown("sectionID", $sectionArray, set_value("sectionID"), "id='sectionID' class='form-control select2'");
                     ?>
                </div>

                <div class="col-sm-4">
                    <button id="get_meritstagereport" class="btn btn-success" style="margin-top:23px;"> <?=$this->lang->line("meritstagereport_submit")?></button>
                </div>

            </div>

        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<div id="load_meritstagereport"></div>


<script type="text/javascript">
    
    function printDiv(divID) {
        var oldPage = document.body.innerHTML;
        var divElements = document.getElementById(divID).innerHTML;
        document.body.innerHTML = "<html><head><title></title></head><body>" + divElements + "</body>";
        window.print();
        document.body.innerHTML = oldPage;
        window.location.reload();
    }

    $('.select2').select2();

    $(function(){
        $("#examID").val(0);
        $("#classesID").val(0);
        $("#sectionID").val(0);
        $('#examDiv').show('slow');
        $('#classesDiv').hide('slow');
        $('#sectionDiv').hide('slow');
    });

    $(document).on('change',"#examID", function() {
        $('#load_meritstagereport').html("");
        $('#classesDiv').show('slow');
        var examID = $(this).val();
        if(examID == '0') {
            $('#classesDiv').hide('slow');
            $('#sectionDiv').hide('slow');
            $('#classesID').val('0');
            $('#sectionID').html('<option value="0">'+"<?=$this->lang->line("meritstagereport_please_select")?>"+'</option>');
            $('#sectionID').val('0');
        }
    });

    $(document).on('change',"#classesID", function() {
        $('#load_meritstagereport').html("");
        $('#sectionDiv').show('slow');
        var classesID = $(this).val();
        if(classesID == '0') {
            $('#sectionDiv').hide('slow');
            $('#studentDiv').hide('slow');
            $('#sectionID').html('<option value="0">'+"<?=$this->lang->line("meritstagereport_please_select")?>"+'</option>');
            $('#sectionID').val('0');
        } else {
            $.ajax({
                type: 'POST',
                url: "<?=base_url('meritstagereport/getSection')?>",
                data: {"classesID" : classesID},
                dataType: "html",
                success: function(data) {
                   $('#sectionID').html(data);
                }
            });
        }
    });


    $(document).on('change',"#sectionID", function() {
        $('#load_meritstagereport').html("");
    });

    $(document).on('click','#get_meritstagereport', function() {
        $('#load_meritstagereport').html("");
        var error = 0;
        var field = {
            'examID'      : $('#examID').val(), 
            'classesID'   : $('#classesID').val(), 
            'sectionID'   : $('#sectionID').val(), 
        };

        if (field['examID'] == 0) {
            $('#examDiv').addClass('has-error');
            error++;
        } else {
            $('#examDiv').removeClass('has-error');
        }

        if (field['classesID'] == 0) {
            $('#classesDiv').addClass('has-error');
            error++;
        } else {
            $('#classesDiv').removeClass('has-error');
        }

        if (error == 0) {
            makingPostDataPreviousofAjaxCall(field);
        }
    });

    function makingPostDataPreviousofAjaxCall(field) {
        passData = field;
        ajaxCall(passData);
    }

    function ajaxCall(passData) {
        $.ajax({
            type: 'POST',
            url: "<?=base_url('meritstagereport/getmeritstagereport')?>",
            data: passData,
            dataType: "html",
            success: function(data) {
                var response = JSON.parse(data);
                renderLoder(response, passData);
            }
        });
    }

    function renderLoder(response, passData) {
        if(response.status) {
            $('#load_meritstagereport').html(response.render);
            for (var key in passData) {
                if (passData.hasOwnProperty(key)) {
                    $('#'+key).parent().removeClass('has-error');
                }
            }
        } else {
            for (var key in passData) {
                if (passData.hasOwnProperty(key)) {
                    $('#'+key).parent().removeClass('has-error');
                }
            }

            for (var key in response) {
                if (response.hasOwnProperty(key)) {
                    $('#'+key).parent().addClass('has-error');
                }
            }
        }
    }
</script>


