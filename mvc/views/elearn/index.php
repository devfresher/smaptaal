<?php




?>


<div class="box header col-md-4" >

    <div class="box-header ">

        <ol class="breadcrumb">

        <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>

        </ol>
<br/>

        <?php 

            if(permissionChecker('exam_add')) {

        ?>

            <h5 class="page-header">

                <a href="<?php echo base_url('elearn/add') ?>" class="pull-right btn btn-success text-white">

                    <i class="fa fa-plus"></i> 

                    <?=$this->lang->line('add_title')?>

                </a>

            </h5>

        <?php } ?>



    </div><!-- /.box-header -->
                    
    <!-- form start -->

    <div class="box-body"><br/>

        <div class="row table-reponsive">

            <div class="col-md-6">   
                <div class='box-body'>
                        <div>

                                <div>

                    <?php
                    $attributes=array('id'=>'frm' ,'role'=>'form','method'=>'post','name'=>'e_learn','class'=>'form-horizontal');
                    echo form_open('elearn/check',$attributes);?>                        
                                                
    

            
<?php 

        if(form_error('term')) 

            echo "<div class='form-group has-error' >";

        else     

            echo "<div class='form-group' >";

        ?>

        <label for="term" class="col-sm-2 control-label">

        <?=$this->lang->line("subject_term")?><span class="text-red">*</span>

        </label>

        <div class="col-sm-6">

            <select class="form-control" id="term" name="term" required>
                <option value=''>Select Term</option>
                <option value='1'>First Term</option>
                <option value='2'>Second Term</option>
                <option value='3'>Third Term</option>
            </select>

        </div>

        <span class="col-sm-4 control-label">

            <?php echo form_error('url'); ?>

        </span>

        </div>




                                        <?php 

                    if(form_error('class')) 

                        echo "<div class='form-group has-error' >";

                    else     

                        echo "<div class='form-group' >";

                    ?>

                    <label for="Subject" class="col-sm-2 control-label">

                        <?=$this->lang->line("class")?> <span class="text-red">*</span>

                    </label>
                    <?php
                    
                        $claxes= $this->data['classes'];
						
                                            ?>
                    <div class="col-sm-6">
								
                           <?php  
						   
                           if($_SESSION['usertypeID']==3){  ?>
                          <select name='class' class='form-control' required id='claz'>
                            <option value=''>Select Class</option>
                            <option value=<?=$claxes->classesID; ?>> <?=$claxes->classes?></option>
                          <?php } else { ?>
                       <select name='class' class='form-control' required id='claz'>
                           <option value=''>Select Class</option>
						   
                           <?php foreach($claxes as $clax){ echo "<option value=$clax->classesID > $clax->classes </option>";} ?>
                            <?php } ?>
                       </select>
                          
                    </div>
                                           
                    <span class="col-sm-4 control-label">

                        <?php echo form_error('class'); ?>

                    </span>

                    </div>

                                           
                        <?php 

                        if(form_error('class')) 

                            echo "<div class='form-group has-error' >";

                        else     

                            echo "<div class='form-group' >";

                        ?>

                        <label for="Subject" class="col-sm-2 control-label">

                            <?=$this->lang->line("subject_name")?> <span class="text-red">*</span>

                        </label>

                        <div class="col-sm-6">

                        <select name='Subject' class='form-control' required id='subj'>
                            <option value=''>Select Subject</option>
                        </select>

                        </div>

                        <span class="col-sm-4 control-label">

                            <?php echo form_error('class'); ?>

                        </span>

                        </div>


   



    

</form>

</div>




                                </div>

                        </div>



                    </div>



            </div> <!-- col-sm-12 -->

        </div><!-- row -->

        <ol class='breadcrumb'> </ol>
<div class='row'>
<div id="hide_table" class='table-responsive'>

<table id="elearn" class="table table-striped table-responsive table-hover  no-footer">

    <thead>

        <tr>

            <th class=""><?=$this->lang->line('slno')?></th>

            <th class=""><?=$this->lang->line('subject_name')?></th>

            <th class=""><?=$this->lang->line('subject_topic')?></th>
            <th class=""><?=$this->lang->line('sub_topic')?></th>

            <th class=""><?=$this->lang->line('subject_url')?></th>

           
            <th class=''><?=$this->lang->line('watch')?></th>
            <?php
            if($this->session->userdata('usertypeID') == 1||$this->session->userdata('usertypeID')==2){
                echo "<th class ='col-lg-2'>Action</th>";
            }
            
            ?>
           

        </tr>

    </thead>

    <tbody id='add'>

       
    </tbody>

</table>

</div>
</div>



 
    </div><!-- Body -->
<div class='row m-2'><div id='lesonz' class='col-sm-8 embed-responsive embed-responsive-16by9-iframe-youtube'><iframe
src="" id='lexonz' allowfullscreen class='embed-responsive-iframe' style='width:100%;height:100%'>
</iframe></div></div>
</div><!-- /.box -->

</div>





<script type ='text/javascript'>
   $(document).ready(
       function(){
           
           $('#hide_table').css("display","none");
           $('#lesonz').css('display','none');
           
       }
   );


   $(document).ready(
       $('#claz').change(
        function(){
    var id=$('#claz').val();

     $.ajax({
       
       url:"<?=base_url()?>elearn/pk",
        type:'post',
       dataType:'html',
       data:{id:id},
       success:function(msg){
         $('#subj').html(msg);

       }
     });
     return false;
   }
       ),
  
   
  );


  $(document).ready(
      $('#subj').change(
          function(){
            var id=$('#subj').val();
            var tam =$('#term').val();
            

$.ajax({
  
  url:"<?=base_url()?>elearn/view",
   type:'post',
  dataType:'html',
  data:{id:id,term:tam},
  success:function(msg){
      console.log(msg);
    $('#add').html(msg);
    
    

  }
});
$('#hide_table').show();
return false;



             
          }
      )
  );

 

</script>
<script type='text/javascript'>

function jav(value){
    var view_elearn =value;
    
    $('#hide_table').hide();
    document.getElementById("lexonz").src = view_elearn;
    $('#lesonz').show();
   // $('#lesonz').html("<iframe width=\"420\" height=\"315\" src=\"http://www.youtube.com/embed/+"\\uche"+\frameborder=\"0\" allowfullscreen></iframe>");
    
  
}


</script>

<style>




.iframe-container {
  overflow: hidden;
  // Calculated from the aspect ration of the content (in case of 16:9 it is 9/16= 0.5625)
  padding-top: 56.25%;
  position: relative;
}
 

</style>