
<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>

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
                <h3 class="card-title">Users</h3>
                <div class="card-options">
                    <a href="<?= base_url('users/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add User</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="customers">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td><?= $user['name']; ?></td>
                                    <td><?= $user['email']; ?></td>
                                    <td><?= $user['mobile']; ?></td>
                                    <td><?= $user['address']; ?></td>
                                   
                                    <td class="d-flex justify-content-center">
                                        <a href="<?= base_url('users/edit/' . $user['id']); ?>" class="btn btn-sm btn-warning me-1"><i class="fa fa-edit"></i></a>
                                        <!-- onsubmit="return confirm('Are you sure you want to submit this form?');" -->
                                        <?php echo form_open("users/delete/".$user['id'],['onsubmit'=>"return confirm('Are you sure you want to submit this form?');"]) ?>
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        <?php echo form_close(); ?>
                                        <!-- <a href="<?= base_url('users/delete/' . $user['id']); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a> -->
                                    </td>
                                </tr>
                            <?php endforeach; ?>
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
        $('#customers').DataTable();
    } );
</script>
<?= $this->endSection(); ?>



