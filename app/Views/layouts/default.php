<? session_start() ?>
<?php echo view("partial/header"); ?>
<?= view("partial/sidebar"); ?>
<!-- content -->
<?= $this->renderSection('content') ?>
<!-- scripts -->
<footer class="py-4 bg-light mt-4 border-top">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <?= date('Y')?> IsDB Students, Round-49</div>
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
        <?= $this->renderSection('scripts'); ?>
    </body>
</html>


    
