<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Dashboard <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>
<!-- ===================================================================== -->
<div class="container-fluid bg-lightyellow">
    <div class="message"></div>
    <div class="row page-titles bg-info">
        <div class="col-md-5 align-self-center">
            <h3 class="text-themecolor"><i class="fa fa-braille small" style="color:#1976d2"></i>&nbsp Dashboard</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Row -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6 mt-2">
                <div class="card">
                    <div class="card-body bg-info">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-primary"><i class="ti-user"></i></div>
                            <div class="align-self-center">
                                <h3 class="text-white">
                                    Employees</h3>

                                <a href="<?php echo base_url(); ?>/tiger/employee" class="text-primary">View Details (<?= $_SESSION["allemployees"]; ?>)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6 mt-2">
                <div class="card">
                    <div class="card-body bg-blue">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-info"><i class="ti-file"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="text-white">
                                    Department
                                </h3>
                                <a href="<?php echo base_url(); ?>/tiger/department" class="text-info">View Details (<?= $_SESSION["alldepartments"]; ?>)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6 mt-2">
                <div class="card">
                    <div class="card-body bg-success">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-danger"><i class="ti-calendar"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="text-white">
                                    Projects
                                </h3>
                                <a href="<?php echo base_url(); ?>/tiger/project/" class="text-info">View Details (<?= $_SESSION["allprojects"]; ?>)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6 mt-2">
                <div class="card">
                    <div class="card-body bg-warning">
                        <div class="d-flex flex-row">
                            <div class="round align-self-center round-success"><i class="ti-money"></i></div>
                            <div class="m-l-10 align-self-center">
                                <h3 class="text-white">
                                    Leave
                                </h3>
                                <a href="<?php echo base_url(); ?>/tiger/leave/" class="text-primary">View Details (<?= $_SESSION["allleaves"]; ?>))</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- Row -->
        <!-- Row -->

        <div class="row ">
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-info">
                    <div class="box bg-dark text-center">
                        <h1 class="font-light text-white">

                        </h1>
                        <h6 class="text-white">Former Employees</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-info card-inverse">
                    <div class="box bg-dark text-center">
                        <h1 class="font-light text-white">

                        </h1>
                        <h6 class="text-white">Employees Attendance</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-danger">
                    <div class="box bg-dark text-center">
                        <h1 class="font-light text-white">

                        </h1>
                        <h6 class="text-white">Upcoming Project</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-success">
                    <div class="box bg-dark text-center">
                        <h1 class="font-light text-white">

                        </h1>
                        <h6 class="text-white">Pending Leave Application</h6>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
        <!-- ============================================================== -->
    </div>
    <div class="container-fluid">
        <!-- ?php $notice = $this->notice_model->GetNoticelimit(); 
                $running = $this->dashboard_model->GetRunningProject(); 
                $userid = $this->session->userdata('user_login_id');
                $todolist = $this->dashboard_model->GettodoInfo($userid);                 
                $holiday = $this->dashboard_model->GetHolidayInfo();                  -->

        <!-- Row -->
        <div class="row">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary d-flex justify-content-between">
                        <h4 class="text-white">Projects</h4>
                        <h4><a href="tiger/project/"><i class="fa-solid fa-link"></i></a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="height:400px;overflow-y:scroll">
                            <table class="table table-bordered table-hover earning-box">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //populate table row from departments
                                    foreach ($project as $project) {
                                    ?>
                                        <tr>
                                            <td><?= $project['name'] ?></td>
                                            <td><?= $project['start_date'] ?></td>
                                            <td><?= $project['end_date'] ?></td>
                                            <td><?= $project['status'] ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header bg-primary d-flex justify-content-between">
                        <h4 class="text-white">To Do List</h4>
                        <h4><a href="todo/"><i class="fa-solid fa-link"></i></a></h4>
                    </div>
                    <h6 class="card-subtitle ps-3 btn btn-info border-top">List of your next task to complete</h6>
                    <div class="card-body">
                        <div class="to-do-widget m-t-20" style="height:310px;overflow-y:scroll">
                            <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                <?php foreach ($todo as $value) : ?>
                                    <li class="list-group-item" data-role="task">
                                        <?php if ($value['value'] == '1') { ?>
                                            <div class="checkbox checkbox-info">
                                                <input class="to-do" data-id="<?php echo $value['id'] ?>" data-value="0" type="checkbox" id="<?php echo $value['id'] ?>">
                                                <label for="<?php echo $value['id'] ?>"><span><?php echo $value['data']; ?></span></label>
                                            </div>
                                        <?php } else { ?>
                                            <div class="checkbox checkbox-info">
                                                <input class="to-do" data-id="<?php echo $value['id'] ?>" data-value="1" type="checkbox" id="<?php echo $value['id'] ?>" checked>
                                                <label class="task-done" for="<?php echo $value['id'] ?>"><span><?php echo $value['data']; ?></span></label>
                                            </div>
                                        <?php } ?>
                                    </li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="new-todo">
                            <?php echo form_open('tiger/dashbord/dashboard'); ?>
                            <!-- <form method="post" action="add_todo" enctype="multipart/form-data" id="add_todo"> -->
                            <div class="input-group">
                                <input type="text" name="data" class="form-control" style="border: 1px solid #fff !IMPORTANT;" placeholder="Enter New Task...">
                                <span class="input-group-btn">

                                    <button type="submit" class="btn btn-success todo-submit"><i class="fa fa-plus"></i></button>
                                </span>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header bg-danger d-flex justify-content-between">
                        <h4 class="text-white">Notice Board</h4>
                        <h4><a href="tiger/notice/"><i class="fa-solid fa-link"></i></a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="height:400px;overflow-y:scroll">
                            <table class="table table-hover table-bordered earning-box ">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>File</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //populate table row from departments
                                    foreach ($notices as $notices) {
                                    ?>
                                        <tr>
                                            <td><?= $notices['title'] ?></td>
                                            <td><?= $notices['file_url'] ?></td>
                                            <td><?= $notices['date'] ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-secondary d-flex justify-content-between">
                        <h4 class="text-white">
                            Holidays

                        </h4>
                        <h4><a href="tiger/holiday/"><i class="fa-solid fa-link"></i></a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="height:400px;overflow-y:scroll">
                            <table class="table table-hover table-bordered earning-box">
                                <thead>
                                    <tr>
                                        <th>Holiday Name</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    //populate table row from departments
                                    foreach ($holidays as $holidays) {
                                    ?>
                                        <tr>
                                            <td><?= $holidays['name'] ?></td>
                                            <td><?= $holidays['from_date'] ?></td>
                                        </tr>

                                    <?php
                                    }
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- ===================================================================== -->

        <?= $this->endSection(); ?>
        <!-- content section end-->

        <?= $this->section('scripts'); ?>
        <script>
            // $(document).ready(function() {
            //     $('#users').DataTable();
            // } );
        </script>
        <?= $this->endSection(); ?>