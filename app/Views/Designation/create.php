<?= $this->extend('layouts/default'); ?>

<?= $this->section('contents'); ?>
<!-- create customer form -->
<div>
    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>        
        </div>
    <?php endif; ?>
</div>
<!-- new customer form -->
<div class="card-header d-flex justify-content-between">
                <h3 class="card-title">Designation</h3>
                <div class="card-options">
                    <a href="<?= base_url('/Designation'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-left"></i> BACK</a>
                   
                </div>
            </div>
<?php echo form_open('designation/create'); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
</div>
<div class="form-group">
    <label for="desigdesc">Desigdesc</label>
    <input type="desigdesc" class="form-control" id="desigdesc" name="desigdesc" placeholder="Enter desigdesc">
</div>
<div class="form-group">
    <label for="grade">Mobile</label>
    <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Grade">
</div>

<button type="submit" class="btn btn-primary mt-2">Submit</button>
<button type="reset" class="btn btn-danger mt-2">Reset</button>

<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>