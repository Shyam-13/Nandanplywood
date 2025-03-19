<?php


/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'sql208.infinityfree.com';
$databaseName = 'if0_38424711_nandanplywood';
$databaseUsername = 'if0_38424711';
$databasePassword = 'Shyam1303';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
?>