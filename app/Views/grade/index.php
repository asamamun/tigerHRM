<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>
<div class="content-wrapper">

    <br>

    <a href="<?php echo base_url(); ?>/grade/add">
                <button class="btn btn-success" ><i class="glyphicon glyphicon-plus"></i> Add Grade</button></a>
    

    <table id="grad" class="table sar-table table-bordered sortableTable responsive" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Basic</th>
                <th>House Rent</th>
                <th>Medical Allowance</th>
                <th>Other</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($emp_grade as $grade) {
            ?>
            <tr>
                            <td><?=$grade['gradeid']?></td>
                            <td><?=$grade['gradename']?></td>
                            <td><?=$grade['basic']?></td>
                            <td><?=$grade['houserent']?></td>
                            <td><?=$grade['medical']?></td>
                            <td><?=$grade['other']?></td>
                            <td class="text-center">
        <?= anchor('grade/edit'.$grade['id'],'Edit',['class' => 'btn btn-primary rounded mx-1']); ?>
                                        <td class="text-center">
                                            <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                            <a href="#" class="btn btn-danger rounded mx-1">Delete</a>
                                        </td>
                        </tr>
                        <?php
                    }?>
        </tbody>
    </table>




    </body>

    </html>
    <?= $this->endSection(); ?>