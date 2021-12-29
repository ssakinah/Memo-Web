<!doctype html>
<html lang="en">
<head><meta charset="UTF-8">    
<title>𝕄𝔼𝕄𝕆 ℙ𝔸𝔻</title>  
<link rel="shortcut icon" href="https://64.media.tumblr.com/tumblr_lkl668LDaS1qfamg6.gif"><!--favicon-->

<!--link to style.css-->
<link rel="stylesheet" href="css/style.css">  
<!--font-->
<link href='https://fonts.googleapis.com/css?family=Press Start 2P' rel='stylesheet' href="css/style.css">
<link href='https://fonts.googleapis.com/css?family=Squada One' rel='stylesheet' href="css/style.css">

</head>
<body>
<!--INPUT NOTE-->
<?php include('template/input_note.php'); ?>

<!--HEADER-->
<?php include('template/header.php'); ?>

<!--DISPLAY NOTE-->
<?php include('database/connect.php'); ?> <!--connect to database-->
<?php include('template/display_note.php'); ?>

<!--FOOTER-->
<?php include('template/footer.php'); ?>
</body>
</html>