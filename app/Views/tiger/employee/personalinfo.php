<div class="d-flex justify-content-between bg-primary">
    <button class="btn btn-primary">
        <h4>Personal Information:</h4>
    </button>
    <button id="editBtn" class="btn btn-primary btn-lg"><i class="fa-solid fa-pen-to-square"></i></button>
</div>
<fieldset id="formcontainer" disabled>
    <?php echo form_open('tiger/employee/details'); ?>
    <?php echo form_hidden('id', $emp['id']); ?>
    <div class="row ms-2">

        <div class="row col-6">
            <div class="col-md-6"><label class="labels">Frist Name</label><input type="text" name="fname" class="form-control" value="<?php echo $emp['fname']; ?>"></div>
            <div class="col-md-6"><label class="labels">Last Name</label><input type="text" name="lname" class="form-control" value="<?php echo $emp['fname']; ?>"></div>
            <div class="col-md-6"><label class="labels">Employee ID</label><input type="text" name="empid" class="form-control" value="<?php echo $emp['empid']; ?>"></div>
            <div class="col-md-6"><label class="labels">Middle Name</label><input type="text" name="mname" class="form-control" value="<?php echo $emp['mname']; ?>"></div>
            <div class="col-md-6"><label class="labels">DLN</label><input type="text" name="dln" class="form-control" value="<?php echo $emp['dln']; ?>"></div>
            <div class="col-md-6"><label class="labels">DL Expiry Date</label><input type="text" name="dln" class="form-control" value="<?php echo $emp['dl_expdate']; ?>"></div>
            <div class="col-md-6"><label class="labels">Gender</label><input type="text" name="gender" class="form-control" value="<?php echo $emp['gender']; ?>"></div>
            <div class="col-md-6"><label class="labels">Date of Birth</label><input type="text" name="dob" class="form-control" value="<?php echo $emp['dob']; ?>"></div>
            <div class="col-md-6"><label class="labels">Marital Status</label><input type="text" name="maritalstatus" class="form-control" value="<?php echo $emp['maritalstatus']; ?>"></div>
            <div class="col-md-6"><label class="labels">Phone</label><input type="text" name="phone" class="form-control" value="<?php echo $emp['phone']; ?>"></div>
            <div class="col-md-6"><label class="labels">Homephone</label><input type="text" name="homephone" class="form-control" value="<?php echo $emp['homephone']; ?>"></div>
            <div class="col-md-6"><label class="labels">Email</label><input type="text" name="email" class="form-control" value="<?php echo $emp['email']; ?>"></div>

            <div class="d-grid btn">
               
                    <input type="submit" value="Update" class="btn btn-primary">
               
            </div>
        </div>


        <div class="row col-6">
                <div class="col-md-6"><label class="labels">Blood</label><input type="text" name="blood" class="form-control" value="<?php echo $emp['blood']; ?>"></div>
                <div class="col-md-6"><label class="labels">TIN</label><input type="text" name="tin" class="form-control" value="<?php echo $emp['tin']; ?>"></div>
                <div class="col-md-6"><label class="labels">NID</label><input type="text" name="nid" class="form-control" value="<?php echo $emp['nid']; ?>"></div>
                <div class="col-md-6"><label class="labels">Father's Name</label><input type="text" name="fathersname" class="form-control" value="<?php echo $emp['fathersname']; ?>"></div>
                <div class="col-md-6"><label class="labels">Mother's Name</label><input type="text" name="mothersname" class="form-control" value="<?php echo $emp['mothersname']; ?>"></div>
                <div class="col-md-6"><label class="labels">Bank Name</label><input type="text" name="bankname" class="form-control" value="<?php echo $emp['bankname']; ?>"></div>
                <div class="col-md-6"><label class="labels">Account Number</label><input type="text" name="bankaccno" class="form-control" value="<?php echo $emp['bankaccno']; ?>"></div>
                <div class="col-md-6"><label class="labels">Account Type</label><input type="text" name="bankacctype" class="form-control" value="<?php echo $emp['bankacctype']; ?>"></div>
                <div class="col-md-6"><label class="labels">Plant ID</label><input type="text" name="plantid" class="form-control" value="<?php echo $emp['plantid']; ?>"></div>
                <div class="col-md-6"><label class="labels">Department ID</label><input type="text" name="deptid" class="form-control" value="<?php echo $emp['deptid']; ?>"></div>
                <div class="col-md-6"><label class="labels">Section ID</label><input type="text" name="secid" class="form-control" value="<?php echo $emp['secid']; ?>"></div>
                <div class="col-md-6"><label class="labels">Designation ID</label><input type="text" name="desigid" class="form-control" value="<?php echo $emp['desigid']; ?>"></div>



                <div class=" d-grid btn">
                   
                        <input type="button" value="Cancel" class="btn btn-secondary" id="cancelBtn">
                    
                </div>
            </div>

            <?php echo form_close(); ?>
    </div>

</fieldset>