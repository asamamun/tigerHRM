<?= $this->extend('layouts/default'); ?>
 <?= $this->Section('content') ?>
 <?= view("partial/flashmessage"); ?>

 <div class="container my-5">
     <div class="row">
     <form action="<?= base_url('dashbord/dashboard') ?>" method="POST"> <?= csrf_field() ?>
                            <!-- <form method="post" action="add_todo" enctype="multipart/form-data" id="add_todo"> -->
                                <div class="input-group">
                                    <input type="text" name="data" class="form-control" style="border: 1px solid #fff !IMPORTANT;" placeholder="Enter New Task...">
                                    <span class="input-group-btn">

                                        <button type="submit" class="btn btn-success todo-submit"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </form>
     </div>
 </div>
 </div>



 <?= $this->endSection(); ?>