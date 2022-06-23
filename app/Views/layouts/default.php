<?php echo view("partial/header"); ?>
<?= view("partial/sidebar"); ?>


<!-- content -->
<?= $this->renderSection('content') ?>
<!-- scripts -->
<?= $this->renderSection('scripts'); ?>
<?= $this->include("partial/footer");?>


    
