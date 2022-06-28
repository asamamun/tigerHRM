<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>




<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4>Section
                        <hr class="text-denger">
                    </h4>

                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-2">

                                <a href="<?= base_url('section/add') ?>" class="btn btn-success float-left">Add Section</a>

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
                                        <th>SL</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Department</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //populate table row from departments
                                    foreach ($section as $section) {
                                    ?>
                                        <tr>
                                            <td><?= $section['id'] ?></td>
                                            <td><?= $section['name'] ?></td>
                                            <td><?= $section['secdesc'] ?></td>
                                            <td><?= $section['department_id'] ?></td>
                                            <td class="text-center">
                                                <?= anchor('section/edit' . $section['id'], 'Edit', ['class' => 'btn btn-primary rounded mx-1']); ?>
                                            <td class="text-center">
                                                <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                                <a href="#" class="btn btn-danger rounded mx-1">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>


                            </table>


                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
    <?= $this->endSection(); ?>