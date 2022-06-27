<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<!--  -->
<h1>Employee Detail Information</h1>
<?= view("partial/flashmessage"); ?>
<?php
  if (!count($emp)) {
  ?>
  <div class="alert alert-info" role="alert">Employee not found</div>
  <?php
  } else {
  ?>
  <!-- personal information start -->
<div class="d-flex justify-content-between">
        <h4>Personal Information:</h4>
        <button id="editBtn" class="btn btn-primary btn-lg">Edit</button>
</div>
  <fieldset id="formcontainer" disabled>
      <?php echo form_open('employee/details'); ?>
      <?php echo form_hidden('id', $emp['id']); ?>
<div class="table-responsive">
   <table class="table table-striped table-bordered table-hover table-responsive">
          <tr class="success">
          <th>Employee ID</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
		  </tr>


          <tr class="primary">
          <td> 
              <input type="submit" value="Update" class="btn btn-primary">
              <input type="button" value="Cancel" class="btn btn-secondary" id="cancelBtn">
         </td>
          </tr>
      </tbody>
   </table>
   </div>
<?php echo form_close(); ?>
</fieldset>
<!-- personal information  end-->
<!-- address start -->
<div class="d-flex justify-content-between">
        <h4>Employee Address:</h4>
        <button id="editBtn" class="btn btn-primary btn-lg">Edit</button>
</div>
  <fieldset id="formcontainer">
      <?php echo form_open('employee/address'); ?>
      <?php echo form_hidden('id', $emp['id']); ?>
      <div class="row">
        <div class="col-6">
            <h4>Permanent Address:</h4>
        <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover table-responsive">
          <tr class="success">
          <th>Address 1</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
		  </tr>
          <tr class="success">
          <th>Address 2</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
		  </tr>
          <tr class="success">
          <th>Village</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
		  </tr>
          <tr class="success">
          <th>Postname</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
		  </tr>


          <tr class="primary">
          <td> 
              <input type="submit" value="Update" class="btn btn-primary">
              <input type="button" value="Cancel" class="btn btn-secondary" id="cancelBtn">
         </td>
          </tr>
      </tbody>
   </table>
   </div>
        </div>
        <div class="col-6">
        <h4>Present Address:</h4>
        <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover table-responsive">
          <tr class="success">
          <th>Employee ID</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
		  </tr>
          <tr class="primary">
          <td> 
              <input type="submit" value="Add" class="btn btn-primary">
              <input type="button" value="Cancel" class="btn btn-secondary" id="cancelBtn">
         </td>
          </tr>
      </tbody>
   </table>
   </div>
        </div>
      </div>


<?php echo form_close(); ?>
</fieldset>
<!-- address end -->

<!-- education start -->
<div class="d-flex justify-content-between">
        <h4>Education:</h4>
        <div>
        <button id="addBtn" class="btn btn-primary btn-lg">+</button>        
        </div>
</div>
<table class="table table-primary">
    <thead>
        <tr>
            <th>Level</th>
            <th>Institute</th>
            <th>Board</th>
            <th>major</th>
            <th>Year</th>
            <th>Marks/CGPA</th>
            <th>start year</th>
            <th>end year</th>
            <th>Action</th>
        </tr>
        <tr>
            <td>SSC</td>
        </tr>
        <tr>
            <td>hsc</td>
        </tr>
    </thead>
</table>
  <fieldset id="formcontainer">
      <?php echo form_open('employee/details'); ?>
      <?php echo form_hidden('id', $emp['id']); ?>
<div class="table-responsive">
   <table class="table table-striped table-bordered table-hover table-responsive">
          <tr class="success">
          <th>Level</th>
		 </tr>		  
		  <tr class="primary">
          <td>
            <select name="level" id="" class="form-control">
                <option value="ssc">select</option>
                <option value="ssc">SSC</option>
                <option value="hsc">HSC</option>
                <option value="hsc">B.Com</option>
                <option value="hsc">B.S</option>
                <option value="hsc">B.A.</option>
            </select>
          </td>
		  </tr>
          <tr class="success">
          <th>Institute</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="institute" class="form-control" value=""></td>
		  </tr>

          <tr class="primary">
          <td> 
              <input type="submit" value="Update" class="btn btn-primary">
              <input type="button" value="Cancel" class="btn btn-secondary" id="cancelBtn">
         </td>
          </tr>
      </tbody>
   </table>
   </div>
<?php echo form_close(); ?>
</fieldset>
<!-- education end -->

 <?php

  }
      ?>
<!--  -->
<?= $this->endSection() ?>

<?= $this->Section('scripts') ?>
<script>
$(document).ready(function() {
$("#editBtn").click(function(){
    // alert(5)
    $t = $(this);
    $("#formcontainer").prop('disabled', false);
    $t.hide(200);
});
//cancel button click
    $('#cancelBtn').click(function(){
        $("#formcontainer").prop('disabled', true);
        $("#editBtn").show(200);
    });

});
</script>
<?= $this->endSection() ?>
