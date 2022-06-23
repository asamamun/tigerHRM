<?= $this->extend('layouts/default'); ?>

<?= $this->section('content'); ?>
<h1>Company Setup</h1>
<?= view("partial/flashmessage"); ?>
<?php
  if (!count($allsettings)) {
  ?>
  <div class="alert alert-info" role="alert">Missing data!</div>
  <?php
  } else {
  ?>
  <fieldset id="companycontainer" disabled>
      <?php echo form_open('settings'); ?>
      <?php echo form_hidden('id', $allsettings['id']); ?>
<div class="table-responsive">
   <table class="table table-striped table-bordered table-hover table-responsive">
      <tr>
	  <th><h4>Comapany Details:</h4></th>
      </tr>   
          <tr class="success">
          <th>Company Name</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyname" class="form-control" value="<?php echo $allsettings['companyname']; ?>"></td>
		  </tr>
           <tr class="success">
          <th>Company address1</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyaddress1" class="form-control" value="<?php echo $allsettings['companyaddress1']; ?>"></td>
          
		  </tr>
		   <tr class="success">
          <th>Company address2</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="companyaddress2" class="form-control" value="<?php echo $allsettings['companyaddress2']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Telephone Number</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="tel" class="form-control" value="<?php echo $allsettings['tel']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Email Address</th>
		 </tr>		  
		  <tr class="primary">
          <td><input type="text" name="email" class="form-control" value="<?php echo $allsettings['email']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Web Address</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="web" class="form-control" value="<?php echo $allsettings['web']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Trade License</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="tradeli" class="form-control" value="<?php echo $allsettings['tradeli']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Owner Name</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="ownername" class="form-control" value="<?php echo $allsettings['ownername']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Tin Number</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="tin" class="form-control" value="<?php echo $allsettings['tin']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Establishment Date</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="establishmentdate" class="form-control" value="<?php echo $allsettings['establishmentdate']; ?>"></td>
         
		  </tr>
		   <tr class="success">
          <th>Alias</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="alias" class="form-control" value="<?php echo $allsettings['alias']; ?>"></td>
		  </tr>
		   <tr class="success">
          <th>Company Type</th>
		 </tr>
		  
		  <tr class="primary">
          <td><input type="text" name="companytype" class="form-control" value="<?php echo $allsettings['companytype']; ?>"></td>
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
<button id="editBtn" class="btn btn-primary btn-lg">Edit</button>
 <?php

  }
      ?>
   



<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
$(document).ready(function() {
$("#editBtn").click(function(){
    $t = $(this);
    $("#companycontainer").prop('disabled', false);
    $t.hide(200);
});
//cancel button click
    $('#cancelBtn').click(function(){
        $("#companycontainer").prop('disabled', true);
        $("#editBtn").show(200);
    });

});
</script>
        

<?= $this->endSection(); ?>