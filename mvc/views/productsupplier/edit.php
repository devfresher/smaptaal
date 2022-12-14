
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("productsupplier/index")?>"><?=$this->lang->line('menu_productsupplier')?></a></li>
            <li class="active"><?=$this->lang->line('menu_edit')?> <?=$this->lang->line('menu_productsupplier')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-10">
                <form class="form-horizontal" role="form" method="post">
                    <div class="form-group <?=form_error('productsuppliercompanyname') ? 'has-error' : '' ?>" >
                        <label for="productsuppliercompanyname" class="col-sm-2 control-label">
                            <?=$this->lang->line("productsupplier_companyname")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="productsuppliercompanyname" name="productsuppliercompanyname" value="<?=set_value('productsuppliercompanyname', $productsupplier->productsuppliercompanyname)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productsuppliercompanyname'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('productsuppliername') ? 'has-error' : '' ?>" >
                        <label for="productsuppliername" class="col-sm-2 control-label">
                            <?=$this->lang->line("productsupplier_suppliername")?> <span class="text-red">*</span>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="productsuppliername" name="productsuppliername" value="<?=set_value('productsuppliername', $productsupplier->productsuppliername)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productsuppliername'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('productsupplieremail') ? 'has-error' : '' ?>" >
                        <label for="productsupplieremail" class="col-sm-2 control-label">
                            <?=$this->lang->line("productsupplier_email")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="productsupplieremail" name="productsupplieremail" value="<?=set_value('productsupplieremail', $productsupplier->productsupplieremail)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productsupplieremail'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('productsupplierphone') ? 'has-error' : '' ?>" >
                        <label for="productsupplierphone" class="col-sm-2 control-label">
                            <?=$this->lang->line("productsupplier_phone")?>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="productsupplierphone" name="productsupplierphone" value="<?=set_value('productsupplierphone', $productsupplier->productsupplierphone)?>" >
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productsupplierphone'); ?>
                        </span>
                    </div>

                    <div class="form-group <?=form_error('productsupplieraddress') ? 'has-error' : '' ?>" >
                        <label for="productsupplieraddress" class="col-sm-2 control-label">
                            <?=$this->lang->line("productsupplier_address")?>
                        </label>
                        <div class="col-sm-6">
                            <textarea class="form-control" style="resize:none;" id="productsupplieraddress" name="productsupplieraddress"><?=set_value('productsupplieraddress', $productsupplier->productsupplieraddress)?></textarea>
                        </div>
                        <span class="col-sm-4 control-label">
                            <?php echo form_error('productsupplieraddress'); ?>
                        </span>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-8">
                            <input type="submit" class="btn btn-success" value="<?=$this->lang->line("update_supplier")?>" >
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

</script>
