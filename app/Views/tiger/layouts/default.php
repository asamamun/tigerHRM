
<?php echo view("tiger/partial/header"); ?>
<?= view("tiger/partial/sidebar"); ?>
<!-- content -->
<?= $this->renderSection('content') ?>
<!-- scripts -->


<footer class="py-4 bg-light mt-5 border-top">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; <?= date('Y') ?> IsDB Students, Round-49</div>
            <div>
                <a href="https://isdbstudents.com" target="_blank">Blog</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="<?php echo base_url() ?>/assets/js/jquery-3.5.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>/assets/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo base_url() ?>/assets/js/datatables-simple-demo.js"></script>


        <script>
            function checkTime(i) {
                if (i < 10) {
                    i = "0" + i
                }; // add zero in front of numbers < 10
                return i;
            }

            function startTime() {
                const today = new Date();

                let h = today.getHours();
                let ampm = (h >= 12) ? "PM" : "AM";
                h = (h - 12) > 0 ? (h - 12): h;
                h = 00 ? 12: h;
                let m = today.getMinutes();
                let s = today.getSeconds();

                h = checkTime(h);
                oh = (h == 00) ? 12: (h);
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('clock').innerHTML = oh + ":" + m + ":" + s + " " + ampm;
                setTimeout(startTime, 1000);
            }


            $(document).ready(function() {
                startTime();
            });
        </script>
      
<?= $this->renderSection('scripts'); ?>
</body>

</html>