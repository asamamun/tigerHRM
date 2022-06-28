<!-- 
######################################################################################################

Developed by          : Muhammad Anwar Hossen, WPSI, R-26, IDB-BISEW
View Name             : CardPrintView (Employee ID Card)
Mobile No             : ++01923-020000
Email Address         : anwardote@gmail.com

#######################################################################################################

-->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="" xml:lang="">
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <style type="text/css">
            <!--
            p {margin: 0; padding: 0;}	.ft00{font-size:9px;font-family:Times;color:#2b394c;}
            .ft01{font-size:9px;font-family:Times;color:#2b394c;}
            .ft02{font-size:12px;font-family:Times;color:#2b394c;}
            .ft03{font-size:8px;font-family:Times;color:#2b394c;}
            -->
        </style>

        <!-- JS file for barcode dependence  -->		
        <script src="<?php echo site_url(); ?>assets/jquery/jquery-2.1.4.min.js"></script>
        <script src="<?php echo site_url(); ?>assets/upload/emp_card/JsBarcode.all.min.js"></script>	
        <!-- END JS file for barcode dependence  -->		
    </head>


    <!-- START Generate EMP CARD info  -->
    <?php
    $companyid = $emp_company_info[0]->id;
    $plantid = $emp_card_info[0]->plantid;
    $empid = $emp_card_info[0]->id;
    $companyid = str_pad($companyid, 2, "0", STR_PAD_LEFT);
    $plantid = str_pad($plantid, 2, "0", STR_PAD_LEFT);
    $empid = str_pad($empid, 5, "0", STR_PAD_LEFT);
    $CardBarCodeID = $companyid . "-" . $plantid . "-" . $empid;
    ?>

    <!-- END Generate EMP CARD info  -->


    <!-- START EMP Image Loading function  -->
    <?php
    $empimage = "assets/upload/emp_photo/" . $emp_card_info[0]->empid . ".jpg";
    if (is_file($empimage)) {
        $userphoto = site_url() . $empimage;
    } else {
        $userphoto = site_url() . "assets/upload/emp_photo/default.png";
    }
    ?>
    <!-- END EMP Image Loading function  -->




    <body bgcolor="#A0A0A0" vlink="blue" link="blue">
        <!-- START EMP ID Frame  -->	

        <div id="page1-div" style="position:relative;width:352px;height:217px;">
            <img width="352" height="217" src="<?php echo site_url() . 'assets/upload/emp_card/CardTemplate.png' ?>" alt="background image"/>
            <img style="position:absolute;top:60px;left:244px;white-space:nowrap; padding:2px; background:white; border-radius:2px" width="95px" height="110px" src="<?php echo $userphoto; ?>" alt="background image"/>
            <p style="position:absolute;top:197px;left:242px;white-space:nowrap; font-size:10px; text-decoration: overline;" class="ft00"><b>Signature of Authority</b></p>     
            <p style="position:absolute;top:78px;left:19px;white-space:nowrap" class="ft00"><b>Name:&#160;&#160;</b><?php echo $emp_card_info[0]->fname . " " . $emp_card_info[0]->mname . " " . $emp_card_info[0]->lname ?></p>
            <img style="position:absolute;top:6px;left:4px;white-space:nowrap" width="40" height="40" src="<?php echo site_url() . 'assets/upload/emp_card/companylogo.png' ?>" alt="background image"/>
            <p style="position:absolute;top:98px;left:19px;white-space:nowrap" class="ft00"><b>Designation:&#160;</b><?php echo $emp_card_info[0]->designame ?></p>
            <p style="position:absolute;top:117px;left:19px;white-space:nowrap" class="ft00"><b>Employ&#160;No.:&#160;</b><?php echo str_pad($emp_card_info[0]->empid, 8, "0", STR_PAD_LEFT); ?></p>
            <p style="position:absolute;top:137px;left:19px;white-space:nowrap" class="ft00"><b>Dept:&#160;</b><?php echo $emp_card_info[0]->deptname ?></p>
            <p style="position:absolute;top:156px;left:19px;white-space:nowrap" class="ft00"><b>Issued&#160;Date:&#160;</b><?php echo date("F j, Y"); ?></p>
            <p style="position:absolute;top:20px;left:244px;white-space:nowrap" class="ft02"><b>IDENTITY&#160;CARD</b></p>
            <p style="position:absolute;top:17px;left:51px;white-space:nowrap" class="ft02"><b><?php echo $emp_company_info[0]->companyname ?></b></p>
            <p style="position:absolute;top:35px;left:51px;white-space:nowrap" class="ft03">Leading the Digital Entertainment Revolution</p>
            <canvas style="position:absolute;top:173px;left:10x;white-space:nowrap; width:230px; height: 36px;" id="barcodeTarget">

        </div>

        <!-- END EMP ID Frame  -->			
    </body>
</html>


<!-- START Barcode jquery function -->
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
<!-- START Barcode jquery function -->