<?= $this->extend('layouts/default'); ?>

<?= $this->section('content'); ?>
<div class="card-header d-flex justify-content-between bg-info">
    <h2 class="text-white"> Company Setup</h2>
    <button id="editBtn" class="btn bg-info btn-lg"><i class="fa-solid fa-pen-to-square"></i></button>
</div>

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


        <div class="d-flex justify-content-between bg-primary">
            <button class="btn btn-primary">
                <h4>Comapany Details:</h4>
        </div>
        <div class="row ms-2 sm-2">
            <div class=" row col-12">
                <div class="col-md-6"><label class="labels">Company Name</label><input type="text" name="companyname" class="form-control" value="<?php echo $allsettings['companyname']; ?>"></div>
                <div class="col-md-6"><label class="labels">Company address1</label><input type="text" name="companyaddress1" class="form-control" value="<?php echo $allsettings['companyaddress1']; ?>"></div>

                <div class="col-md-6"><label class="labels">Company address2</label><input type="text" name="companyaddress2" class="form-control" value="<?php echo $allsettings['companyaddress2']; ?>"></div>
                <div class="col-md-6"><label class="labels">Telephone Number</label><input type="text" name="tel" class="form-control" value="<?php echo $allsettings['tel']; ?>"></div>
                <div class="col-md-6"><label class="labels">Email Address</label><input type="text" name="email" class="form-control" value="<?php echo $allsettings['email']; ?>"></div>
                <div class="col-md-6"><label class="labels">Web Address</label><input type="text" name="web" class="form-control" value="<?php echo $allsettings['web']; ?>"></div>
                <div class="col-md-6"><label class="labels">Trade License</label><input type="text" name="tradeli" class="form-control" value="<?php echo $allsettings['tradeli']; ?>"></div>
                <div class="col-md-6"><label class="labels">Owner Name</label><input type="text" name="ownername" class="form-control" value="<?php echo $allsettings['ownername']; ?>"></div>
                <div class="col-md-6"><label class="labels">Tin Number</label><input type="text" name="tin" class="form-control" value="<?php echo $allsettings['tin']; ?>"></div>
                <div class="col-md-6"><label class="labels">Establishment Date</label><input type="text" name="establishmentdate" class="form-control" value="<?php echo $allsettings['establishmentdate']; ?>"></div>

                <div class="col-md-6"><label class="labels">Alias</label><input type="text" name="alias" class="form-control" value="<?php echo $allsettings['alias']; ?>"></div>
                <div class="col-md-6"><label class="labels">Company Type</label><input type="text" name="companytype" class="form-control" value="<?php echo $allsettings['companytype']; ?>"></div>
                </tr>
                <div class="primary btn">

                    <input type="submit" value="Update" class="btn btn-primary">
                    <input type="button" value="Cancel" class="btn btn-secondary" id="cancelBtn">

                </div>

            </div>
            <?php echo form_close(); ?>
        </div>
    </fieldset>
<?php

}
?>




<?= $this->endSection(); ?>
<?= $this->section('scripts'); ?>
<script>
    $(document).ready(function() {
        $("#editBtn").click(function() {
            $t = $(this);
            $("#companycontainer").prop('disabled', false);
            $t.hide(200);
        });
        //cancel button click
        $('#cancelBtn').click(function() {
            $("#companycontainer").prop('disabled', true);
            $("#editBtn").show(200);
        });

    });
</script>


<?= $this->endSection(); ?>