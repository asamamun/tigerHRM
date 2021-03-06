<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("tiger/partial/flashmessage"); ?>
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
                    <a href="<?= base_url('/tiger/designation'); ?>" class="btn btn-primary btn-sm"><i class="fa-solid fa-arrow-left"></i>BACK</a>
                   
                </div>
            </div>
<?php echo form_open('tiger/designation/create'); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
</div>
<div class="form-group">
    <label for="desigdesc">Designation</label>
    <input type="desigdesc" class="form-control" id="desigdesc" name="desigdesc" placeholder="Enter Designation">
</div>
<div class="form-group">
    <label for="grade">Grade</label>
    <!-- <input type="text" class="form-control" id="grade" name="grade" placeholder="Enter Grade"> -->
    <?php echo form_dropdown('grade',$grades,'5',['class' => 'form-control']); ?>
</div>

<button type="submit" class="btn btn-primary mt-2">Submit</button>
<button type="reset" class="btn btn-danger mt-2">Reset</button>

<?php echo form_close(); ?>

<?= $this->endSection(); ?>

<?= $this->section('scripts'); ?>
<?= $this->endSection(); ?>