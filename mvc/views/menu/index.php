
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active">Menu Management</li>
        </ol>
        <h5 class="page-header">
                <a href="<?php echo base_url('menu/add') ?>" class="pull-right btn btn-success text-white">
                    <i class="fa fa-plus"></i>
                    Add Menu
                </a>
            </h5>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                 <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menu Name</th>
                                <th>Parent</th>
                                <th>Menu Link</th>
                                <th>Menu Icon</th>
                                <th>Menu Pull</th>
                                <th>Priority</th>
                                <th>Status</th>
                                <th class="col-lg-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($menus)) {$i = 1; foreach($menus as $menu) { ?>
                                <tr>
                                    <td data-title="">
                                        <?php echo $menu->menuID; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->menuName; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->parentID; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->link; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->icon; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->pullRight; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->priority; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo $menu->status; ?>
                                    </td>
                                    <td data-title="">
                                        <?php echo btn_sm_edit('menu/edit/'.$menu->menuID, 'Edit') ?>
                                        <?php echo btn_sm_delete('menu/delete/'.$menu->menuID, 'Delete') ?>
                                    </td>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>


            </div> <!-- col-sm-12 -->
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->
