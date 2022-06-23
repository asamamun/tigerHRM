<?= $this->extend('layouts/default'); ?>


<?= $this->section('content'); ?>



                    <div class="col-xl-6 col-lg-12">
                        <div class="card">
                           
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row align-items-center">
                                            <div class="col-auto">
                                                <label class="sr-only">Name</label>
                                                <input type="text" class="form-control mb-2" placeholder="Add Departments">
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Department List</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th class="width50">
													<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
														<input type="checkbox" class="custom-control-input" id="checkAll" required="">
														<label class="custom-control-label" for="checkAll"></label>
													</div>
												</th>
                                                <th>Department Names</th>
                                                <!-- <th>NAME</th>
                                                <th>Email</th>
                                                <th>Date</th>
                                                <th>Status</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
													<div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
														<input type="checkbox" class="custom-control-input" id="customCheckBox2" required="">
														<label class="custom-control-label" for="customCheckBox2"></label>
													</div>
												</td>
                                                <td>IT Officers</td>
                                                <td></td>
                                               
                                                <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td>
                                                <td>
													<div class="d-flex">
														<a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
														<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            
											
										</tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        
					
                        

</div>
<?= view("partial/flashmessage"); ?>

<?= $this->endSection(); ?>
