<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Leave <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>

<div class="d-flex justify-content-between bg-primary border-bottom">
    <button class="btn btn-primary">
        <h4 class=''>Add Leave Application For
            <?= $emp['fname'] . '&nbsp;' . $emp['mname'] . $emp['lname'] . '&nbsp(' . $emp['empid'] . ')'; ?>
    </button>
    <hr class="text-denger">
    </h4>
</div>


<div class="container my-1">
    <div class="row">
        <form action="<?= base_url(''); ?>/tiger/storeleave/<?= $emp['id']; ?>" method="POST">
            <?= csrf_field() ?>
            <input type="hidden" name="id" value="<?= $emp['id']; ?>">
            <div class="modal-body">
                <div>
                    <a href="<?= base_url('tiger/leave/') ?>" class="btn btn-danger float-left">Back</a>
                </div>

                <div class="form-group">
                    <label><? //= $emp['empid'] 
                            ?></label>
                    <label><? //= $emp['fname'] 
                            ?></label>

                </div>
                <div class="form-group">
                    <label for="leavetype">Leave Type</label>
                    <select class="form-control custom-select assignleave" tabindex="1" name="leavetype" id="leavetype" required>
                        <option value="">Select Here..</option>
                        <option value="1">Annual</option>
                        <option value="2">Sick</option>
                        <option value="3">Casual</option>
                        <option value="4">Leave with pay</option>
                        <option value="5">Leave without pay</option>
                        <option value="6">Earned</option>
                        <option value="7">Short Leave</option>
                        <option value="8">Maternity</option>
                        <option value="9">Paternity</option>
                    </select>
                </div>
                <div class="form-group">
                    <span style="color:red" id="total"></span>
                    <div class="span pull-right">
                        <button class="btn btn-info fetchLeaveTotal">Fetch Total Leave</button>
                    </div>
                    <br>
                </div>
                <!-- <div class="form-group">
                    <label class="control-label">Leave Duration</label><br>
                    <input name="type" type="radio" id="radio_1" data-value="Half" class="duration" value="Half Day" checked="">
                    <label for="radio_1">Hourly</label>
                    <input name="type" type="radio" id="radio_2" data-value="Full" class="type" value="Full Day">
                    <label for="radio_2">Full Day</label>
                    <input name="type" type="radio" class="with-gap duration" id="radio_3" data-value="More" value="More than One day">
                    <label for="radio_3">Above a Day</label>
                </div> -->
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label" id="hourlyFix">From</label>
                            <input type="date" name="startdate" class="form-control" id="recipient-name1" required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label class="control-label" id="hourlyFix">To</label>
                            <input type="date" name="enddate" class="form-control" id="recipient-name1" required>
                        </div>
                    </div>
                </div>


                <!-- <div class="form-group" id="hourAmount">
                    <label>Length</label>
                    <select id="hourAmountVal" class=" form-control custom-select" tabindex="1" name="hourAmount" required>
                        <option value="">Select Hour</option>
                        <option value="1">One hour</option>
                        <option value="2">Two hour</option>
                        <option value="3">Three hour</option>
                        <option value="4">Four hour</option>
                        <option value="5">Five hour</option>
                        <option value="6">Six hour</option>
                        <option value="7">Seven hour</option>
                        <option value="8">Eight hour</option>
                    </select>
                </div> -->
                <div class="form-group">
                    <label class="control-label">Reason</label>
                    <textarea class="form-control" name="reason" id="message-text1" required minlength="10"></textarea>
                </div>
                <div>
                    <button type="submit" id="store" class="btn btn-primary">Save</button>
                    <!-- <button type="button" class="btn btn-danger">Cancel</button> -->
                </div>

            </div>

        </form>
    </div>
</div>



<?= $this->endSection(); ?>