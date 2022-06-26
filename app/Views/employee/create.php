<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Employee</li>
            </ol>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="row m-b-10">
            <div class="col-12">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>employee/add" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>employee/Disciplinary" class="text-white"><i class="" aria-hidden="true"></i> Disciplinary List</a></button>
            </div>
        </div>
    </div>

<!-- form -->
    <?php echo form_open('employee/add',['class' => 'row g-3']); ?>
<div class="col-12">
    <label for="inputAddress" class="form-label">Card No</label>
    <input type="text" class="form-control" name="empid" placeholder="Card Number/Employee ID">
  </div>
  <div class="col-md-4">
    <label for="fname" class="form-label">First Name</label>
    <input type="text" class="form-control" name="fname" id="fname">
  </div>
  <div class="col-md-4">
    <label for="mname" class="form-label">Middle Name</label>
    <input type="text" class="form-control" name="mname" id="mname">
  </div>
  <div class="col-md-4">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" name="lname" placeholder="Last Name" id="lastname">
  </div>
  <div class="col-12">
    <label for="department" class="form-label">Department</label>
    <?php echo form_dropdown('deptid',$dept,'',['class' => 'form-control']) ?>
  </div>
  <div class="col-12">
    <label for="section" class="form-label">Section</label>
    <?php echo form_dropdown('secid',$sec,'',['class' => 'form-control']) ?>
  </div>
  <div class="col-12">
    <label for="designation" class="form-label">Designation</label>
    <?php echo form_dropdown('desigid',$desig,'',['class' => 'form-control']) ?>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
<?php echo form_close(); ?>
<!-- form end -->
</div>
<?= $this->endSection(); ?>