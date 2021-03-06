<?= view('tiger/partial/header') ?>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<!-- hrbbg.jpg -->
<section id="wrapper" class="login-register login-sidebar" style="background-image:url(assets/images/background/HRM.png);">

    <div class="login-box card">

        <br>
        <span class="text-center fw-bolnd text-light btn btn-info rounded">
            <p class="text-white m-1"><?= date("l, jS \of F Y"); ?></p>
            <p id="clock" class="text-white m-1"><?= date("h:i:sa"); ?></p>
        </span>
        <div class="card-body loginpage">

            <?php echo form_open("login"); ?>
            <a href="javascript:void(0)" class="text-center db"><br /><img class="rounded-circle border border-info" src="assets/images/logo/hrm-logo.png" width="100px" alt="Home" /></a>
            <a href="javascript:void(0)" class="text-center db"><br /><img class="" src="assets/images/logo/hrinv.png" width="175px" alt="Home" /></a>
            <div class="form-group m-t-20">
                <div class="col-xs-12">
                    <input class="form-control text-center" type="email" id="email" name="email" required placeholder="Email" value="<?= old('email') ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input class="form-control text-center" type="password" id="password" name="password" required placeholder="Password">
                </div>
            </div>
            <div class=" text-center">
                <input type="checkbox" value="" id="form2Example3" name="remember" class="text-center">
                <label class="form-check-label" for="remember-me">Remember Me</label>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-success text-uppercase py-1 " type="submit">Log In</button>
                </div>
                <p class="small mt-2 pt-1 mb-0">Don't have an account? <a href="register" class="link-danger">Register</a> now</p>
            </div>
            <?php echo form_close() ?>
            <hr>
            <?php echo anchor("attendance", "Attendance", ['class' => "btn btn-primary"]) ?>
        </div>
    </div>
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url() ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>/assets/js/jquery-3.5.1.js"></script>
<script>
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }; // add zero in front of numbers < 10
        return i;
    }

    function startTime() {
        const today = new Date();

        let y = today.getFullYear();
        let mo = today.getMonth();
        let d = today.getDay();
        let h = today.getHours();
        let ampm = (h >= 12) ? "PM" : "AM";
        h = (h - 12) > 0 ? (h - 12) : h;
        let m = today.getMinutes();
        let s = today.getSeconds();

        mo = checkTime(mo);
        d = checkTime(d);
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('clock').innerHTML = h + ":" + m + ":" + s + " " + ampm;
        setTimeout(startTime, 1000);
    }


    $(document).ready(function() {
        startTime();
    });
</script>
</body>

</html>