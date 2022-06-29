<div class="d-flex justify-content-between bg-primary">
        <button class="btn btn-primary"><h4>Personal Information:</h4></button>
        <button id="editBtn" class="btn btn-primary btn-lg">Edit</button>
    </div>
    <fieldset id="formcontainer" disabled>
        <?php echo form_open('employee/details'); ?>
        <?php echo form_hidden('id', $emp['id']); ?>
        <div class="row">
            <div class="table-responsive col-6">
                <table class="table table-striped table-bordered table-hover table-responsive">
                    <tr class="success">
                        <th>Employee ID</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="empid" class="form-control" value="<?php echo $emp['empid']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Frist Name</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="fname" class="form-control" value="<?php echo $emp['fname']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Middle Name</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="mname" class="form-control" value="<?php echo $emp['mname']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Last Name</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="lname" class="form-control" value="<?php echo $emp['lname']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>DLN</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="dln" class="form-control" value="<?php echo $emp['dln']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>DL Expiry Date</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="dln" class="form-control" value="<?php echo $emp['dl_expdate']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Gender</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="gender" class="form-control" value="<?php echo $emp['gender']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Date of Birth</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="dob" class="form-control" value="<?php echo $emp['dob']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Marital Status</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="maritalstatus" class="form-control" value="<?php echo $emp['maritalstatus']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Phone</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="phone" class="form-control" value="<?php echo $emp['phone']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Homephone</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="homephone" class="form-control" value="<?php echo $emp['homephone']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Email</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="email" class="form-control" value="<?php echo $emp['email']; ?>"></td>
                    </tr>

                    <tr class="primary text-end">
                        <td>
                            <input type="submit" value="Update" class="btn btn-primary">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-responsive col-6">
                <table class="table table-striped table-bordered table-hover table-responsive">
                    <tr class="success">
                        <th>Blood</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="blood" class="form-control" value="<?php echo $emp['blood']; ?>"></td>
                    </tr>

                    <tr class="success">
                        <th>TIN</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="tin" class="form-control" value="<?php echo $emp['tin']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>NID</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="nid" class="form-control" value="<?php echo $emp['nid']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Father's Name</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="fathersname" class="form-control" value="<?php echo $emp['fathersname']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Mother's Name</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="mothersname" class="form-control" value="<?php echo $emp['mothersname']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Bank Name</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="bankname" class="form-control" value="<?php echo $emp['bankname']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Account Number</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="bankaccno" class="form-control" value="<?php echo $emp['bankaccno']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Account Type</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="bankacctype" class="form-control" value="<?php echo $emp['bankacctype']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Plant ID</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="plantid" class="form-control" value="<?php echo $emp['plantid']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Department ID</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="deptid" class="form-control" value="<?php echo $emp['deptid']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Section ID</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="secid" class="form-control" value="<?php echo $emp['secid']; ?>"></td>
                    </tr>
                    <tr class="success">
                        <th>Designation ID</th>
                    </tr>
                    <tr class="primary">
                        <td><input type="text" name="desigid" class="form-control" value="<?php echo $emp['desigid']; ?>"></td>
                    </tr>


                    <tr class="primary">
                        <td>
                            <input type="button" value="Cancel" class="btn btn-secondary text-end" id="cancelBtn">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <?php echo form_close(); ?>
        </div>
    </fieldset>