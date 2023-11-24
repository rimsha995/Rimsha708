<?php
$databaseHost = 'localhost';
$databaseName = 'facebook';
$databaseUsername = 'root';
$databasePassword = '';
echo "<font color='green'>php config";
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
?>