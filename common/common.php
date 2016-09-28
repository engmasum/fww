<?php 
$enquiry_date=date("Y-m-d");
$submission_date=date("Y-m-d");
$Time=date("g:i A");
$Date=date("Y-m-d");
?>
<?/* Page handiling variables */ ?>
<?php 
$row="";
$page="";
if(isset($_GET["page"])&&!empty($_GET["page"])){
	$page=$_GET["page"];
}
$id="";
if(isset($_GET["id"])&&!empty($_GET["id"])){
	$id=$_GET["id"];
}
$form="";
if(isset($_POST["form"])&&!empty($_POST["form"])){
	$form=$_POST["form"];
}
if(isset($_SESSION["session_email"])&&!empty($_SESSION["session_email"])){
	$_SESSION["session_email"]=$_SESSION["session_email"];
}else{
	$_SESSION["session_email"]="";
}

?>