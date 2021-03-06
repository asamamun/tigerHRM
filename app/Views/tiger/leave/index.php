<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Leave <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header bg-primary">
            <h4 class="text-white"> Employee Leave</h4>
        </div>
        <div class="col-6">
                <button type="button" class="btn btn-info"><i class="fa fa-plus"></i><a href="<?php echo base_url(); ?>/tiger/addleave"  class="text-white"><i class="" ></i> Add Application </a></button>
                
        </div>
        <div class="card-body">
            <div class="table-responsive" style="height:600px;">
                <table class="table table-bordered table-hover earning-box">
                    <thead>
                        <tr>
                            <th>Employee ID</th>
                            <th>Leave ID</th>
                            <th>From</th>
                            <th>To</th>
                            <th>Leave Days</th>
                            <th>Approved By</th>
                            <th>Date</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                        <!-- <tr>
                <td>SSC</td>
            </tr>
            <tr>
                <td>hsc</td>
            </tr> -->
                    </thead>
                    <tbody>

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