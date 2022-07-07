<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>
<!-- edit expense form -->
<div>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>        
        </div>
    <?php endif; ?>
</div>
<!-- edit expense form -->
<h1>Expense Info</h1>
<?php echo form_open('expenses/edit/'.$expense['id']); ?>

<?php echo form_hidden("id",$expense['id']); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $expense['name'] ?>">
</div>
<div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter amount" value="<?= $expense['amount'] ?>">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>