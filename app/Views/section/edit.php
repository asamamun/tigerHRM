<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>
<!-- /.content -->

<?php echo form_open('section/update/'. $section['id']); ?>
<Section class="content-header">
        <h1 style="padding:7px; height:45px;" class='headtitlebackgroudgradient'>
            Section 
            <small>Admin Panel</small>
        </h1>
        
    </Section>
    <div class='col-md-12'>
        <div class="col-md-12" style="background-color:#FFFFFF">
            <Section class="content">
                <div class="formcontainer">
                    <form action="#" id="form" class="form-horizontal">
                        <input type="hidden" value="" name="secid"/> 
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Section Title</label>
                                <div class="col-md-12">
                                    <input name="name" value="<?=$section['name']?>" placeholder="Section Title here." class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-12">Description</label>
                                
                                <div class="col-md-12">
                                    <input name="secdesc" value="<?=$section['secdesc']?>" placeholder="Short Description here." class="form-control" type="text">
                                    <span class="help-block"></span>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="control-label col-md-3">Department</label>
                                <?php echo form_dropdown('deptid',$dept,'',['class' => 'form-control']) ?>
                                <div class="col-md-9">
                                    

                                    </select>
                                    <span class="help-block"></span>
                                </div>
                            </div>

                        </div>
                        <div class="pull-right" style="padding-right:20px;">  
                            <button type="submit" id="store"  class="btn btn-primary">Save</button>
                            <button type="button"  class="btn btn-danger" >Cancel</button>
                        </div>  
                    <?php echo form_close(); ?>
                </div>
                <?= $this->endSection(); ?>