<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<!--  -->
<span class="btn btn-info"><h1>Employee Detail Information</h1></span>
<?= view("partial/flashmessage"); ?>

<?php
if (!count($emp)) {
?>
    <div class="alert alert-info" role="alert">Employee info not found</div>
<?php
} else {
?>
<!-- ============================= -->
    <!-- personal information start -->
    <?= view('employee/personalinfo') ?>
    <!-- personal information  end-->

    <!-- address start -->
    <?= view('employee/address') ?>
    <!-- address end -->

    <!-- education start -->
    <?= view('employee/education') ?>
    <!-- education end -->

    <!-- Experience start -->
    <?= view('employee/experience') ?>
    <!-- Experience end-->

    <!-- ============================= -->
<?php
}
?>
<!--  -->
<?= $this->endSection() ?>

<?= $this->Section('scripts') ?>
<script>
    $(document).ready(function() {
        $("#educationcontainer,#addresscontainer, #experiencecontainer").hide();


        $("#editBtn").click(function() {
            // alert(5)
            $t = $(this);
            $("#formcontainer").prop('disabled', false);
            $t.hide(200);
        });
        //cancel button click
        $('#cancelBtn').click(function() {
            $("#formcontainer").prop('disabled', true);
            $("#editBtn").show(200);
        });

        // adress formcontainer
        $("#adrBtn").click(function() {
            // alert(5)
            $t = $(this);
            $("#addresscontainer").prop('disabled', false);
            $t.hide(200);
        });
        //cancel button click
        $('#adrcancelBtn').click(function() {
            $("#addresscontainer").prop('disabled', true);
            $("#adrBtn").show(200);
        });


        //show adress formcontainer
        $("#adrBtn").click(function() {
            $("#addresscontainer").show(500);
        });
        $("#adrcancelBtn").click(function() {
            $("#addresscontainer").hide(500);
        });
        //show edication formcontainer
        $("#eduBtn").click(function() {
            $("#educationcontainer").show(500);
        });
        $("#eduCancelBtn").click(function() {
            $("#educationcontainer").hide(500);
        });



        //show experience formcontainer
        $("#expBtn").click(function() {
            $("#experiencecontainer").show(500);
        });
        $("#expCancelBtn").click(function() {
            $("#experiencecontainer").hide(500);
        });



    });
</script>
<?= $this->endSection() ?>