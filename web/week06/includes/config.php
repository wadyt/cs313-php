<?php
ob_start();
session_start();

$host = 'ec2-23-21-227-73.compute-1.amazonaws.com';
$port = '5432';
$database = 'dbgtbppnd222hk';
$user = 'etsyxwugajywfu';
$password = '1d0c083b0eaa58956961adac4c830c45c75da282f53bf910dde1191034b6829a';


//include the user class, pass in the database connection
include('classes/user.php');
include('classes/phpmailer/mail.php');

?>

