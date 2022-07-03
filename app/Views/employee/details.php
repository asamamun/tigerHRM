<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<!--  -->
<span class="btn btn-info">
    <h1>Employee Detail Information</h1>
</span>
<?= view("partial/flashmessage"); ?>
<?php
if (!count($emp)) {
?>
    <div class="alert alert-info" role="alert">Employee not found</div>
<?php
} else {
?>


    <!-- personal information start -->
    <div class="row bg-dark">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active link-light" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Personal Information</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Address</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="experience-tab" data-bs-toggle="tab" data-bs-target="#experience-tab-pane" type="button" role="tab" aria-controls="experience-tab-pane" aria-selected="false">Work Experience</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="leave-tab" data-bs-toggle="tab" data-bs-target="#leave-tab-pane" type="button" role="tab" aria-controls="leave-tab-pane" aria-selected="false">Leave</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="picture-tab" data-bs-toggle="tab" data-bs-target="#picture-tab-pane" type="button" role="tab" aria-controls="picture-tab-pane" aria-selected="false">Profile Picture</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="leave-tab" data-bs-toggle="tab" data-bs-target="#attachment-tab-pane" type="button" role="tab" aria-controls="attachment-tab-pane" aria-selected="false">Attachment</button>
        </li>
        <li class="nav-item ink-light" role="presentation">
            <button class="nav-link link-light" id="attachment-tab" data-bs-toggle="tab" data-bs-target="#attendance-tab-pane" type="button" role="tab" aria-controls="attendance-tab-pane" aria-selected="false">Attendance</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="ahievement-tab" data-bs-toggle="tab" data-bs-target="#ahievement-tab-pane" type="button" role="tab" aria-controls="ahievement-tab-pane" aria-selected="false">Ahievement</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link link-light" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Contact</button>
        </li>
    </ul>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
            <!-- personal information start -->
            <?= view('employee/personalinfo') ?>
            <!-- personal information  end-->
        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
            <!-- address start -->
            <?= view('employee/address') ?>
            <!-- address end -->
        </div>
        <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
            <!-- education start -->
            <?= view('employee/education') ?>
            <!-- education end -->
        </div>
        <div class="tab-pane fade" id="experience-tab-pane" role="tabpanel" aria-labelledby="experience-tab" tabindex="0">
            <!-- experience start -->
            <?= view('employee/experience') ?>
            <!-- experience end -->
        </div>
        <div class="tab-pane fade" id="leave-tab-pane" role="tabpanel" aria-labelledby="leave-tab" tabindex="0">
            <!-- leave start -->
            <?= view('employee/leave') ?>
            <!-- leave end -->
        </div>
        <div class="tab-pane fade" id="picture-tab-pane" role="tabpanel" aria-labelledby="picture-tab" tabindex="0">
            <!-- leave start -->
            picture
            <!-- leave end -->
        </div>
        <!-- ================================================ -->


        <!-- Experience start -->



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
            // cancel button click
            $('#cancelBtn').click(function() {
                $("#formcontainer").prop('disabled', true);
                $("#editBtn").show(200);
            });
            // ==========================================
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


            // show adress formcontainer
            $("#adrBtn").click(function() {
                $("#addresscontainer").show(500);
            });
            $("#adrcancelBtn").click(function() {
                $("#addresscontainer").hide(500);
            });
            // show edication formcontainer
            $("#eduBtn").click(function() {
                $("#educationcontainer").show(500);
            });
            $("#eduCancelBtn").click(function() {
                $("#educationcontainer").hide(500);
            });



            // show experience formcontainer
            $("#expBtn").click(function() {
                $("#experiencecontainer").show(500);
            });
            $("#expCancelBtn").click(function() {
                $("#experiencecontainer").hide(500);
            });



        });
    </script>
    <?= $this->endSection() ?>