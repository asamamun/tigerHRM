<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Holiday <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>
<!-- ===================================================================== -->
<div class="col-12">
                <div class="card">
                <div class="card-header bg-secondary d-flex justify-content-between">
                        <h4 class="text-white">
                            Holidays
                            
                        </h4>
                        <h4><a href="holiday/"><i class="fa-solid fa-plus-circle bg-white rounded"></i></a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="height:600px;overflow-y:scroll">
                            <table class="table table-hover table-bordered earning-box">
                                <thead>
                                    <tr>
                                        <th>Holiday Name</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Number of Days</th>
                                        <th>Year</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                    //populate table row from departments
                                    foreach ($holidays as $holidays ) {
                                    ?>
                                        <tr>
                                            <td><?= $holidays['name'] ?></td>
                                            <td><?= $holidays ['from_date'] ?></td>
                                            <td><?= $holidays ['to_date'] ?></td>
                                            <td><?= $holidays ['tl_days'] ?></td>
                                            <td><?= $holidays ['year'] ?></td>
                                            <td class="text-center">
                                                <?= anchor('tiger/holiday/edit/' . $holidays ['id'], 'Edit', ['class' => 'btn btn-primary rounded mx-1']); ?>

                                                <?= anchor('tiger/holiday/delete/' . $holidays ['id'], 'Delete', ['class' => 'btn btn-info rounded mx-1']); ?>

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