<html>
<head>
    <meta charset="utf-8">
    <title>Select2 3.5.2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Select2 JQuery Plugin">
    <meta name="author" content="Igor Vaynberg">

    <link href="<?php echo URL; ?>public/css/dist/css/bootstrap.css" rel="stylesheet">
      <script src="<?php echo URL; ?>public/js/jquery-1.7.1.min.js"></script>
      <script src="<?php echo URL; ?>public/js/jquery-ui-1.8.20.custom.min.js"></script> <!-- for sortable example -->
      <script src="<?php echo URL; ?>public/js/jquery.mousewheel.js"></script>
      <script src="<?php echo URL; ?>public/js/dist/js/bootstrap.min.js"></script>


  </head><body>
  <link href="<?php echo URL; ?>public/css/select2.css?ts=2014-11-01T18%3A56%3A45%2B00%3A00" rel="stylesheet">
<script src="<?php echo URL; ?>public/js/select2.js?ts=2014-11-01T18%3A56%3A45%2B00%3A00"></script>
<script>
        $(document).ready(function() { $("#e1").select2(); });
    </script>
    <select id="e1">
        <option value="AL">Alabama</option>
        ...
        <option value="WY">Wyoming</option>
    </select>
</body>
</html>
