<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("tiger/partial/flashmessage"); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor">Attendance</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url("/dashboard")?>">Home</a></li>
                <li class="breadcrumb-item active">Attendance</li>
            </ol>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row m-b-10">
            <div class="col-12">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>/tiger/attendance/attendancelist" class="text-white"><i class="" aria-hidden="true"></i> Attendance List</a></button>
                <button type="button" class="btn btn-primary"><i class="fa fa-bars"></i><a href="<?php echo base_url(); ?>/tiger/leave" class="text-white"><i class="" aria-hidden="true"></i> Leave Application</a></button>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Attendance </h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="Add_Attendance" id="holidayform" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Employee ID</label>
                                    <select class="form-control custom-select" data-placeholder="Choose a Category" tabindex="1" name="emid" required>
                                        <option value="#">Select Here</option>
                                    </select>
                                </div>
                                <label>Select Date: </label>
                                <div id="" class="input-group date">
                                    <input type="date" name="attdate" class="form-control mydatetimepickerFull" value="" required>
                                    <span class="input-group-addon"><i class=""></i></span>
                                </div>
                                <div class="form-group">
                                    <label class="m-t-20">Sign In Time</label>
                                    <input type="time" class="form-control" name="signin" id="single-input" value="" placeholder="Now" required>
                                </div>
                                <div class="form-group">
                                    <label class="m-t-20">Sign Out Time</label>
                                    <div class="input-group clockpicker">
                                        <input type="time" name="signout" class="form-control" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Place</label>
                                    <select class="form-control custom-select" data-placeholder="" tabindex="1" name="place" required>
                                        <option value="office">Office</option>
                                        <option value="field">Field</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <!-- <input type="hidden" name="id" value="" class="form-control" id="recipient-name1"> -->
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" id="attendanceUpdate" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="holysmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Holidays</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="post" action="Add_Holidays" id="holidayform" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label">Holidays name</label>
                                <input type="text" name="holiname" class="form-control" id="recipient-name1" minlength="4" maxlength="25" value="" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Holidays Start Date</label>
                                <input type="date" name="startdate" class="form-control" id="recipient-name1" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Holidays End Date</label>
                                <input type="date" name="enddate" class="form-control" id="recipient-name1" value="">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Number of Days</label>
                                <input type="number" name="nofdate" class="form-control" id="recipient-name1" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label"> Year</label>
                                <textarea class="form-control" name="year" id="message-text1"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" value="" class="form-control" id="recipient-name1">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?= $this->endSection(); ?>