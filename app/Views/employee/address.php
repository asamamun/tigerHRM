<div class="d-flex justify-content-between bg-primary border-bottom">
        <button class="btn btn-primary"><h4>Employee Address:</h4></button>
        <button id="adrBtn" class="btn btn-primary btn-lg">Edit</button>
    </div>
    <fieldset id="addresscontainer">
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


                        <tr class="primary text-end">
                            <td>
                                <input type="submit" value="Update" class="btn btn-primary">
                               
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
                            <input type="button" value="Cancel" class="btn btn-secondary" id="adrcancelBtn">
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>


        <?php echo form_close(); ?>
    </fieldset>