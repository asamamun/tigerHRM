<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("tiger/partial/flashmessage"); ?>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
            <?php
            if (session()->getflashdata('status'))
            {
                echo"<h4>".session()->getflashdata('status')."</h4>";
            }
            ?>
                <div class="my-3 text-center">
                    <h4>Grade
                        <hr class="text-denger">
                    </h4>

                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-2">

                                <a href="<?= base_url('tiger/grade/add') ?>" class="btn btn-success float-left">Add Grade</a>

                            </div>
                            <div class="col-sm-10">
                                <div class="text-sm-end">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Records" name='q' value='' aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="Submit" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Basic</th>
                                        <th>House Rent</th>
                                        <th>Medical Allowance</th>
                                        <th>Other</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    foreach ($emp_grade as $grade) {
                                    ?>
                                        <tr>
                                            <td><?= $grade['gradeid'] ?></td>
                                            <td><?= $grade['gradename'] ?></td>
                                            <td><?= $grade['basic'] ?></td>
                                            <td><?= $grade['houserent'] ?></td>
                                            <td><?= $grade['medical'] ?></td>
                                            <td><?= $grade['other'] ?></td>
                                            <td class="text-center">
                                                <?= anchor('/tiger/grade/edit/' . $grade['id'], 'Edit', ['class' => 'btn btn-primary rounded mx-1']); ?>
                                            <td class="text-center">
                                                <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                                <a href="<?=base_url('/tiger/grade/delete/'. $grade['id'])?>" class="btn btn-danger rounded mx-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                            
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
   




</body>

</html>
<?= $this->endSection(); ?>