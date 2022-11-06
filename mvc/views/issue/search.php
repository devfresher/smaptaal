
<div class="box">
    <div class="box-header">
      
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_issue')?></li>
        </ol>
         <?php if(permissionChecker('issue_add')) { ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('issue/add') ?>" class="pull-right btn btn-success text-white">
                            <i class="fa fa-plus"></i> 
                            <?=$this->lang->line('add_title')?>
                        </a>
                    </h5>
                <?php } ?>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">

               

                <div class="col-lg-6 col-lg-offset-3 list-group">
                    <div class="list-group-item list-group-item-warning">
                        <form style="" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">  
                              <div class='form-group' >
                                <label for="lid" class="col-sm-3 control-label">
                                    <?=$this->lang->line("issue_lid")?> <span class="text-red">*</span>
                                </label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lid" name="lid" value="<?=set_value('lid')?>" >
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" class="btn btn-success iss-mar" value="<?=$this->lang->line('issue_search')?>" >
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>