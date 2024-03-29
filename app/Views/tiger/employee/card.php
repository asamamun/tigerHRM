<!DOCTYPE html>
<html lang="en">

<head>
    <? session_start() ?>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css" />

    <title>ID Card</title>
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>/favicon.ico">
    <style>
        @media print {
            #topbar {
                display: none;
                opacity: 0;
            }

            #page1-div {
                font-family: 'Palatino Linotype', Rupali;
            }

            #barcode {
                color: black;
                background-color: #ddd;
            }
        }
    </style>
</head>

<body>

    <div id="topbar" class="btn d-flex justify-content-between">
        <span>
            <img src="<?= base_url() ?>/assets/images/logo/hrm-logo.png" class="rounded-circle ps-1" width="40px" alt="">
            <a class="navbar-brand ps-1 text-info text-uppercase fw-bold" href="<?= base_url('/') ?>"><?= $company['companyname']; ?></a>
        </span>
        <span class="text-muted small" onclick="window.print()"><i class="fa-solid fa-print"></i></span>
    </div>

    <?php
    // composer require chillerlan/php-qrcode
    // composer require picqer/php-barcode-generator

    use chillerlan\QRCode\QRCode;
    use chillerlan\QRCode\QROptions;
    use Picqer\Barcode\BarcodeGeneratorSVG;

    // require_once('./../vendor/autoload.php');

    $options = new QROptions(
        [
            'eccLevel' => QRCode::ECC_L,
            'outputType' => QRCode::OUTPUT_MARKUP_SVG,
            'version' => 5,
        ]
    );

    // qrcode

    //    START Generate EMP CARD info
    $companyid = $company['id'];
    $empid = $employee['empid'];
    $companyid = str_pad($companyid, 2, "0", STR_PAD_LEFT);
    $empid = str_pad($empid, 5, "0", STR_PAD_LEFT);



    // Barcode Generator
    $generator = new BarcodeGeneratorSVG();
    // $barcode = $generator->getBarcode($employee['phone'], $generator::TYPE_CODE_128);
    $barcode = $generator->getBarcode($empid, $generator::TYPE_CODE_128);
    // qrcode
    $qrcode2 = (new QRCode($options))->render($empid);

    ?>
    <!-- END Generate EMP CARD info  -->


    <!-- START EMP Image Loading function  -->
    <?php
    $empimage = "assets/images/cardimages/" . $employee['id'] . ".jpg";
    if (is_file($empimage)) {
        $userphoto = site_url() . $empimage;
    } else {
        $userphoto = site_url() . "assets/images/card/add.png";
    }
    ?>
    <!-- END EMP Image Loading function  -->




    <section class="d-flex justify-content-center ms-5 mt-5 me-5">
        <!-- START EMP ID Frame  -->


        <div class="border border-2 mt-5 me-2 rounded" id="page1-div" style="position:relative;width:355px;height:219px;">
            <img width="352" height="217" src="<?php echo site_url() . '/assets/images/card/CardTemplate.png' ?>" alt="background image" />
            <img style="position:absolute;top:58px;left:244px;white-space:nowrap; padding:2px; background:white; border-radius:5px" width="95px" height="110px" src="<?php echo site_url() . '/assets/images/cardimages/' . $employee['id'] . '.jpg' ?>" alt="background image" />
            <img style="position:absolute;top:172px; left:265px;" width='70' height='22' src="<?php echo site_url() . '/assets/images/card/digital_auth_sign.png' ?>" alt="digital sing" />
            <p style="position:absolute;top:194px;left:242px;white-space:nowrap; font-size:10px; text-decoration: overline;" class="ft00"><b>Signature of Authority</b></p>
            <p style="position:absolute;top:73px;left:19px;white-space:nowrap" class="small"><b>Name:&nbsp;&nbsp;</b><?php echo $employee['fname'] . " " . $employee['lname']; ?></p>
            <img style="position:absolute;top:6px;left:4px;white-space:nowrap" width="40" height="40" src="<?php echo site_url() . '/assets/images/card/hrm-logo.png' ?>" alt="background image" />
            <p style="position:absolute;top:93px;left:19px;white-space:nowrap" class="small"><b>Designation:&nbsp;</b><?php echo $designame; ?></p>
            <p style="position:absolute;top:112px;left:19px;white-space:nowrap" class="small"><b>Emp&nbsp;ID:&nbsp;</b><?php echo str_pad($employee['empid'], 8, "0", STR_PAD_LEFT); ?></p>
            <p style="position:absolute;top:132px;left:19px;white-space:nowrap" class="small"><b>Dept:&nbsp;</b><?php echo $deptname; ?></p>
            <p style="position:absolute;top:151px;left:19px;white-space:nowrap" class="small"><b>Issued&nbsp;Date:&nbsp;</b><?php echo date("F j, Y"); ?></p>
            <p style="position:absolute;top:15px;left:214px;white-space:nowrap" class=" text-primary"><b>IDENTITY&nbsp;CARD</b></p>
            <p style="position:absolute;top:15px;left:51px;white-space:nowrap" class="text-info text-uppercase"><b><?php echo $company['companyname']; ?></b></p>
            <p style="position:absolute;top:35px;left:51px;white-space:nowrap" class="small text-muted">with the best policy</p>
            <barcode style="position:absolute;top:177px;left:10px;white-space:nowrap; height: 30px;" id="barcode" class="small text-dark barcode"><?= $barcode ?></barcode>
            <!-- type="codabar" line-color="black" label-color="black" -->


        </div>
        <!-- backpart of the card -->
        <div class="border border-2 rounded mt-5 ms-2 bg-light" id="page2-div" style="position:relative;width:355px;height:219px;">
            <img width="352" height="217" src="<?php echo site_url() . '/assets/images/card/CardTemplate-back.png' ?>" alt="background image" />
            <img style="position:absolute;top:72px;left:235px;white-space:nowrap; padding:2px; background:white; border:1px solid lightgray; border-radius:5px" width="100px" height="100px" src="<?= $qrcode2 ?>" alt='QR Code' />
            <img class='' style="position:absolute;top:172px; left:42px; border-radius:5px" width='70' height='22' src="<?php echo site_url() . '/assets/images/card/'. $employee['id'] .'_sn'.'.png' ?>" alt="digital sing" />
            <p style="position:absolute;top:195px;left:19px;white-space:nowrap; font-size:10px; text-decoration: overline;" class="ft00"><b>Signature of Card Holder</b></p>
            <p style="position:absolute;top:53px;left:19px;white-space:nowrap" class="small"><span>Blood:&nbsp;&nbsp;</span><?php echo $employee['blood']; ?></p>
            <!-- <img style="position:absolute;top:6px;left:4px;white-space:nowrap" width="40" height="40" src="<?php echo site_url() . '/assets/images/card/hrm-logo.png' ?>" alt="background image"/> -->
            <p style="position:absolute;top:73px;left:19px;white-space:nowrap" class="small"><span>D.O.B:&nbsp;</span><?php echo $employee['dob']; ?></p>
            <p style="position:absolute;top:93px;left:19px;white-space:nowrap" class="small"><span><i class="fa-solid fa-house"></i>&nbsp;</span><?php echo $empaddress['p_address1'] . ', ' . $empaddress['p_dist'] . ', ' . $empaddress['p_post_code']; ?></p>
            <p style="position:absolute;top:112px;left:19px;white-space:nowrap" class="small"><span><i class="fa-solid fa-envelope"></i>&nbsp;</span><?php echo $employee['email']; ?></p>
            <p style="position:absolute;top:132px;left:19px;white-space:nowrap" class="small"><span><i class="fa-solid fa-phone"></i>&nbsp;</span><?php echo $employee['phone']; ?></p>
            <p style="position:absolute;top:151px;left:19px;white-space:nowrap" class="small"><span>Expired&nbsp;Date:&nbsp;</span><?php $date = date('Y') + 3;
                                                                                                                                    echo $tre_yrs = date('F,' . '&#160;' . $date); ?></p>
            <p style="position:absolute;top:15px;left:240px;white-space:nowrap" class=" text-primary text-uppercase"><b><?php echo $company['companyname']; ?></b></p>
            <!-- <p style="position:absolute;top:15px;left:51px;white-space:nowrap" class="text-info text-uppercase"><b><?php //echo $company['companyname']; 
                                                                                                                        ?></b></p> -->
            <!-- <p style="position:absolute;top:35px;left:51px;white-space:nowrap" class="text-muted">with the best policy</p> -->
            <canvas style="position:absolute;top:173px;left:10x;white-space:nowrap; width:230px; height: 36px;" id="barcodeTarget">

        </div>



        <!-- END EMP ID Frame  -->
    </section>

    <?= View('tiger/partial/footer'); ?>
    <!-- START Barcode jquery function -->

    <!-- START Barcode jquery function -->