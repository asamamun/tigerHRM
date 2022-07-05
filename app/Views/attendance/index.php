<!DOCTYPE html>
<html>
<head>
	<title>JQuery HTML5 QR Code Scanner using Instascan JS Example - ItSolutionStuff.com</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>    
</head>
<body>
  
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
        console.log(response);
        if(response == "1"){ $("#result").html("attendance logged");}
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