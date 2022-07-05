<title>ID Card</title>
<?= View('partial/header'); ?>

<div class="btn d-flex justify-content-between">
    <span>
        <img src="<?= base_url() ?>/assets/images/logo/hrm-logo.png" class="rounded-circle ps-1" width="40px" alt="">
        <?php echo anchor('/', "Tiger HRM", ['class' => 'navbar-brand text-small ps-1 text-info text-uppercase fw-bold']); ?>
    </span>
    <span class="text-muted small" onclick="window.print()"><i class="fa-solid fa-print"></i></span>
</div>

<?php
// composer require chillerlan/php-qrcode
// QR Code
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;

require_once('./../vendor/autoload.php');

$options = new QROptions(
    [
        'eccLevel' => QRCode::ECC_L,
        'outputType' => QRCode::OUTPUT_MARKUP_SVG,
        'version' => 5,
    ]
);


//    START Generate EMP CARD info

$companyid = $company['id'];
$plantid = $employee['plantid'];
$empid = $employee['empid'];
$companyid = str_pad($companyid, 2, "0", STR_PAD_LEFT);
$plantid = str_pad($plantid, 2, "0", STR_PAD_LEFT);
$empid = str_pad($empid, 5, "0", STR_PAD_LEFT);

$qrcode = (new QRCode($options))->render($empid);
$qrcode2 = (new QRCode($options))->render($empid);
?>

<!-- END Generate EMP CARD info  -->


<!-- START EMP Image Loading function  -->
<?php
$empimage = "assets/images/card/" . $employee['empid'] . ".jpg";
if (is_file($empimage)) {
    $userphoto = site_url() . $empimage;
} else {
    $userphoto = site_url() . "assets/images/card/default.png";
}
?>
<!-- END EMP Image Loading function  -->




<section class="d-flex justify-content-center ms-5 mt-5 me-5">
    <!-- START EMP ID Frame  -->


    <div class="border border-2 mt-5 me-2 roumded" id="page1-div" style="position:relative;width:355px;height:219px;">
        <img width="352" height="217" src="<?php echo site_url() . '/assets/images/card/CardTemplate.png' ?>" alt="background image" />
        <img style="position:absolute;top:58px;left:244px;white-space:nowrap; padding:2px; background:white; border-radius:5px" width="95px" height="110px" src="<?php echo site_url() . '/assets/images/cardimages/' . $employee['id'] . '.jpg' ?>" alt="background image" />
        <img style="position:absolute;top:172px; left:265px;" width='70' height='22' src="<?php echo site_url() . '/assets/images/card/digital_auth_sign.png' ?>" alt="digital sing" />
        <p style="position:absolute;top:194px;left:242px;white-space:nowrap; font-size:10px; text-decoration: overline;" class="ft00"><b>Signature of Authority</b></p>
        <p style="position:absolute;top:73px;left:19px;white-space:nowrap" class="small"><b>Name:&#160;&#160;</b><?php echo $employee['fname'] . " " . $employee['lname']; ?></p>
        <img style="position:absolute;top:6px;left:4px;white-space:nowrap" width="40" height="40" src="<?php echo site_url() . '/assets/images/card/hrm-logo.png' ?>" alt="background image" />
        <p style="position:absolute;top:93px;left:19px;white-space:nowrap" class="small"><b>Designation:&#160;</b><?php echo $designame; ?></p>
        <p style="position:absolute;top:112px;left:19px;white-space:nowrap" class="small"><b>Emp&#160;ID:&#160;</b><?php echo str_pad($employee['empid'], 8, "0", STR_PAD_LEFT); ?></p>
        <p style="position:absolute;top:132px;left:19px;white-space:nowrap" class="small"><b>Dept:&#160;</b><?php echo $deptname; ?></p>
        <p style="position:absolute;top:151px;left:19px;white-space:nowrap" class="small"><b>Issued&#160;Date:&#160;</b><?php echo date("F j, Y"); ?></p>
        <p style="position:absolute;top:15px;left:224px;white-space:nowrap" class=" text-primary"><b>IDENTITY&#160;CARD</b></p>
        <p style="position:absolute;top:15px;left:51px;white-space:nowrap" class="text-info text-uppercase"><b><?php echo $company['companyname']; ?></b></p>
        <p style="position:absolute;top:35px;left:51px;white-space:nowrap" class="small text-muted">with the best policy</p>
        <img style="position:absolute;top:173px;left:20px;white-space:nowrap; height: 36px;" src="<?= $qrcode ?>" alt='QR Code' />

    </div>
    <!-- backpart of the card -->
    <div class="border border-2 roumded mt-5 ms-2 bg-light" id="page1-div" style="position:relative;width:355px;height:219px;">
        <img width="352" height="217" src="<?php echo site_url() . '/assets/images/card/CardTemplate-back.png' ?>" alt="background image" />
        <img style="position:absolute;top:74px;left:244px;white-space:nowrap; padding:2px; background:white; border:1px solid lightgray; border-radius:5px" width="85px" height="95px" src="<?= $qrcode2 ?>" alt='QR Code' />
        <img class='' style="position:absolute;top:172px; left:42px; border-radius:5px" width='70' height='22' src="<?php echo site_url() . '/assets/images/card/sing_1.png' ?>" alt="digital sing" />
        <p style="position:absolute;top:195px;left:19px;white-space:nowrap; font-size:10px; text-decoration: overline;" class="ft00"><b>Signature of Card Holder</b></p>
        <p style="position:absolute;top:53px;left:19px;white-space:nowrap" class="small"><span>Blood:&#160;&#160;</span><?php echo $employee['blood']; ?></p>
        <!-- <img style="position:absolute;top:6px;left:4px;white-space:nowrap" width="40" height="40" src="<?php echo site_url() . '/assets/images/card/hrm-logo.png' ?>" alt="background image"/> -->
        <p style="position:absolute;top:73px;left:19px;white-space:nowrap" class="small"><span>D.O.B:&#160;</span><?php echo $employee['dob']; ?></p>
        <p style="position:absolute;top:93px;left:19px;white-space:nowrap" class="small"><span><i class="fa-solid fa-house"></i>&#160;</span><?php echo $empaddress['p_address1'] . ',' . $empaddress['p_dist'] . ',' . $empaddress['p_post_code']; ?></p>
        <p style="position:absolute;top:112px;left:19px;white-space:nowrap" class="small"><span><i class="fa-solid fa-envelope"></i>&#160;</span><?php echo $employee['email']; ?></p>
        <p style="position:absolute;top:132px;left:19px;white-space:nowrap" class="small"><span><i class="fa-solid fa-phone"></i>&#160;</span><?php echo $employee['phone']; ?></p>
        <p style="position:absolute;top:151px;left:19px;white-space:nowrap" class="small"><span>Expired&#160;Date:&#160;</span><?php $date = date('Y') + 3;
                                                                                                                                echo $tre_yrs = date('F,' . '&#160;' . $date); ?></p>
        <p style="position:absolute;top:15px;left:240px;white-space:nowrap" class=" text-primary text-uppercase"><b><?php echo $company['companyname']; ?></b></p>
        <!-- <p style="position:absolute;top:15px;left:51px;white-space:nowrap" class="text-info text-uppercase"><b><?php //echo $company['companyname']; 
                                                                                                                    ?></b></p> -->
        <!-- <p style="position:absolute;top:35px;left:51px;white-space:nowrap" class="text-muted">with the best policy</p> -->
        <canvas style="position:absolute;top:173px;left:10x;white-space:nowrap; width:230px; height: 36px;" id="barcodeTarget">

    </div>


    <!-- END EMP ID Frame  -->
</section>

<?= View('partial/footer'); ?>
<!-- START Barcode jquery function -->

<!-- START Barcode jquery function -->