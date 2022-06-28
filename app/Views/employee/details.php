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
                            <td><input type="text" name="p_address1" class="form-control" value="<?php echo $empaddress['p_address1']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Address 2</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_address2" class="form-control" value="<?php echo $empaddress['p_address2']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Village</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_village" class="form-control" value="<?php echo $empaddress['p_village']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Postname</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_post_name" class="form-control" value="<?php echo $empaddress['p_post_name']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Post Code</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_post_code" class="form-control" value="<?php echo $empaddress['p_post_code']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>p_upazila</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_upazila" class="form-control" value="<?php echo $empaddress['p_upazila']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>p_dist</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_dist" class="form-control" value="<?php echo $empaddress['p_dist']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>p_country</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="p_country" class="form-control" value="<?php echo $empaddress['p_country']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>sameornot</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="sameornot" class="form-control" value="<?php echo $empaddress['p_country']; ?>"></td>
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
                            <th>Address 1</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_address1" class="form-control" value="<?php echo $empaddress['c_address1']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Address 2</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_address2" class="form-control" value="<?php echo $empaddress['c_address2']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Village</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_village" class="form-control" value="<?php echo $empaddress['c_village']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Postname</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_post_name" class="form-control" value="<?php echo $empaddress['c_post_name']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>Post Code</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_post_code" class="form-control" value="<?php echo $empaddress['c_post_code']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>c_upazila</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_upazila" class="form-control" value="<?php echo $empaddress['c_upazila']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>c_dist</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_dist" class="form-control" value="<?php echo $empaddress['c_dist']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>c_country</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="c_country" class="form-control" value="<?php echo $empaddress['c_country']; ?>"></td>
                        </tr>
                        <tr class="success">
                            <th>sameornot</th>
                        </tr>
                        <tr class="primary">
                            <td><input type="text" name="sameornot" class="form-control" value="<?php echo $empaddress['p_country']; ?>"></td>
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
            <button id="eduBtn" class="btn btn-primary btn-lg"><i class="fa-solid fa-circle-plus"></i></button>
        </div>
    </div>
    <fieldset id="educationcontainer">
        <?php echo form_open('education/add'); ?>
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
                            <option value="psc">PSC</option>
                            <option value="hsc">JSC/JDC</option>
                            <option value="ssc">SSC</option>
                            <option value="hsc">HSC</option>
                            <option value="hsc">Diploma</option>
                            <option value="hsc">Bachelor/Honors</option>
                            <option value="hsc">Masters</option>
                            <option value="hsc">PhD (Doctor of Philosophy)</option>
                        </select>
                    </td>
                </tr>
                <tr class="success">
                    <th>Institute</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="institute" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Borad</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="borad" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Major</th>
                </tr>
                <tr class="primary">
                    <td>
                        <select name="major" id="major" class="form-control">
                            <option value="Bachelor of Science (BSc)">Bachelor of Science (BSc)</option>
                            <option value="Bachelor of Arts (BA)">Bachelor of Arts (BA)</option>
                            <option value="Bachelor of Commerce (BCom)">Bachelor of Commerce (BCom)</option>
                            <option value="Bachelor of Commerce (Pass)">Bachelor of Commerce (Pass)</option>
                            <option value="Bachelor of Business Administration (BBA)">Bachelor of Business Administration (BBA)</option>
                            <option value="Bachelor of Medicine and Bachelor of Surgery(MBBS)">Bachelor of Medicine and Bachelor of Surgery(MBBS)</option>
                            <option value="Bachelor of Dental Surgery (BDS)">Bachelor of Dental Surgery (BDS)</option>
                            <option value="Bachelor of Architecture (B.Arch)">Bachelor of Architecture (B.Arch)</option>
                            <option value="Bachelor of Pharmacy (B.Pharm)">Bachelor of Pharmacy (B.Pharm)</option>
                            <option value="Bachelor of Education (B.Ed)">Bachelor of Education (B.Ed)</option>
                            <option value="Bachelor of Physical Education (BPEd)">Bachelor of Physical Education (BPEd)</option>
                            <option value="Bachelor of Law (LLB)">Bachelor of Law (LLB)</option>
                            <option value="Doctor of Veterinary Medicine (DVM)">Doctor of Veterinary Medicine (DVM)</option>
                            <option value="Bachelor of Social Science (BSS)" selected="selected">Bachelor of Social Science (BSS)</option>
                            <option value="Bachelor of Fine Arts (B.F.A)">Bachelor of Fine Arts (B.F.A)</option>
                            <option value="Bachelor of Business Studies (BBS)">Bachelor of Business Studies (BBS)</option>
                            <option value="Bachelor of Computer Application (BCA)">Bachelor of Computer Application (BCA)</option>
                            <option value="Fazil (Madrasah)">Fazil (Madrasah)</option>
                            <option value="Bachelor in Engineering (BEngg)">Bachelor in Engineering (BEngg)</option>
                            <option value="others" undefined="">Other</option>
                        </select>
                    </td>
                </tr>
                <tr class="success">
                    <th>Passing Year</th>
                </tr>
                <tr class="primary">
                    <td>
                        <select class="form-control" name="passingyear" id="passingyear">
                            <option value="-1">Year</option>
                            <option value="2027">2027</option>
                            <option value="2026">2026</option>
                            <option value="2025">2025</option>
                            <option value="2024">2024</option>
                            <option value="2023">2023</option>
                            <option value="2022" selected="">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                        </select>
                    </td>
                </tr>
                <tr class="success">
                    <th>Marks/CGPA</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="result" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Start Year</th>
                </tr>
                <tr class="primary">
                    <td><input type="date" name="startyear" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>End Year</th>
                </tr>
                <tr class="primary">
                    <td><input type="date" name="endyear" class="form-control" value=""></td>
                </tr>

                <tr class="primary">
                    <td>
                        <input type="submit" value="Save" class="btn btn-primary">
                        <input type="button" value="Cancel" class="btn btn-secondary" id="eduCancelBtn">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <?php echo form_close(); ?>
    </fieldset>
    <!-- education end -->
    <?php if($empeducation){ ?>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>Level</th>
                <th>Institute</th>
                <th>Board</th>
                <th>Major</th>
                <th>Passing Year</th>
                <th>Marks/CGPA</th>
                <th>Start year</th>
                <th>End year</th>
                <th>Action</th>
            </tr>
            <!-- <tr>
                <td>SSC</td>
            </tr>
            <tr>
                <td>hsc</td>
            </tr> -->
        </thead>
        <tbody>
        <?php
foreach($empeducation as $education){
    ?>
<tr>
    <td><?php echo $education['level'] ?></td>
    <td><?php echo $education['institute'] ?></td>
    <td><?php echo $education['board'] ?></td>
    <td><?php echo $education['major'] ?></td>
    <td><?php echo $education['year'] ?></td>
    <td><?php echo $education['score'] ?></td>
    <td><?php echo $education['start_date'] ?></td>
    <td><?php echo $education['end_date'] ?></td>
    <td>EDIT | DELETE</td>
</tr>
    <?php
}
?>
</tbody>
    </table>
    <?php } else { ?>
<strong>No education info found. Add Please</strong>
<?php } ?>
        


<?php

}
?>
<!--  -->
<?= $this->endSection() ?>

<?= $this->Section('scripts') ?>
<script>
    $(document).ready(function() {
$("#educationcontainer").hide();

        $("#editBtn").click(function() {
            // alert(5)
            $t = $(this);
            $("#formcontainer").prop('disabled', false);
            $t.hide(200);
        });
        //cancel button click
        $('#cancelBtn').click(function() {
            $("#formcontainer").prop('disabled', true);
            $("#editBtn").show(200);
        });
//show edication formcontainer
$("#eduBtn").click(function() {
    $("#educationcontainer").show(500);
});
$("#eduCancelBtn").click(function() {
    $("#educationcontainer").hide(500);
});



    });
</script>
<?= $this->endSection() ?>