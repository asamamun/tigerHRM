
<div class="d-flex justify-content-between bg-primary border-bottom">
        <button class="btn btn-primary"><h4>Employee Leave:</h4></button>
        <button id="eduBtn" class="btn btn-primary btn-lg"><i class="fa-solid fa-circle-plus"></i></button>
    </div>
    <fieldset id="educationcontainer">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-responsive">
            
    <!-- loop -->
    <?php if ($leave) { ?>
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Leave ID</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Leave Days</th>
                    <th>Approved By</th>
                    <th>Date</th>
                    <th>comments</th>
                    <th>Action</th>
                </tr>
                <!-- <tr>
                <td>SSC</td>
            </tr>
            <tr>
                <td>hsc</td>
            </tr> -->
            </thead>
            <tbody>
                <?php
                foreach ($leave as $leave) {
                ?>
                    <tr>
                        <td><?php echo $leave['eid'] ?></td>
                        <td><?php echo $leave['leave_id'] ?></td>
                        <td><?php echo $leave['leave_from'] ?></td>
                        <td><?php echo $leave['leave_to'] ?></td>
                        <td><?php echo $leave['leave_days'] ?></td>
                        <td><?php echo $leave['approved_by'] ?></td>
                        <td><?php echo $leave['created'] ?></td>
                        <td><?php echo $leave['comments'] ?></td>
                        <td><button><i class="fa-solid fa-pen-to-square"></i></button> | <button class="bg-danger"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php } else { ?>
        <strong class="bg-warning text-center">Leave info not found</strong>
    <?php } ?>