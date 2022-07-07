<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>
<!-- create expense form -->
<div>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>        
        </div>
    <?php endif; ?>
</div>
<!-- new expense form -->
<h1>New Expense</h1>
<?php echo form_open('expenses/create'); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
</div>
<div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount">
</div>

<button type="submit" class="btn btn-primary mt-2">Submit</button>
<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>