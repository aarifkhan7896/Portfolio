<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$dbcon = mysqli_connect($servername,$username,$password, $database);
if(!$dbcon){
    die("Unable to Connect".mysqli_connect_error());
}
?>