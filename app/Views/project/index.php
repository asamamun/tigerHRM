<!-- <?= $this->extend('layouts/default'); ?>
<?= $this->section('title'); ?> Projects <?= $this->endSection(); ?>
!-- content section start -->
<?= $this->section('content'); ?>
<div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Projects</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="height:600px;overflow-y:scroll">
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
                                    foreach ($project as $project ) {
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

            <?= $this->endSection(); ?>
        <!-- content section end-->

        <?= $this->section('scripts'); ?>
        <script>
            // $(document).ready(function() {
            //     $('#users').DataTable();
            // } );
        </script>
        <?= $this->endSection(); ?>