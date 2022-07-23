<?= $this->extend('tiger/layouts/default'); ?>
<?= $this->section('title'); ?> Attachment <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>


<div class="container my-5">
    <div class="row">
        <form action="" enctype="multipart/form-data" method="POST">
            <?= csrf_field() ?>
            <label for="my_file">My File Upload</label>
  <br>
	<input type="file" name="my_file" id="my_file">

        </form>
    </div>
</div>



<?= $this->endSection(); ?>