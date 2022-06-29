<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1 style="padding:7px; height:45px; text-align:center;" class='headtitlebackgroudgradient'>
            Leave Management
            <small>Admin Panel</small>
        </h1>
    </section>
    <br>
    <br>
   
    <div class="col-sm-4 d-flex content-central">
        <div class="text-sm-end">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Input Employee ID" name='q' value='' aria-describedby="button-addon2">
                <button class="btn btn-primary" type="Submit" id="button-addon2">Search</button>
            </div>
        </div>
    </div>

    <section>

        <!--add/edit form start-->
        <div style="display: none" id="secondformofleaveform" class="formcontainer row">
            <div id="frm_show_details">
                <div class="col-md-4" style="height:180px;box-shadow: 10px 5px 5px grey; border-radius:10px;margin-left: 15%; background-color: #e7f7f7;">
                    <h3>Name of Employee: <span id="empnameofleve"></span></h3>
                    <h4>Department : <span id="empdeptofleave"></span></h4>
                    <h4>Section : <span id="empsectionofleave"></span></h4>
                    <h4>Designation : <span id="empdesigofleave"></span></h4>
                </div>
            </div>
            <div class="clearfix"><br><br> </div><br><br>
            <form id="leave_form" method="post" name="leave_form" class="form-horizontal">

                <div class="form-body">

                    <input type="hidden" name="emprealid" value="" />
                    <input type="hidden" name="emp_leaveid" value="" />

                    <div class="form-group">
                        <label class="control-label col-md-2">Leave Type:</label>
                        <div class="col-md-5">

                            <select name="leavetype" id="leavetype" class="form-control">
                                <option value="">Select One</option>


                            </select>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                    <div class="form-group">
                        <label class="control-label col-md-2">Start Date:</label>
                        <div class="col-md-5">
                            <input type="date" name="stdate" id="stdate" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">End Date:</label>
                        <div class="col-md-5">
                            <input type="date" name="endate" id="endate" class="form-control">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Approved by:</label>
                        <div class="col-md-5">
                            <input class="form-control"  name="approvedby" id="approvedby" type="text">
                            <span class="help-block"></span>
                        </div>
                        <h3 id="empnameofapprover"></h3>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Approved:</label>
                        <div class="col-md-5">
                            <div class="col-md-12">
                                <label class="radio-inline">
                                    <input name="approved" id="aprvlv_yes" value="1" type="radio" checked="checked">Yes</label>
                                <label class="radio-inline">
                                    <input name="approved" id="aprvlv_no" value="0" type="radio">No</label>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label class="control-label col-md-2">Comments:</label>
                        <div class="col-md-5">
                            <textarea name="comments" id="comments" class="form-control" rows="5"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="clearfix"> </div>

                </div>


                <input type="button" style="margin-left: 40%" value="Submit" onclick="post_emp_leave_values()" class="btn btn-success" id="add" name="add">

                <input type="button" style="" value="Update" onclick="update_leave_values()" class="btn btn-primary " id="update" name="update">


            </form>

        </div>

    </section>
    <div class="clearfix"><br></div><br><br>



    <div class="col-md-12 ">

        <table class="table table-bordered " id="tableInformation">
            <thead>
                <tr>

                    <th>Leave Type</th>
                    <th>Description</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Days</th>
                    <th>Comments</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody id="leave_table_data">

            </tbody>
        </table>


    </div>

    <div class="clearfix"></div><br>

</div><!-- content-wrapper -->


<?= $this->endSection(); ?>