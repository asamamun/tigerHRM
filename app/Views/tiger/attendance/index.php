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
  <div class="text-end"><?php echo anchor("attendance/barcode", "Barcode", ['class' => "btn btn-warning mt-2 ms-5"]) ?></div>
  <div class="btn d-grid btn-info my-3">
      <h2>Employee Attendance </h2>
    </div>

    <div class="row">
      <div class="col-6">
        <div class="btn-group d-flex justify-content-between" role="group" aria-label="Basic radio toggle button group">
          <input value="in" type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
          <label class="btn btn-outline-primary rounded" for="btnradio1">In</label>

          <input value="out" type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
          <label class="btn btn-outline-primary rounded ms-1" for="btnradio2">Out</label>
          <div class="text-end"><?php echo anchor("attendance", "Refresh", ['class' => "btn btn-warning ms-5"]) ?></div>
        </div>

        <div class="rounded-3 mt-2" id="video"><video class="rounded border border-info" width="80%" height="80%" id="preview"></video></div>
        <div class="fw-bold"> <input id="csrf" type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>">
        </div>

      </div>
      <div class="col-6">
        <div class="rounded">
          <h3 class="bg-info text-center rounded pb-2">Attendance Log</h3>
          <ul class="list-group" id="attlog"></ul>
        </div>
      </div>
    </div>
    <div id="result"></div>

  </div>




  <script type="text/javascript">
    let speech = new SpeechSynthesisUtterance();
    speech.lang = "en";
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
      var inout = $('input[name="btnradio"]:checked').val();
      $.ajax({
        type: "post",
        url: $url,
        data: {
          [csrfName]: csrfHash,
          type: inout,
          empid: $empid
        },
        success: function(response) {
          response = JSON.parse(response);
          if(response.error=="1"){
            $("#result").html("attendance not logged");
            return;
          }
          console.log(response);
          // alert(response.csrf_token);
          $('#csrf').val(response.csrf_token);
          if (response != "0") {
            //show
            $("#result").html("attendance logged");
            $("#attlog").append('<li class="list-group-item border border-info mb-1">Name: ' + response.name + ' (' + response.empid + '), ' + response.type + ', Time: ' + response.created_at + '</li>');
            //talk
            // speech.text = response.name + " logged " + inout + " at" + response.created_at;
            speech.text = response.name + " logged " + inout;
          window.speechSynthesis.speak(speech);
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