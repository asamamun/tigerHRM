<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>
<!-- edit supplier form -->
<div>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?>
</div>
<!-- edit supplier form -->
<h1>Supplier Info</h1>
<?php echo form_open('suppliers/edit/' . $supplier['id']); ?>

<?php echo form_hidden("id", $supplier['id']); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $supplier['name'] ?>">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?= $supplier['email'] ?>">
</div>
<div class="form-group">
    <label for="mobile">Mobile</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" value="<?= $supplier['mobile'] ?>">
</div>
<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?= $supplier['address'] ?>">
</div>
<button type="submit" class="btn btn-primary mt-2">Submit</button>
<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>