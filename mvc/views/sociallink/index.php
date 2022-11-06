<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-8">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('panel_title')?></li>
        </ol>
        <h5 class="page-header">
                    <?php if(permissionChecker('sociallink_add')) { ?>
                        <a href="<?php echo base_url('sociallink/add') ?>" class="pull-right btn btn-success text-white">
                            <i class="fa fa-plus"></i>
                            <?=$this->lang->line('add_title')?>
                        </a>
                    <?php } ?>
                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12 drop-marg">
                        <?php
                            $array = array("0" => $this->lang->line("sociallink_role_select"));
                            if(!empty($usertypes)) {
                                foreach ($usertypes as $usertype) {
                                    $array[$usertype->usertypeID] = $usertype->usertype;
                                }
                            }
                            echo form_dropdown("usertypeID", $array, set_value("usertypeID", $uriID), "id='usertypeID' class='form-control select2'");
                        ?>
                    </div>
                </h5>
    </div><!-- /.box-header -->
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
               
                <?php if($uriID > 0) { ?>
                    <div id="hide-table">
                        <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                            <thead>
                                <tr>
                                    <th class="col-sm-1"><?=$this->lang->line('slno')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_photo')?></th>
                                    <th class="col-sm-4"><?=$this->lang->line('sociallink_user')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_facebook')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_twitter')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_linkedin')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_googleplus')?></th>
                                    <?php if(permissionChecker('sociallink_edit') || permissionChecker('sociallink_delete')) { ?>
                                        <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($sociallinks)) {$i = 1; foreach($sociallinks as $sociallink) { ?>
                                    <tr>
                                        <td data-title="<?=$this->lang->line('slno')?>">
                                            <?php echo $i; ?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_photo')?>">
                                            <?php 
                                                if(isset($alluser[$sociallink->usertypeID][$sociallink->userID])) {
                                                    $photo = $alluser[$sociallink->usertypeID][$sociallink->userID]->photo;
                                                } else {
                                                    $photo = 'default.png';
                                                }

                                                echo profileimage($photo);
                                            ?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_user')?>">
                                            <?=isset($alluser[$sociallink->usertypeID][$sociallink->userID]) ? $alluser[$sociallink->usertypeID][$sociallink->userID]->name : ''?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_facebook')?>">
                                            <?=namesorting($sociallink->facebook, 25)?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_twitter')?>">
                                            <?=namesorting($sociallink->twitter, 25)?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_linkedin')?>">
                                            <?=namesorting($sociallink->linkedin, 25)?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_googleplus')?>">
                                            <?=namesorting($sociallink->googleplus, 25)?>
                                        </td>
                                        <?php if(permissionChecker('sociallink_edit') || permissionChecker('sociallink_delete')) { ?>
                                            <td data-title="<?=$this->lang->line('action')?>">
                                                <?php echo btn_edit('sociallink/edit/'.$sociallink->sociallinkID, $this->lang->line('edit')) ?>
                                                <?php echo btn_delete('sociallink/delete/'.$sociallink->sociallinkID, $this->lang->line('delete')) ?>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php $i++; }} ?>
                            </tbody>
                        </table>
                    </div>
                <?php } else { ?> 
                    <div id="hide-table">
                        <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                            <thead>
                                <tr>
                                    <th class="col-sm-1"><?=$this->lang->line('slno')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_photo')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_role')?></th>
                                    <th class="col-sm-3"><?=$this->lang->line('sociallink_user')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_facebook')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_twitter')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_linkedin')?></th>
                                    <th class="col-sm-1"><?=$this->lang->line('sociallink_googleplus')?></th>
                                    <?php if(permissionChecker('sociallink_edit') || permissionChecker('sociallink_delete')) { ?>
                                        <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($sociallinks)) {$i = 1; foreach($sociallinks as $sociallink) { ?>
                                    <tr>
                                        <td data-title="<?=$this->lang->line('slno')?>">
                                            <?php echo $i; ?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_photo')?>">
                                            <?php 
                                                if(isset($alluser[$sociallink->usertypeID][$sociallink->userID])) {
                                                    $photo = $alluser[$sociallink->usertypeID][$sociallink->userID]->photo;
                                                } else {
                                                    $photo = 'default.png';
                                                }

                                                echo profileimage($photo);
                                            ?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_role')?>">
                                            <?=isset($roles[$sociallink->usertypeID]) ? $roles[$sociallink->usertypeID] : ""?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_user')?>">
                                            <?=isset($alluser[$sociallink->usertypeID][$sociallink->userID]) ? $alluser[$sociallink->usertypeID][$sociallink->userID]->name : ''?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_facebook')?>">
                                            <?=namesorting($sociallink->facebook, 20)?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_twitter')?>">
                                            <?=namesorting($sociallink->twitter, 20)?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_linkedin')?>">
                                            <?=namesorting($sociallink->linkedin, 20)?>
                                        </td>
                                        <td data-title="<?=$this->lang->line('sociallink_googleplus')?>">
                                            <?=namesorting($sociallink->googleplus, 20)?>
                                        </td>
                                        <?php if(permissionChecker('sociallink_edit') || permissionChecker('sociallink_delete')) { ?>
                                            <td data-title="<?=$this->lang->line('action')?>">
                                                <?php echo btn_edit('sociallink/edit/'.$sociallink->sociallinkID, $this->lang->line('edit')) ?>
                                                <?php echo btn_delete('sociallink/delete/'.$sociallink->sociallinkID, $this->lang->line('delete')) ?>
                                            </td>
                                        <?php } ?>
                                    </tr>
                                <?php $i++; }} ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<script>
    $('#usertypeID').select2();
    $('#usertypeID').change(function() {
        var usertypeID = $(this).val();
        url = "<?=base_url('sociallink/index/')?>";
        if(usertypeID == 0) {
            window.location.href = url;
        } else {
            window.location.href = url + usertypeID;
        }
    });
</script>