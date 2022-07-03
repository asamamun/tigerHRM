<div class="d-flex justify-content-between bg-primary border-bottom">
        <button class="btn btn-primary"><h4>Work Experience:</h4></button>
 
        <button id="expBtn" class="btn btn-primary btn-lg"><i class="fa-solid fa-circle-plus"></i></button>
       
    </div>
    <fieldset id="experiencecontainer">
        <?php echo form_open('education/add'); ?>
        <?php echo form_hidden('id', $emp['id']); ?>
        <div class="row">
        <div class="table-responsive col-6">
            <table class="table table-striped table-bordered table-hover table-responsive">
            <tr class="success">
                    <th>Company</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="occupation" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Occupation</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="occupation" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Experience from</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="exp_from" class="form-control" value=""></td>
                </tr>


                <tr class="primary text-end">
                    <td>
                        <input type="submit" value="Save" class="btn btn-primary">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive col-6">
            <table class="table table-striped table-bordered table-hover table-responsive">
                <tr class="success">
                    <th>Experience to</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="exp_from" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Reason for Leaving</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="exp_from" class="form-control" value=""></td>
                </tr>
                <tr class="success">
                    <th>Comment</th>
                </tr>
                <tr class="primary">
                    <td><input type="text" name="exp_from" class="form-control" value=""></td>
                </tr>


                <tr class="primary">
                    <td>
                        <input type="button" value="Cancel" class="btn btn-secondary" id="expCancelBtn">
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        </div>
        <?php echo form_close(); ?>
    </fieldset>
    <!-- Experience end -->
    <?php if ($empexperience) { ?>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Occupation</th>
                    <th>Experience from</th>
                    <th>Experience to</th>
                    <th>Reason for Leaving</th>
                    <th>Comment</th>
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
                foreach ($empexperience as $experience) {
                ?>
                    <tr>
                        <td><?php echo $experience['company'] ?></td>
                        <td><?php echo $experience['occupation'] ?></td>
                        <td><?php echo $experience['exp_from'] ?></td>
                        <td><?php echo $experience['exp_to'] ?></td>
                        <td><?php echo $experience['exp_to'] ?></td>
                        <td><?php echo $experience['comment'] ?></td>
                        <td><button><i class="fa-solid fa-pen-to-square"></i></button> | <button class="bg-danger"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php } else { ?>
        <strong class="bg-warning text-center">Experience info not found. Add Please!</strong>
    <?php } ?>

