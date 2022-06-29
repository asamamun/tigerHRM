<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>


<div class="content-wrapper">

    <!-- /.content -->
    <section class="content-header">
        <br><br>
        <h1 style="padding:7px; height:45px; text-align:center;" class='headtitlebackgroudgradient'>
            Upload your
            <small>Attendance File</small>
        </h1>
        <br><br>
    </section>
    <div class='col-md-12'>
        <div class="col-md-12" style="background-color:#FFFFFF">
            <section class="content">
                <script></script>
                <div class="formcontainer">
                    <form action="<?php echo site_url("Attend_upload/Upload") ?>" id="form-attend-upload" class="form-horizontal" enctype="multipart/form-data">

                        <div class="form-body">
                            <!-- <div class="form-group">
                                <label class="control-label col-md-3">Select Valid File</label>
                                <div class="col-md-9">

                                    <input type="file" id="uploadAttendFile" name="file"/>
                                    <span class="help-block" id="uploadAttendFileMessage"></span>
                                </div>
                            </div> -->
                            <button type="button" class="btn btn-rounded btn-success"><span
                                        class="btn-icon-left text-success"><i class="fa fa-upload color-success"></i>
                                    </span>Upload</button>
                        </div> 
                    </form>
                    <div class="form-group" id="uloadIntoDatabaseArea" style="display: none">
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9">

                            <button type="submit" id="uloadIntoDatabase" class="btn btn-primary">Update Database</button>

                            <span class="help-block"></span>

                        </div>
                    </div>
                </div>


                <form action="#" id="Uploaded_attend_data" class="form-horizontal" style="display:none">
                    <h3>Uploading Error Report</h3>
                    <table id="table" class="table sar-table table-bordered sortableTable responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th> 
                                <th>Employee ID</th>
                                <th>Punch Details</th>
                                <th>Advice</th>
                            </tr>
                        </thead>
                        <tbody id="Error-report-table">





                        </tbody>

                        <tfoot>
                        <thead>
                            <tr>
                                <th>SL</th> 
                                <th>Employee_ID</th>
                                <th>Punch Details</th>
                                <th style="width:200px;">Advice</th>
                            </tr>
                            </tfoot>
                    </table>


                </form>
            </section>
        </div>

    </div>
    <div class='clearfix'></div>
</div><!-- /.content-wrapper -->
<?= $this->endSection(); ?>

