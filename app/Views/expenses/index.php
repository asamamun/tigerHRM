
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
                <h3 class="card-title">Expenses</h3>
                <div class="card-options">
                    <a href="<?= base_url('expenses/create'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Add Expense</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="expenses">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($expenses as $expense) : ?>
                                <tr>
                                    <td><?= $expense['id']; ?></td>
                                    <td><?= $expense['name']; ?></td>
                                    <td><?= $expense['amount']; ?></td>
                                    <td class="d-flex justify-content-center">
                                        <a href="<?= base_url('expenses/edit/' . $expense['id']); ?>" class="btn btn-sm btn-warning me-1"><i class="fa fa-edit"></i></a>
                                        <?php echo form_open("expenses/delete/" . $expense['id'], ['onsubmit' => "return confirm('Are you sure you want to submit this form?');"]) ?>
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        <?php echo form_close(); ?>
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
        $('#expenses').DataTable();
    } );
</script>
<?= $this->endSection(); ?>



