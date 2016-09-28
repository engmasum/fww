<!-- CHECK IN PAGE  -->
<?php
$listing_id=$_GET["id"];
$_SESSION["restaurant_no"]=$_GET["id"];

//echo $_SESSION["restaurant_no"];

 ?>
<?php
if(isset($_POST["check_in"])){
$sql=mysqli_query($conn,"INSERT INTO check_in (user_id,user_email,restaurant_id,checkin_date,checkin_time) VALUES ('".$_SESSION["user_session_id"]."','".$_SESSION["session_email"]."','".$_SESSION["restaurant_no"]."','$Date)','$Time')");
if($sql<>0){
}else{echo"Error..";}
    
}

?>

<!-- Check IN Page HTML  -->

<div class="main-inner">
    <div class="container">
        <div class="content">
            <div class="page-title center">
                <br><br>
                <h4>CHECK IN YOUR Restaurant  </h4>
            </div><!-- /.page-header -->
           
            <div class="col-md-2">  </div>
            <div class="col-md-4">
           <form action="" method="POST"> 
                <button type="submit" name="check_in" class=""> Check-IN
                <a href="?page=check-in&id=<?=$row["submission_list_id"]?>">
                <i class="fa fa-map-marker"></i> 
            </button>
            </form>
            <div class="card-row-price">
            <div class="col-md-3">  </div>
            <a href="?page=checkin-history"> Check In History</a>
            </div>

            
            </div><!-- /div colum 12 -->
            <br><br>
        </div><!-- /.content -->
    </div><!-- /.container -->
</div><!-- /.main-inner -->

