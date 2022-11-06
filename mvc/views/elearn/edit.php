

<div class="box">

<div class="box-header">      

    <ol class="breadcrumb">

        <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>

        <li><a href="<?=base_url("elearn/index")?>"><?=$this->lang->line('panel_title')?></a></li>

        <li class="active"> <?=$this->lang->line('e_lesson')?></li>

    </ol>

</div><!-- /.box-header -->

<!-- form start -->

<div class="box-body">

    <div class="row">

        <div class="col-sm-10">

            <form class="form-horizontal" role="form" method="post"  action='edit'>

            
            <?php 

                    if(form_error('term')) 

                        echo "<div class='form-group has-error' >";

                    else     

                        echo "<div class='form-group' >";

                    ?>

                    
                    </div>

                    <?php if(isset($this->data['hide'])){?>
                        <input type='hidden' name='elearn_id' value=<?=$this->data['hide']['id'] ?>>
                        <input type='hidden' name='class_id' value=<?=$this->data['hide']['class'] ?>>
                        <input type='hidden' name='term' value=<?=$this->data['hide']['term'] ?>>

                   <?php }?>




                                                                                    
                <?php 

                    if(form_error('topic')) 

                        echo "<div class='form-group has-error' >";

                    else     

                        echo "<div class='form-group' >";

                ?>

                    <label for="Topic" class="col-sm-2 control-label">

                        <?=$this->lang->line("subject_topic")?> <span class="text-red">*</span>

                    </label>

                    <div class="col-sm-6">

                        <input type="text" class="form-control" id="" name="topic" value="<?=set_value('topic')?>"required >

                    </div>

                    <span class="col-sm-4 control-label">

                        <?php echo form_error('topic'); ?>

                    </span>

                </div>


                                                <?php 

                                if(form_error('sub_topic')) 

                                    echo "<div class='form-group has-error' >";

                                else     

                                    echo "<div class='form-group' >";

                                ?>

                                <label for="Sub Topic" class="col-sm-2 control-label">

                                    <?=$this->lang->line("sub_topic")?> <span class="text-red">*</span>

                                </label>

                                <div class="col-sm-6">

                                    <input type="text" class="form-control" id="" name="sub_topic" value="<?=set_value('sub_topic')?>"required >

                                </div>

                                <span class="col-sm-4 control-label">

                                    <?php echo form_error('sub_topic'); ?>

                                </span>
</div>




                <?php

                    if(form_error('url'))

                        echo "<div class='form-group has-error' >";

                    else

                        echo "<div class='form-group' >";

                ?>

                    <label for="Youtube Url" class="col-sm-2 control-label">

                    <?=$this->lang->line("subject_url")?><span class="text-red">*</span>

                    </label>
                    
                    <div class="col-sm-6">

                        <textarea required style="resize:none;" class="form-control" id="" name="url"><?=set_value('url')?></textarea>

                    </div>

                    <span class="col-sm-4 control-label">

                        <?php echo form_error('url'); ?>

                    </span>

                </div>
                                              
                <div class="form-group">

                    <div class="col-sm-offset-2 col-sm-8">

                        <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_lesson")?>" >

                    </div>

                </div>



            </form>

        </div>    

    </div>

</div>

</div>



<script type="text/javascript">



</script>
<script>


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
</script>