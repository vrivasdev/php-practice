<?php 
require('includes/test.inc.php'); // Fatal error if it doesnt't exist
include('includes/test.inc.php'); // Just Warning

// just once, otherwise, php will ignore this statement
require_once('includes/test.inc.php'); 
include_once('includes/test.inc.php');

echo 'Main app';
?>