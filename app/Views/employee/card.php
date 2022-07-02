<?= $this->extend('layouts/default'); ?>
<?= $this->section('title'); ?> Dashboard <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>


    <!-- START Generate EMP CARD info  -->
    <?php
    $companyid = $_SESSION["companyinfo"]['id'];
    $plantid = $_SESSION["employeeinfo"]['plantid'];
    $empid = $_SESSION["employeeinfo"]['plantid'];
    $companyid = str_pad($companyid, 2, "0", STR_PAD_LEFT);
    $plantid = str_pad($plantid, 2, "0", STR_PAD_LEFT);
    $empid = str_pad($empid, 5, "0", STR_PAD_LEFT);
    $CardBarCodeID = $companyid . "-" . $plantid . "-" . $empid;
    ?>

    <!-- END Generate EMP CARD info  -->


    <!-- START EMP Image Loading function  -->
    <?php
    $empimage = "assets/images/card/" . $_SESSION["employeeinfo"]['empid'] . ".jpg";
    if (is_file($empimage)) {
        $userphoto = site_url() . $empimage;
    } else {
        $userphoto = site_url() . "assets/images/card/default.png";
    }
    ?>
    <!-- END EMP Image Loading function  -->




    <section class="d-flex justify-content-between mt-5 ms-5">
        <!-- START EMP ID Frame  -->	

        <div class="border border-2 roumded" id="page1-div" style="position:relative;width:355px;height:219px;">
            <img width="352" height="217" src="<?php echo site_url().'/assets/images/card/CardTemplate.png' ?>" alt="background image"/>
            <img style="position:absolute;top:58px;left:244px;white-space:nowrap; padding:2px; background:white; border-radius:5px" width="95px" height="110px" src="<?php echo site_url() . '/assets/images/card/imran.png' ?>" alt="background image"/>
            <p style="position:absolute;top:194px;left:242px;white-space:nowrap; font-size:10px; text-decoration: overline;" class="ft00"><b>Signature of Authority</b></p>     
            <p style="position:absolute;top:73px;left:19px;white-space:nowrap" class="ft00"><b>Name:&#160;&#160;</b><?php echo $_SESSION["employeeinfo"]['fname'] . " " . $_SESSION["employeeinfo"]['lname']; ?></p>
            <img style="position:absolute;top:6px;left:4px;white-space:nowrap" width="40" height="40" src="<?php echo site_url() . '/assets/images/card/hrm-logo.png' ?>" alt="background image"/>
            <p style="position:absolute;top:93px;left:19px;white-space:nowrap" class="ft00"><b>Designation:&#160;</b><?php echo $_SESSION["employeeinfo"]['desigid'] ?></p>
            <p style="position:absolute;top:112px;left:19px;white-space:nowrap" class="ft00"><b>Employ&#160;No.:&#160;</b><?php echo str_pad($_SESSION["employeeinfo"]['empid'], 8, "0", STR_PAD_LEFT); ?></p>
            <p style="position:absolute;top:132px;left:19px;white-space:nowrap" class="ft00"><b>Dept:&#160;</b><?php echo $_SESSION["employeeinfo"]['deptid'] ?></p>
            <p style="position:absolute;top:151px;left:19px;white-space:nowrap" class="ft00"><b>Issued&#160;Date:&#160;</b><?php echo date("F j, Y"); ?></p>
            <p style="position:absolute;top:15px;left:224px;white-space:nowrap" class=" text-primary"><b>IDENTITY&#160;CARD</b></p>
            <p style="position:absolute;top:15px;left:51px;white-space:nowrap" class="text-info text-uppercase"><b><?php echo $_SESSION["companyinfo"]['companyname']; ?></b></p>
            <p style="position:absolute;top:35px;left:51px;white-space:nowrap" class="text-muted">with the best policy</p>
            <canvas style="position:absolute;top:173px;left:10x;white-space:nowrap; width:230px; height: 36px;" id="barcodeTarget">

        </div>

        <!-- END EMP ID Frame  -->			
    </section>
    <?= $this->endSection(); ?>
        <!-- content section end-->

        <?= $this->section('scripts'); ?>
        <script>
         
    /*
     var defaultValues = {
     CODE128 : "Example 1234",
     CODE128A : "EXAMPLE",
     CODE128B : "Example text",
     CODE128C : "12345678",
     EAN : "1234567890128",
     EAN8 : "12345670",
     UPC : "123456789999",
     CODE39 : "EXAMPLE TEXT",
     ITF14 : "10012345000017",
     ITF : "123456",
     MSI : "123456",
     MSI10 : "123456",
     MSI11 : "123456",
     MSI1010 : "123456",
     MSI1110 : "123456",
     pharmacode : "1234"
     };
     
     
     var newBarcode = function() {
     //Convert to boolean
     $("#barcodeTarget").JsBarcode(
     "<?php echo $CardBarCodeID; ?>",
     {
     "format": "CODE128",
     "background":"#FFFFFF",
     "lineColor":"#000000",
     "fontSize": 20,
     "height": 90,
     "width": 230,
     "margin": 5,
     "textMargin": 2,
     "displayValue": true,
     //"font": "font-family: monospace",
     "fontOptions": "bold",
     //"fontOptions": $(".font-option.btn-primary").map(function(){return this.value;}).get().join(" "),
     "textAlign": "center",
     //  "valid":
     })
     }
     //newBarcode();
     // $("#barcodeTarget").JsBarcode("<?php echo $CardBarCodeID ?>", {width: 1, height: 25, fontSize: 20});
     */
    $("#barcodeTarget").JsBarcode("<?php echo $CardBarCodeID ?>", {format: "CODE128", displayValue: true, fontSize: 25, font: "Calibri"});

//JsBarcode("#barcodeTarget", "<?php echo $CardBarCodeID ?>");
</script>
        
        <?= $this->endSection(); ?>

<!-- START Barcode jquery function -->

<!-- START Barcode jquery function -->