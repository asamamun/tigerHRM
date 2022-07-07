<div class="d-flex justify-content-between bg-primary border-bottom">
        <button class="btn btn-primary"><h4>Employee Address:</h4></button>
        <button id="adrBtn" class="btn btn-primary btn-lg">Edit</button>
    </div>
    <fieldset id="addresscontainer">
        <?php echo form_open('tiger/employee/address'); ?>
        <?php echo form_hidden('id', $emp['id']); ?>
        <div class="row ms-2">

        <div class="row col-6">
                <h4>Permanent Address:</h4>
                <div class="col-md-6"><label class="labels">Address 1</label><input type="text" name="p_address1" class="form-control" value="<?php echo $empaddress['p_address1']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Address 2</label><input type="text" name="p_address2" class="form-control" value="<?php echo $empaddress['p_address2']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Village</label><input type="text" name="p_village" class="form-control" value="<?php echo $empaddress['p_village']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Postname</label><input type="text" name="p_post_name" class="form-control" value="<?php echo $empaddress['p_post_name']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Post Code</label><input type="text" name="p_post_code" class="form-control" value="<?php echo $empaddress['p_post_code']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">p_upazila</label><input type="text" name="p_upazila" class="form-control" value="<?php echo $empaddress['p_upazila']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">p_dist</label><input type="text" name="p_dist" class="form-control" value="<?php echo $empaddress['p_dist']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">p_country</label><input type="text" name="p_country" class="form-control" value="<?php echo $empaddress['p_country']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">sameornot</label><input type="text" name="sameornot" class="form-control" value="<?php echo $empaddress['p_country']; ?>"></div>
                        


                        <div class="btn d-grid">
                            
                                <input type="submit" value="Update" class="btn btn-primary">
                               
                        
                        </div>
                        </tbody>
                  
            </div>
            <div class="row col-6">
                <h4>Present Address:</h4>
                
                        <div class="col-md-6"><label class="labels">Address 1</label><input type="text" name="c_address1" class="form-control" value="<?php echo $empaddress['c_address1']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Address 2</label><input type="text" name="c_address2" class="form-control" value="<?php echo $empaddress['c_address2']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Village</label><input type="text" name="c_village" class="form-control" value="<?php echo $empaddress['c_village']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Postname</label><input type="text" name="c_post_name" class="form-control" value="<?php echo $empaddress['c_post_name']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">Post Code</label><input type="text" name="c_post_code" class="form-control" value="<?php echo $empaddress['c_post_code']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">c_upazila</label><input type="text" name="c_upazila" class="form-control" value="<?php echo $empaddress['c_upazila']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">c_dist</label><input type="text" name="c_dist" class="form-control" value="<?php echo $empaddress['c_dist']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">c_country</label><input type="text" name="c_country" class="form-control" value="<?php echo $empaddress['c_country']; ?>"></div>
                        
                        <div class="col-md-6"><label class="labels">sameornot</label><input type="text" name="sameornot" class="form-control" value="<?php echo $empaddress['p_country']; ?>"></div>
                        
                        <div class="btn d-grid">
                     
                            <input type="button" value="Cancel" class="btn btn-secondary" id="adrcancelBtn">
                            
                        </div>
                     


            </div>
        </div>


        <?php echo form_close(); ?>
    </fieldset>