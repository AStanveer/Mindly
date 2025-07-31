<?php 
$host= "localhost";
$user ="root";
$pass="";
$db="mindly_db";

define('SENDGRID_API_KEY', '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');

$conn= new mysqli($host, $user, $pass, $db);
if($conn -> connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
