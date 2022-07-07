   
<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("tiger/partial/flashmessage"); ?>


   <!-- /.content -->
   
   <section class="content-header">
        <h1 style=" text-align:center;" class='headtitlebackgroudgradient' >
            Edit grade
            
        </h1>
    
    </section>
<div class='col-md-12'>
    <div class="col-md-12" style="background-color:#FFFFFF">
        <section class="content">
		<?php echo form_open('grade/add',['class' => 'form-horizontal','id' => 'grform']); ?>
			<div class="Formcontainer">
            
                
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
					
                        <div class="form-group">
                            <label class="control-label col-md-3">Grade ID</label>
                            <div class="col-md-12">
                                <input name="gradeid" placeholder="Grade ID here." value="<?=$emp_grade['gradeid']?>" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label class="control-label col-md-3">Grade Name</label>
                            <div class="col-md-12">
                                <input name="gradename" placeholder="Grade Name here." value="<?=$emp_grade['gradename']?>" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label class="control-label col-md-3">Basic</label>
                            <div class="col-md-12">
                                <input name="basic" id="basicnm" placeholder="Basic here." value="<?=$emp_grade['basic']?>" class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name1"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">House Rent</label>
                            <div class="col-md-12">
                                <input name="houserent" id="housnum" value="<?=$emp_grade['houserent']?>" placeholder="House Rent here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name2"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Medical Allowance</label>
                            <div class="col-md-12">
                                <input name="medical" id="mnum" value="<?=$emp_grade['medical']?>"  placeholder="Medical Allowance here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name3"></span>
                            </div>
                        </div>
						<div class="form-group">
                            <label class="control-label col-md-3">Other</label>
                            <div class="col-md-12">
                                <input name="other" id="othnum" value="<?=$emp_grade['other']?>"   placeholder="OTHER here." class="form-control" type="text">
                                <span class="help-block"></span>
								<span id="name4"></span>
                            </div>
                        </div>

                    </div>
                <div class="pull-right" style="padding-right:20px;">  
                <button type="submit" id="update"  class="btn btn-primary">Update</button>
                <button type="button"   class="btn btn-danger" >Cancel</button>
                </div>  
                
	</div>
    <?php echo form_close(); ?>
        
                
                <?= $this->endSection(); ?>