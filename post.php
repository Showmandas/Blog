<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
       <!-- Compiled and minified CSS -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
<?php
include "includes/header.php";
?>

<?php
include "includes/navbar.php";
?>

<div class="row content-row" style="margin-top:60px">
<!-this is main content-->
<div class="col l9 m9 s12 leftside">
</div><!--/leftside-->

<!-this is side content-->
<div class="col l3 m3 s12 rightside">
<?php
include "includes/sidebar.php";
?>
</div><!--/rightside-->
<!-this is related post content-->
<div class="col l12 m12 s12">
</div>
</div><!--/content-row-->


<?php
include "includes/footer.php";
?>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>
</html>