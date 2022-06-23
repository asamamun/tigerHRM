<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>
<!-- edit customer form -->
<div>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>        
        </div>
    <?php endif; ?>
</div>
<!-- edit customer form -->
<h1>Customer Info</h1>
<?php echo form_open('customers/edit/'.$customer['id']); ?>

<?php echo form_hidden("id",$customer['id']); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $customer['name'] ?>">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= $customer['email'] ?>">
</div>
<div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" value="<?= $customer['mobile'] ?>">
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?= $customer['address'] ?>">
</div>
<div class="form-group">
    <label for="expense">Expense</label>
    <input type="text" class="form-control" id="expense" name="expense" placeholder="Enter expense" value="<?= $customer['expense'] ?>">
</div>
<button type="submit" class="btn btn-primary mt-2">Submit</button>
<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>