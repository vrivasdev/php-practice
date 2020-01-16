<?php 
require('include/test.inc.php'); // Fatal error if it doesnt't exist
include('include/test.inc.php'); // Just Warning

// just once, otherwise, php will ignore this statement
require_once('include/test.inc.php'); 
include_once('include/test.inc.php');

echo 'Main app';
?>