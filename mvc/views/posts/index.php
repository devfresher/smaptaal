
<div class="box">
    <div class="box-header">
        <ol class="breadcrumb col-md-6">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li class="active"><?=$this->lang->line('menu_posts')?></li>
        </ol>
        <?php
                   if(permissionChecker('posts_add')) {
                ?>
                    <h5 class="page-header">
                        <a href="<?php echo base_url('posts/add') ?>" class="pull-right btn btn-success text-white">
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
                <div id="hide-table">
                    <table id="example1" class="table table-striped table-bordered table-hover dataTable no-footer">
                        <thead>
                            <tr>
                                <th class="col-sm-1"><?=$this->lang->line('slno')?></th>
                                <th class="col-sm-5"><?=$this->lang->line('posts_title')?></th>
                                <th class="col-sm-2"><?=$this->lang->line('posts_categories')?></th>
                                 <th class="col-sm-2"><?=$this->lang->line('posts_date')?></th>
                                <?php if(permissionChecker('posts_edit') || permissionChecker('posts_delete')) { ?>
                                    <th class="col-sm-2"><?=$this->lang->line('action')?></th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($posts)) {$i = 1; foreach($posts as $post) { ?>
                                <tr>
                                    <td data-title="<?=$this->lang->line('slno')?>">
                                        <?php echo $i; ?>
                                    </td>
                                    <td data-title="<?=$this->lang->line('posts_title')?>">
                                        <?=namesorting($post->title, 40)?>
                                        <?php if($post->status == 2 || $post->status == 4) {
                                                echo '<b>--'. ucfirst(pageStatus($post->status, FALSE)).'</b>';
                                            }
                                        ?>
                                        <?php if(strtotime($post->publish_date) > strtotime(date('Y-m-d H:i:s'))) {
                                                echo '<b>--' .$this->lang->line('posts_scheduled').'</b>';
                                            }
                                        ?>

                                        <?php if($post->visibility == 2 || $post->visibility == 3) {
                                                echo '<b>--';
                                                pageVisibility($post->visibility, FALSE);
                                                echo '</b>';
                                            }
                                        ?>
                                    </td>
                                    
                                    <td data-title="<?=$this->lang->line('posts_categories')?>">
                                        <?php
                                            if(isset($posts_categorys[$post->postsID])) {
                                                $j = 1;
                                                foreach ($posts_categorys[$post->postsID] as $category) {
                                                    if(isset($posts_categories[$category])) {
                                                        if($j > 1) {
                                                            echo ', '.$posts_categories[$category];
                                                        } else {
                                                            echo $posts_categories[$category];
                                                        }
                                                        $j++;
                                                    }
                                                }
                                            }
                                        ?>
                                    </td>

                                    <td data-title="<?=$this->lang->line('posts_date')?>">
                                        <?=date('d M Y h:i A', strtotime($post->publish_date))?>
                                    </td>
                                  <?php if(permissionChecker('posts_edit') || permissionChecker('posts_delete')) { ?>
                                        <td data-title="<?=$this->lang->line('action')?>">
                                            <?php echo btn_edit('posts/edit/'.$post->postsID, $this->lang->line('edit')) ?>
                                            <?php echo btn_delete('posts/delete/'.$post->postsID, $this->lang->line('delete')) ?>
                                        </td>
                                  <?php } ?>
                                </tr>
                            <?php $i++; }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>