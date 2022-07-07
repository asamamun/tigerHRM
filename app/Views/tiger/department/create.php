 <?= $this->extend('tiger/layouts/default'); ?>
 <?= $this->Section('content') ?>
 <?= view("tiger/partial/flashmessage"); ?>

 <div class="container my-5">
     <div class="row">
         <form action="<?= base_url('tiger/department-store') ?>" method="POST">
             <?= csrf_field() ?>

             <div class="col-12">
                 <div class="my-3 text-center">
                     <h4>Add New Department
                         <hr class="text-denger">
                     </h4>
                 </div>
                 <div class="card rounded">
                     <div class="card-body">
                         <div class="row mb-4">
                             <div class="col-sm-4">

                                 <a href="<?= base_url('tiger/department') ?>" class="btn btn-danger float-left">Back</a>

                             </div>
                             <div class="card-body>" class="row">
                                 <div class="col-sm-12">
                                     <div class="form-group">
                                         <label>Department Name</label>
                                         <input type="text" name="name" class="form-control" placeholder="Enter Department Name">
                                     </div>
                                     <div class="form-group">
                                         <label>Department Description</label>
                                         <textarea name="description" class="form-control" placeholder="Enter Department Description"></textarea>
                                     </div>

                                     <div class="form-group">
                                         <label>Department Phone No</label>

                                         <input type="text" name="phone" class="form-control" placeholder="Enter Department Phon No">
                                     </div>

                                     <div class="form-group">
                                         <label>Department Email </label>

                                         <input type="text" name="email" class="form-control" placeholder="Enter Department  Email">
                                     </div>


                                     <div class="form-group">
                                         <button type="submit" class="btn btn-primary">Submit</button>
                                     </div>


                                 </div>
                             </div>
                         </div>
                     </div>
         </form>
     </div>
 </div>
 </div>



 <?= $this->endSection(); ?>