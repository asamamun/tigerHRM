<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
    <?php if (session()->getFlashdata('message')) : ?>        
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= session()->getFlashdata('message'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>        
        </div>
    <?php endif; ?>



<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Designation</h3>
                <div class="card-options">
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-csv"></i> CSV</a>
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-excel"></i> Excel</a>
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-print"></i> Print</a>
                    <a href="<?= base_url('/'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-file-pdf"></i> PDF</a>
                    <a href="<?= base_url('designation/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Designation</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="designation">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Desigdesc</th>
                                <th>Grade</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($designation as $designation) : ?>
                                <tr>
                                    <td><?= $designation['name']; ?></td>
                                    <td><?= $designation['desigdesc']; ?></td>
                                    <td><?= $designation['grade']; ?></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="<?= base_url('designation/edit/' . $designation['id']); ?>" class="btn btn-sm btn-warning me-1"><i class="fa fa-edit"></i></a>
                                        <!-- onsubmit="return confirm('Are you sure you want to submit this form?');" -->
                                        <?php echo form_open("designation/delete/".$designation['id'],['onsubmit'=>"return confirm('Are you sure you want to submit this form?');"]) ?>
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        <?php echo form_close(); ?>
                                        <!-- <a href="<?= base_url('designation/delete/' . $\designation['id']); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> -->
                                    </td>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>







<?= $this->section('scripts'); ?>
<script>
    $(document).ready(function() {
        $('#designation').DataTable();
    } );
</script>
<?= $this->endSection(); ?>