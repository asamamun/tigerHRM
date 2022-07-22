<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Leave <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>


<div class="container my-5">
    <div class="row">
        <form action="<?= base_url('') ?>" method="POST">
            <?= csrf_field() ?>
            <div class="modal-body">
                <div class="my-3 text-center">
                    <h4>Add Leave Application For Employee
                        <hr class="text-denger">
                    </h4>
                </div>
                <div>
                    <a href="<?= base_url('tiger/leave/') ?>" class="btn btn-danger float-left">Back</a>
                </div>

                <div class="form-group">
                    <label>Employee</label>
                    <select class=" form-control custom-select selectedEmployeeID" tabindex="1" name="emid" required>
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Leave Type</label>
                    <select class="form-control custom-select assignleave" tabindex="1" name="typeid" id="leavetype" required>
                        <option value="">Select Here..</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <span style="color:red" id="total"></span>
                    <div class="span pull-right">
                        <button class="btn btn-info fetchLeaveTotal">Fetch Total Leave</button>
                    </div>
                    <br>
                </div>
                <div class="form-group">
                    <label class="control-label">Leave Duration</label><br>
                    <input name="type" type="radio" id="radio_1" data-value="Half" class="duration" value="Half Day" checked="">
                    <label for="radio_1">Hourly</label>
                    <input name="type" type="radio" id="radio_2" data-value="Full" class="type" value="Full Day">
                    <label for="radio_2">Full Day</label>
                    <input name="type" type="radio" class="with-gap duration" id="radio_3" data-value="More" value="More than One day">
                    <label for="radio_3">Above a Day</label>
                </div>
                <div class="form-group">
                    <label class="control-label" id="hourlyFix">Date</label>
                    <input type="date" name="startdate" class="form-control" id="recipient-name1" required>
                </div>
                <div class="form-group" id="enddate" style="display:none">
                    <label class="control-label">End Date</label>
                    <input type="date" name="enddate" class="form-control" id="recipient-name1">
                </div>

                <div class="form-group" id="hourAmount">
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
                </div>
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