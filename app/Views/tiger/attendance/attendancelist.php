<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("tiger/partial/flashmessage"); ?>
<div class="page-wrapper">
    <div class="message"></div>
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><i class="fa fa-calendar-check-o" style="color:#1976d2"></i>Attendance</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=base_url("/dashboard")?>">Home</a></li>
                <li class="breadcrumb-item active">Attendance</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <div class="row m-b-10">
            <div class="col-12">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>/attendance/addattendance" class="text-white"><i class="" aria-hidden="true"></i> Add Attendance </a></button>               
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>/attendance/report" class="text-white"><i class="" aria-hidden="true"></i> Attendance Report </a></button>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card card-outline-info">
                    <div class="card-header">
                        <h4 class="m-b-0 text-white"> Attendance List </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="attendance123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Employee Name</th>
                                        <th>PIN</th>
                                        <th>Date </th>
                                        <th>Sign In</th>
                                        <th>Sign Out</th>
                                        <th>Working Hour</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!-- <tfoot>
                                            <tr>
                                                <th>Employee Name</th>
                                                <th>PIN</th>
                                                <th>Date </th>
                                                <th>Sign In</th>
                                                <th>Sign Out</th>
                                                <th>Working Hour</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot> -->
                                <tbody>

                                    <tr>
                                        <td><mark></mark></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                        <a href="" title="Edit" class="btn btn-primary " data-value="Approve">Edit<i class="fa fa-pencil-square-o"></i></a>
                                        <a href="" title="Delete" class="btn btn-danger " data-value="Approve">Delete<i class="fa fa-pencil-square-o"></i></a>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Bulkmodal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="import" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Add Attendance</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <h4>Import Attendance<span><img src="<?php echo base_url(); ?>assets/images/finger.jpg" height="100px" width="100px"></span>Upload only CSV file</h4>

                            <input type="file" name="csv_file" id="csv_file" accept=".csv"><br><br>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success waves-effect">Save</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>
</div>

<?= $this->endSection(); ?>