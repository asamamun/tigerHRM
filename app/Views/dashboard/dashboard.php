<?= $this->extend('layouts/default'); ?>
<?= $this->section('title');?> Tiger HRM <?= $this->endSection();?>
<!-- content section start -->
<?= $this->section('content'); ?>
<h1>Welcome to</h1>
<h1>Dashboard Tiger HRM</h1>


<?= $this->endSection(); ?>
<!-- content section end-->

<?= $this->section('scripts'); ?>
<script>
    // $(document).ready(function() {
    //     $('#users').DataTable();
    // } );
</script>
<?= $this->endSection(); ?>
