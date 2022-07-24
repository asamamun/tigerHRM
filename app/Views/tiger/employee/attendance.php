
<div class="d-flex justify-content-between bg-primary border-bottom">
        <button class="btn btn-primary"><h4>Employee attendance:</h4></button>
       
    </div>
    <div class="d-flex justify-content-between bg-primary border-bottom">
    <button class="btn btn-primary">
        <h4 class=''>Attendance For
            <?= $emp['fname'] . '&nbsp;' . $emp['mname'] . $emp['lname'] . '&nbsp(' . $emp['empid'] . ')'; ?>
    </button>
    <hr class="text-denger">
    </h4>
</div>
    <fieldset>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-responsive">
            
    <!-- loop -->
    <?php if ($attens) { ?>
 
        <table class="table table-primary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Employee ID</th>
                    <th>Type</th>
                    <th>Time</th>
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
                foreach ($attens as $atten) {
                ?>
                    <tr>
                        <td><?php echo $atten['id'] ?></td>
                        <td><?php echo $atten['empid'] ?></td>
                        <td><?php echo $atten['type'] ?></td>
                        <td><?php echo $atten['datetime'] ?></td>
                        
                        <td><button><i class="fa-solid fa-pen-to-square"></i></button> | <button class="bg-danger"><i class="fa-solid fa-trash"></i></button></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php } else { ?>
        <strong class="bg-warning text-center">attendance info not found</strong>
    <?php } ?>