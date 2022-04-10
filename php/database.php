<?php
$db_host="localhost";
$db_name="student";
$db_user="mandira";
$db_pass="_/bU]jO6URV7muP)";

$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(mysqli_connect_error()){
    echo mysqli_connect_error();
    exit;
}
echo "connected success";
