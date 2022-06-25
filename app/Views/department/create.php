 <?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>

<div class="container my-5">
    <div class="row">
    <form action="<?= base_url('department-store')?>"  method = "POST">
                         
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
                      
                                    <a href="<?= base_url('department')?>"class="btn btn-danger float-left" >Back</a>
                
                        </div>
                        <div class="card-body>"
                        

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Department Name</label>
                                    <input type="text" name="dep_name " class="form-control" placeholder="Enter Department Name">
                                   
                             </div>                              
                             <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Department Phon No</label>
                                      
                                    <input type="text" name="dep_phon" class="form-control" placeholder="Enter Department Phon No">    
                             </div>                                                      
                 
                        <div class="form-group">
                                    <label>Department Email </label>
                                      
                                    <input type="text" name="email" class="form-control" placeholder="Enter Department  Email">    
                         </div>  

                  <div class ="col-md-12">
                  <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  
                  </div>
                  </div>          
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