<!DOCTYPE html>
<html>

<head>
  <title>QR Code Scanner</title>
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/js/instascan.min.js"></script>
</head>

<body class="">
  <div>
    <!-- <pre>
     attendance menu
-attendance report(button: daily, monthly, individual)
daily - input(date), submit
monthly - month, year, submit
individual - empid , startdate, enddate, submit
between and sql 
    </pre> -->
  </div>
  <div class="container">
    <h1>Employee Attendance</h1>
<div class="row">
  <div class="col-6">
  <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
  <input value="in" type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
  <label class="btn btn-outline-primary" for="btnradio1">In</label>

  <input value="out" type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
  <label class="btn btn-outline-primary" for="btnradio2">Out</label>
</div>
  <div class="rounded-3" id="video"><video class="rounded" width="80%" height="80%" id="preview"></video></div>
  <div class="fw-bold"> <input id="csrf" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
    </div>

  </div>
  <div class="col-6">
  <div class="rounded">
   <h1 class="bg-info">Attendance Log</h1> 
    <ul class="list-group" id="attlog"></ul>
      </div>
  </div>
</div>

  </div>




  <script type="text/javascript">
    let scanner = new Instascan.Scanner({
      video: document.getElementById('preview')
    });
    scanner.addListener('scan', function(content) {
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
          type: $('input[name="btnradio"]:checked').val(),
          empid: $empid
        },
        success: function(response) {
          response = JSON.parse(response);
          console.log(response);
          // alert(response.csrf_token);
          $('#csrf').val(response.csrf_token);
          if (response != "0") {
            $("#result").html("attendance logged");
            $("#attlog").append('<li class="list-group-item">Name: '+response.name+'('+response.empid +'),'+response.type+', Time: '+ response.created_at+'</li>');
          } else {
            $("#result").html("attendance not logged");
          }
        }
      });
    });
    Instascan.Camera.getCameras().then(function(cameras) {
      if (cameras.length > 0) {
        scanner.start(cameras[0]);
      } else {
        console.error('No cameras found.');
      }
    }).catch(function(e) {
      console.error(e);
    });
  </script>

</body>

</html>