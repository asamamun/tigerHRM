<?= $this->extend('layouts/default'); ?>
<?= $this->section('title'); ?> Notice <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>

<div class="col-12">
                <div class="card">
                    <div class="card-header bg-danger">
                        <h4 class="text-white">Notice Board</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive slimScrollDiv" style="height:600px;overflow-y:scroll">
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
                                    foreach ($notices as $notices ) {
                                    ?>
                                        <tr>
                                            <td><?= $notices['title'] ?></td>
                                            <td><?= $notices ['file_url'] ?></td>
                                            <td><?= $notices ['date'] ?></td>
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