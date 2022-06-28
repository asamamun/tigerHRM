  <?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>

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
                <h4>Add New Department
                    <hr class="text-denger">
                </h4>

            </div>
            <div class="card rounded">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-2">
                      
                                    <a href="<?= base_url('department-add')?>"class="btn btn-success float-left" >Add Department</a>
                
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
                                    <th style="min-width: 10px">ID</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th class="text-center" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                //populate table row from departments
                                foreach ($department as $department) {
                                ?>
                                    <tr>
                                        <td><?= $department['id'] ?></td>
                                        <td><?= $department['name'] ?></td>
                                        <td><?= $department['description'] ?></td>
                                        <td><?= $department['phone'] ?></td>
                                        <td><?= $department['email'] ?></td>
                                          <td class="text-center">
        <?= anchor('/department/edit/'.$department['id'],'Edit',['class' => 'btn btn-primary rounded mx-1']); ?>
                                            <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                            <a href="<?=base_url('/department/delete/'.$department['id'])?>" class="btn btn-danger rounded mx-1">Delete</a>
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