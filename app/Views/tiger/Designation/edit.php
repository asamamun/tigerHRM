<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<!-- edit customer form -->
<div>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>        
        </div>
    <?php endif; ?>
</div>
<!-- edit customer form -->
<h1>Edit Designtaion</h1>
<?php echo form_open('tiger/designation/edit/'.$designation['id']); ?>

<?php echo form_hidden("id",$designation['id']); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?= $designation['name'] ?>">
</div>
<div class="form-group">
    <label for="desigdesc">Desigdesc</label>
    <input type="desigdesc" class="form-control" id="desigdesc" name="desigdesc" placeholder="Enter Designation" value="<?= $designation['desigdesc'] ?>">
</div>
<div class="form-group">
    <label for="mobile">Grade</label>
    <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Grade" value="<?= $designation['grade'] ?>">
</div>


<button type="submit" class="btn btn-primary mt-2">Submit</button>
<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>