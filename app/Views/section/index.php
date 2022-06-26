<?= $this->extend('layouts/default'); ?>
<?= $this->Section('content') ?>
<?= view("partial/flashmessage"); ?>




<div class="content-wrapper">

    


                <br />
                <a href="<?php echo base_url(); ?>/section/add">
                <button class="btn btn-success" ><i class="glyphicon glyphicon-plus"></i> Add Section</button></a>
                <button class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
                <br />
                <br />


                <br />
                <table id="table" class="table sar-table table-bordered sortableTable responsive" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>SL</th>                    
                            <th>Title</th>
                            <th>Description</th>
                            <th>Department</th>
                            
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                //populate table row from departments
                                foreach ($section as $section) {
                                ?>
                        <tr>
                            <td><?=$section['id']?></td>
                            <td><?=$section['name']?></td>
                            <td><?=$section['secdesc']?></td>
                            <td><?=$section['department_id']?></td>
                            <td class="text-center">
        <?= anchor('section/edit'.$section['id'],'Edit',['class' => 'btn btn-primary rounded mx-1']); ?>
                                        <td class="text-center">
                                            <!-- <a href="#" class="btn btn-primary rounded mx-1">Edit</a> -->
                                            <a href="#" class="btn btn-danger rounded mx-1">Delete</a>
                                        </td>
                        </tr>
                        <?php
                    }?>
                    </tbody>

                    
                </table>
        </div>
        </Section>
    </div>
    <div class='clearfix'></div>
</div><!-- /.content-wrapper -->


</body>
</html>


<?= $this->endSection(); ?>