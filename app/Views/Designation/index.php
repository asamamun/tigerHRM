<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4>Designation
                        <hr class="text-denger">
                    </h4>

                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-8">
                                <input type="text" placeholder="Add Designation">
                                <a href="#" class="btn btn-primary btn-sm rounded mb-2">Add Data</a>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-sm-end">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Records" name='q'
                                            value='' aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="Submit" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th style="min-width: 10px">#</th>
                                        <th>Name</th>
                                        <!-- <th>Mobile</th>
                                        <th>Email</th> -->
                                        <th class="text-center" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                //populate table row from departments
                                foreach ($designation as $designation) {
                                ?>
                                    <tr>
                                        <td><?= $designation['id'] ?></td>
                                        <td><?= $designation['name'] ?></td>
                                        <td><?= $designation['designation'] ?></td>
                                          <td class="text-center">
        <?= anchor('department/edit/'.$department['id'],'Edit',['class' => 'btn btn-primary rounded mx-1']); ?>
                                        <td class="text-center">
                                            <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                            <a href="#" class="btn btn-danger rounded mx-1">Delete</a>
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
    </div>
<?= $this->endSection(); ?>
