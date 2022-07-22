<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Employee <?= $this->endSection(); ?>
<?= $this->Section('content') ?>
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class=" card-header bg-info">
       
            <h3 class="ps-4"><i class="fa fa-users" aria-hidden="true"></i> Employee</h3>
    </div>

    <div class="container-fluid mb-5">
        <div class="row mt-3">
            <div class="col-12">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>/tiger/employee/add" class="text-white"><i class="" aria-hidden="true"></i> Add Employee</a></button>
                
            </div>
        </div>
        <hr>
        <?php echo view('tiger/partial/flashmessage'); ?>
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
                                                <?= anchor('tiger/employee/details/' . $employee ['id'], 'Details', ['class' => 'btn btn-primary rounded mx-1']); ?>

                                                <?= anchor('tiger/employee/card/' . $employee ['id'], 'Card', ['target' => '_blank','class' => 'btn btn-info rounded mx-1']); ?>

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