<?php
if($_SESSION['member_login']==""){ ?><script>window.location="?page=login";</script><? }else{
?>
<?php
$sql=mysqli_query($conn, "UPDATE db_listing SET listing_stat='3'  WHERE submission_list_id='$id'");
if($sql=="TRUE"){
	echo"Delete successfully";
}
else{
	echo"Error ..";
}
?>
<?php } ?>