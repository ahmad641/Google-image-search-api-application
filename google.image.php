<?php
//include class file
include("gimage.php");

//create class instance
$gimage = new GoogleImages();
/*****************************
call get_images method by providing 3 parameters
1.) query - what should be searched for
2.) cols - number of images per row
3.) rows - number of rows
*****************************/
$gimage->get_images('cars' 	, 5, 15);

?>
<script type="text/javascript" src="jQuery.GI.TheWall.js"></script>
<script type="text/javascript" src="jQuery.GI.TheWall.min.js"></script>
