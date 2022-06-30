<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <style>
    .container{
    padding: 10%;
    text-align: center;
   } 
 </style>
</head>
<body>

<?= $this->extend('layouts/default'); ?>
<?= $this->section('title'); ?> Dashboard <?= $this->endSection(); ?>
<!-- content section start -->
<?= $this->section('content'); ?>
<!-- ===================================================================== -->
 
<div class="container">
    <div class="row">
        <div class="col-12"><h2>Autocomplete Search</h2></div>
        <div class="col-12">
            <div id="custom-search-input">
                <div class="input-group">
                    <input id="search" name="search" type="text" class="form-control" placeholder="Search" />
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
        <!-- content section end-->

        <?= $this->section('scripts'); ?>
        <script>
            
            var BASE_URL = "<?php echo base_url(); ?>";
 
 $(document).ready(function() {
    $( "#search" ).autocomplete({
 
        source: function(request, response) {
            $.ajax({
            url: BASE_URL + "AutocompleteController/getTerm",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.name;
               }); 
 
               response(resp);
            }
        });
    },
    minLength: 1
 });
});
 
        </script>
        <?= $this->endSection(); ?>