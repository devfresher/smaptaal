<div class="box">
    <div class="box-header">
      
        <ol class="breadcrumb">
            <li><a href="<?=base_url("dashboard/index")?>"><img src="<?php echo base_url('assets/icons/dashboard.png'); ?>" width="28"/> <?=$this->lang->line('menu_dashboard')?></a></li>
            <li><a href="<?=base_url("ebooks/index")?>"></i><?=$this->lang->line('menu_ebooks')?></a></li>
            <li class="active"><?=$this->lang->line('menu_view')?></li>
        </ol>
    </div><!-- /.box-header -->
    <!-- form start -->
    
    <!-- form start -->
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <div class="ebooks">
                    <div id="pdffile"></div>
                </div>
            </div> <!-- col-sm-12 -->
        </div><!-- row -->
    </div><!-- Body -->
</div><!-- /.box -->

<script type="text/javascript">
    var options = {
        pdfOpenParams: { view: 'Fit', pagemode: 'none', scrollbar: '1', toolbar: '1', statusbar: '1', messages: '1', navpanes: '1' }
    };

    PDFObject.embed("<?=base_url('uploads/ebooks/'.$ebooks->file)?>", "#pdffile");
</script>

<style>
    #pdffile embed {
        width: 100% !important;
        height: 900px !important;
    }
</style>