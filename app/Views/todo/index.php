<?= $this->extend('layouts/default'); ?>
<?= $this->section('title'); ?> Dashboard <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>
<!-- ===================================================================== -->

<div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">To Do List</h4>
                    </div>
                    <h6 class="card-subtitle ps-3 btn btn-info border-top">List of your next task to complete</h6>
                    <div class="card-body">
                        <div class="to-do-widget m-t-20" style="height:550px;overflow-y:scroll">
                            <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                               <?php foreach($todo as $value): ?>
                                                <li class="list-group-item" data-role="task">
                                                   <?php if($value['value'] == '1'){ ?>
                                                    <div class="checkbox checkbox-info">
                                                        <input class="to-do" data-id="<?php echo $value['id']?>" data-value="0" type="checkbox" id="<?php echo $value['id']?>" >
                                                        <label for="<?php echo $value['id']?>"><span><?php echo $value['data']; ?></span></label>
                                                    </div>
                                                    <?php } else { ?>
                                                    <div class="checkbox checkbox-info">
                                                        <input class="to-do" data-id="<?php echo $value['id']?>" data-value="1" type="checkbox" id="<?php echo $value['id']?>" checked>
                                                        <label class="task-done" for="<?php echo $value['id']?>"><span><?php echo $value['data']; ?></span></label>
                                                    </div> 
                                                    <?php } ?>                                                   
                                                </li>

                                                <?php endforeach; ?>
                                            </ul>         
                        </div>
                        <div class="new-todo">
                            <form method="post" action="add_todo" enctype="multipart/form-data" id="add_todo">
                                <div class="input-group">
                                    <input type="text" name="todo_data" class="form-control" style="border: 1px solid #fff !IMPORTANT;" placeholder="Enter New Task...">
                                    <span class="input-group-btn">

                                        <button type="submit" class="btn btn-success todo-submit"><i class="fa fa-plus"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!-- ===================================================================== -->

<?= $this->endSection(); ?>
        <!-- content section end-->

        <?= $this->section('scripts'); ?>
        <script>
            // $(document).ready(function() {
            //     $('#users').DataTable();
            // } );
        </script>
        <?= $this->endSection(); ?>