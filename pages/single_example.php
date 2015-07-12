<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title><?php echo $example['name']; ?> Example</title>
  <base href="<?php echo BASE_URL; ?>" />

<?php if ($example['number'] === 9000): ?>
  <!-- TODO: fix this hack -->
  <link rel="stylesheet" href="css/bootstrap-2.3.0.min.css" />
  <link rel="stylesheet" href="css/datepicker.css" />
<?php endif; ?>

  <link rel="stylesheet" href="css/autocomplete.css" />
</head>
<body>
<p><a href="examples#<?php echo $example['number']; ?>">&larr; Back to all examples.</a></p>

<!-- start example code --->
<?php echo $example['html'] . "\n"; ?>
<!-- end example code --->

<script src="js/json3.min.js"></script>
<script src="js/jquery-1.8.2.min.js"></script>
<?php if ($example['number'] === 9000): ?>
<!-- TODO: fix this hack -->
<script src="js/bootstrap-datepicker.js"></script>
<?php endif; ?>
<script src="js/autocomplete.js"></script>
<script>
function init() {
//----- Start Example Code -----
<?php echo $example['js'] . "\n"; ?>
//----- End Example Code -----
} // end init()
$(document).ready(init);
</script>
</body>
</html>
