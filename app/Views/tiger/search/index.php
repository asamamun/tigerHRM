<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Autocomplete Text Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <style>
    .container {
      max-width: 500px;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <select class="search form-control" id="search" name="search"></select>
  </div>
</body>
<script>
      $('#search').select2({
        placeholder: 'Search Employee',
        ajax: {
          url: '<?php echo base_url('AutocompleteSearch/ajaxSearch');?>',
          dataType: 'json',
          delay: 250,
          processResults: function(data){
            return {
              results: data
            };
          },
          cache: true
        }
      });
</script>
</html>