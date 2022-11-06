<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title><?=$this->lang->line('panel_title')?></title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link rel="SHORTCUT ICON" href="<?=base_url("uploads/images/$siteinfos->photo")?>" />

        <link rel="stylesheet" href="<?=base_url('assets/pace/pace.css')?>">

        <script type="text/javascript" src="<?php echo base_url('assets/limpids/jquery.min.js'); ?>"></script>
        <!-- <script type="text/javascript" src="<?php echo base_url('assets/slimScroll/jquery.slimscroll.min.js'); ?>"></script> -->

        <script type="text/javascript" src="<?php echo base_url('assets/toastr/toastr.min.js'); ?>"></script>

<!-- import #zmmtg-root css   Zoom -->
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.7/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.7/css/react-select.css" />
      
        

        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url('assets/bootstrap/bootstrap.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/fonts/font-awesome.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/fonts/icomoon.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/fonts/ini-icon.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>" rel="stylesheet">

        <link id="headStyleCSSLink" href="<?php echo base_url($backendThemePath.'/style.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/limpids/hidetable.css'); ?>" rel="stylesheet">

        <link id="headlimpidsCSSLink" href="<?php echo base_url($backendThemePath.'/limpids.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/limpids/responsive.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/toastr/toastr.min.css'); ?>" rel="stylesheet">

        <link href="<?php echo base_url('assets/limpids/mailandmedia.css'); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url('assets/datatables/buttons.dataTables.min.css'); ?>" >

        <link rel="stylesheet" href="<?php echo base_url('assets/limpids/combined.css'); ?>" >
        <link rel="stylesheet" href="<?php echo base_url('assets/ajaxloder/ajaxloder.css'); ?>" >

        <?php
            if(isset($headerassets)) {
                foreach ($headerassets as $assetstype => $headerasset) {
                    if($assetstype == 'css') {
                      if(!empty($headerasset)) {
                        foreach ($headerasset as $keycss => $css) {
                          echo '<link rel="stylesheet" href="'.base_url($css).'">'."\n";
                        }
                      }
                    } elseif($assetstype == 'js') {
                      if(!empty($headerasset)) {
                        foreach ($headerasset as $keyjs => $js) {
                          echo '<script type="text/javascript" src="'.base_url($js).'"></script>'."\n";
                        }
                      }
                    }
                }
            }
        ?>

        <script type="text/javascript">
          $(window).load(function() {
            $(".se-pre-con").fadeOut("slow");;
          });
        </script>
    </head>
    <body class="skin-blue fuelux">
        <div class="se-pre-con"></div>
        <div id="loading">
            <img src="<?=base_url('assets/ajaxloder/loader.gif')?>" width="150" height="150"/>
        </div>
