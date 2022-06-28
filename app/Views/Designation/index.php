<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <title></title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="my-3 text-center">
                    <h4>Designation
                        <hr class="text-denger">
                    </h4>

                </div>
                <div class="card rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                        <div class="col-sm-2">
                      
                             <a href="<?= base_url('/designation/add')?>"class="btn btn-success float-left" >Add Designation</a>
  
                        </div>
                            <div class="col-sm-10">
                                <div class="text-sm-end">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Records" name='q'
                                            value='' aria-describedby="button-addon2">
                                        <button class="btn btn-primary" type="Submit" id="button-addon2">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th style="min-width: 10px">Name</th>
                                        <th>Designation </th>
                                        <th>Grade </th>
                                        
                                        <th class="text-center" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                    <?php
                                //populate table row from departments
                                foreach ($designation as $des) {
                                ?>
                        <tr>
                            <td><?=$des['name']?></td>
                            <td><?=$des['desigdesc']?></td>
                            <td><?=$des['grade']?></td>
                            
                            <td class="text-center">
        <?= anchor('designation/edit/'.$des['id'],'Edit',['class' => 'btn btn-primary rounded mx-1']); ?>
                                        <td class="text-center">
                                            <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                            <a href="<?=base_url('designation/delete/'.$des['id'])?>" class="btn btn-danger rounded mx-1">Delete</a>
                                        </td>
                        </tr>
                        <?php
                    }?>
                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>



<?= $this->endSection(); ?>