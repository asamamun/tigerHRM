   
<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("tiger/partial/flashmessage"); ?>


   <!-- /.content -->
   
   <section class="content-header">
        <h1 style="padding:7px; height:45px;" class='headtitlebackgroudgradient'>
            Grade 
            <small>Admin Panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Employee Grade Configuration</a></li>

        </ol>
    </section>
<div class='col-md-12'>
    <div class="col-md-12" style="background-color:#FFFFFF">
        <section class="content">
		<?php echo form_open('tiger/grade/add',['class' => 'form-horizontal','id' => 'grform']); ?>
			<div class="Formcontainer">
            
                
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
					
                        <div class="form-group">
                            <label class="control-label col-md-3">Grade ID</label>
                            <div class="col-md-9">
                                <input name="gradeid" placeholder="Grade ID here." class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label class="control-label col-md-3">Grade Name</label>
                            <div class="col-md-9">
                                <input name="gradename" placeholder="Grade Name here." class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label col-md-3">Basic</label>
                            <div class="col-md-9">
                                <input name="basic" id="basicnm" placeholder="Basic here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name1"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">House Rent</label>
                            <div class="col-md-9">
                                <input name="houserent" id="housnum" placeholder="House Rent here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name2"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Medical Allowance</label>
                            <div class="col-md-9">
                                <input name="medical" id="mnum" placeholder="Medical Allowance here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name3"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Other</label>
                            <div class="col-md-9">
                                <input name="other" id="othnum"  placeholder="OTHER here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name4"></span>
                            </div>
                        </div>

                    </div>
                <div class="pull-right" style="padding-right:20px;">  
                <button type="submit" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button"  onclick="hideForm()" class="btn btn-danger" >Cancel</button>
                </div>  
                <?php echo form_close(); ?>
		</div>
        
                
                <?= $this->endSection(); ?>