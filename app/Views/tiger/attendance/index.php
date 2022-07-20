<!DOCTYPE html>
<html>
<head>
	<title>JQuery HTML5 QR Code Scanner using Instascan JS Example - ItSolutionStuff.com</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>/assets/js/instascan.min.js"></script>    
</head>
<body>
  <div>
    <pre>
     attendance menu
-attendance report(button: daily, monthly, individual)
daily - input(date), submit
monthly - month, year, submit
individual - empid , startdate, enddate, submit
between and sql 
    </pre>
  </div>
    <h1>JQuery HTML5 QR Code Scanner using Instascan JS Example - ItSolutionStuff.com</h1>

    <input id="csrf" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
    <select name="type" id="type">
        <option value="in">In</option>
        <option value="out">Out</option>
    </select>
    <video id="preview"></video>
    <div id="result"></div>
    <script type="text/javascript">
      let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
        $("#result").html("");
        $empid = content;
console.log($empid);
        //send employee id to attendance table
        $url = "<?= base_url() ?>/attendance";

        // CSRF Hash
       var csrfName = $('#csrf').attr('name'); // CSRF Token name
       var csrfHash = $('#csrf').val(); // CSRF hash
$.ajax({
    type: "post",
    url: $url,
    data: { 
        [csrfName]: csrfHash,
        type: $("#type").val(), 
        empid: $empid },
    success: function (response) {
      response = JSON.parse(response);
        console.log(response);
        alert(response.csrf_token);
        $('#csrf').val(response.csrf_token);        
        if(response != "0"){ $("#result").html("attendance logged");}
        else{ $("#result").html("attendance not logged"); }
    }
});
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });
    </script>
   
</body>
</html>