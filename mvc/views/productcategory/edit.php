
<div class="box">
    <div class="box-header">
         <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("productcategory/index")?>"><?=$this->lang->line('menu_productcategory')?></a></li>
            <li class="active"><?=$this->lang->line('menu_edit')?> <?=$this->lang->line('menu_productcategory')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">
                <form class="form-horizontal" role="form" method="post">
                    <div class="form-group <?=form_error('productcategoryname') ? 'has-error' : '' ?>">
                        <label for="productcategoryname" class="col-sm-2 control-label">
                            <?=$this->lang->line("productcategory_name")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="productcategoryname" name="productcategoryname" value="<?=set_value('productcategoryname', $productcategory->productcategoryname)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productcategoryname'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('productcategorydesc') ? 'has-error' : '' ?>" >
                        <label for="productcategorydesc" class="col-sm-2 control-label">
                            <?=$this->lang->line("productcategory_desc")?>
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" style="resize:none;" id="productcategorydesc" name="productcategorydesc"><?=set_value('productcategorydesc', $productcategory->productcategorydesc)?></textarea>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productcategorydesc'); ?>
                        </span>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_productcategory")?>" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>