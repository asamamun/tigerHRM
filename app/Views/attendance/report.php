<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>



<h3 style="text-align: center;">Attendance Report</h3>

<div class="page-wrapper">
            <div class="message"></div>
            <div class="row page-titles"></div>              
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
                        <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url('/attendance/addattendance'); ?>" class="text-white"><i class="" aria-hidden="true"></i> Add Attendance </a></button>
                        <button type="button" class="btn btn-info"><a href="<?php echo base_url(''); ?>/attendance/attendancelist" class="text-white"><i class="" aria-hidden="true"></i> Attendance List </a></button>
                    </div>
                </div>  
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Attendance Report</h4>
                                <form method="post" action="Get_attendance_data_for_report" class="form-material row">
                                    <div class="form-group col-md-3">
                                        <input type="date" name="date_from"  class="form-control mydatetimepickerFull" placeholder="from">
                                        <label for="From">From</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <input type="date" name="date_to"  class="form-control mydatetimepickerFull" placeholder="to">
                                        <label for="From">To</label>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <select class="form-control custom-select"  tabindex="1" name="emid" id="employee_id" required>
                                        <option>Employee</option>                                        </select>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="submit" class="btn btn-success" value="Submit" name="submit" id="getAtdReport">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body EmployeeInfo">
                                <h3 class="employee_name">Employee</h3>
                                Worked <span class="hours"></span> Hours in <span class="days"></span> days
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Full attendance</h4>
                                <div class="table-responsive ">
                                  <table id="example234" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead>
                                      <tr>
                                        <th>ID </th>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>In</th>
                                        <th>Out</th>
                                        <th>Hour</th>
                                        <th>Place</th>
                                      </tr>
                                    </thead>
                                    
                                    <tbody class="leave">
                                    
                                    </tbody>
                                  </table>
                                </div>
                        </div>
                    </div>
                </div>


<?= $this->endSection(); ?>