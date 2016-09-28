<?php include("conn.php");?>
<?php include("common.php");?>
<?php  ini_set('display_errors', '1'); ?>
<?php 
$name=$_POSt["name"];
$name=$_POSt["subject"];
$name=$_POSt["email"];
$name=$_POSt["message"];
$sql=mysqli_query("INSERT INTO `db_contact` (`id`, `name`, `subject`, `email`, `message`, `submission_day`) 
															  VALUES ('$name', 'subject', '$email', '$message');");

if(mysql_insert_id() >0)
{echo"Successfull..";}
else{echo"some things Erroe";.mysqli_error();}



?>