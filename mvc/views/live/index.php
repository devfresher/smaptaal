 
 
 <div class='box'>
 
 <div class='box-header'>
 
 
        <ol class="breadcrumb col-md-6">

            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>

            <li class="active"><?=$this->lang->line('panel_title')?></li>
                
        </ol>
        
</div>
    <br/>

     <div class="box-body">
         <div class="row">
             <div class="col-sm-12">

                 <?php if(($siteinfos->school_year == $this->session->userdata('defaultschoolyearID')) || ($this->session->userdata('usertypeID') == 1) || ($this->session->userdata('usertypeID') == 5)) { ?>
                     <?php if(permissionChecker('student_add')) { ?>
                         <h5 class="page-header">
                             <a href="<?php echo base_url('liveclass/add') ?>">
                                 <i class="fa fa-plus"></i>
                                 <?=$this->lang->line('add_title')?>
                             </a>
                         </h5>
                     <?php } ?>
                 <?php } ?>

                 <div id="hide-table">
                     <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                         <thead>
                         <tr>
                             <th class="col-sm-2"><?=$this->lang->line('slno')?></th>

                              <th class="col-sm-2"><?=$this->lang->line('topic')?></th>

                              <th class="col-sm-2"><?=$this->lang->line('duration')?></th>

                              <th class="col-sm-2"><?=$this->lang->line('created_at')?></th>

                             <th class="col-sm-2"><?=$this->lang->line('action')?></th>

                         </tr>
                         </thead>
                         <tbody>
                         <?php if(count($lives)) {$i = 1; foreach($lives as $live) { ?>
                             <tr>
                                 <td data-title="<?=$this->lang->line('slno')?>">
                                     <?php echo $i; ?>
                                 </td>

                                 <td data-title="<?=$this->lang->line('topic')?>">
                                     <?php echo $live->topic; ?>
                                 </td>

                                 <td data-title="<?=$this->lang->line('duration')?>">
                                     <?php echo $live->duration; ?>mins
                                 </td>

                                 <td data-title="<?=$this->lang->line('created_at')?>">
                                     <?php echo $live->created_at; ?>
                                 </td>



                                 <td data-title="<?=$this->lang->line('action')?>">
                                     <?php echo btn_view('liveclass/view/'.$live->id, $this->lang->line('view')) ?>
                                 </td>



                             </tr>
                             <?php $i++; }} ?>
                         </tbody>
                     </table>
                 </div>

             </div>
         </div>
     </div>

<div>

<script type='text/javascript'>
$(document).ready(function() {
    $(".neat").select2({

})
});

</script>