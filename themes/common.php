<?php 
$enquiry_date=date("Y-m-d");
$submission_date=date("Y-m-d");
$Time=date("g:i A");
$listing_id=$_GET['id'];
?>
<?/* Page handiling variables */ ?>
<?php 
if(isset($_GET["page"])&&!empty($_GET["page"])){
	$page=$_GET["page"];
}
if(isset($_POST["form"])&&!empty($_POST["form"])){
	$form=$_POST["form"];
}
?>