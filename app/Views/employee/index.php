<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles bg-info">
        <div class="col-md-5 align-self-center ps-4">
            <h3 class="text-themecolor"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
        </div>
        <div class="col-md-7 align-self-center mt-2">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Employee</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-12">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>/employee/add" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                
            </div>
        </div>
        <hr>
        <?php echo view('partial/flashmessage'); ?>
        <hr>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white"><i class="fa fa-user-o" aria-hidden="true"></i> Employee List:</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive ">
                            <table id="employees123" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Name</th>
                                        <th>Department </th>
                                        <th>Designation </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    //populate table row from departments
                                    foreach ($employee as $employee ) {
                                    ?>
                                        <tr>
                                            <td><?= $employee['empid'] ?></td>
                                            <td><?= $employee ['fname'] ?></td>
                                            <td><?= $employee ['deptid'] ?></td>
                                            <td><?= $employee ['desigid'] ?></td>
                                            
                                            <td class="text-center">
                                                <?= anchor('employee/details/' . $employee ['id'], 'Details', ['class' => 'btn btn-primary rounded mx-1']); ?>

                                                <?= anchor('employee/card/' . $employee ['id'], 'Card', ['class' => 'btn btn-info rounded mx-1']); ?>

                                                <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                                
                                            </td>
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



        


        <?= $this->endSection(); ?>