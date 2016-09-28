<?php
if($form=="listing_update"){
    if(isset($_POST["update"])) {
    $list_title=$_POST["list_title"];
    $list_address=$_POST["list_address"];
    $list_email=$_POST["list_email"];
    $list_phone=$_POST["list_phone"];
    $list_website=$_POST["list_website"];
    $list_description=$_POST["list_description"];

    $list_hour_mon=$_POST["list_hour_mon"];
    $list_hour_tue=$_POST["list_hour_tue"];
    $list_hour_wed=$_POST["list_hour_wed"];
    $list_hour_thu=$_POST["list_hour_thu"];
    $list_hour_fri=$_POST["list_hour_fri"];
    $list_hour_sat=$_POST["list_hour_sat"];
    $list_hour_sun=$_POST["list_hour_sun"];

    $list_amen_wifi=$_POST["list_amen_wifi"];
    if($list_amen_wifi==""){ $list_amen_wifi=0; }else{ $list_amen_wifi=1; }

    $list_amen_parking=$_POST["list_amen_parking"];
    if($list_amen_parking==""){ $list_amen_parking=0; }else{ $list_amen_parking=1; }

    $list_amen_takeaway=$_POST["list_amen_takeaway"];
    if($list_amen_takeaway==""){ $list_amen_takeaway=0; }else{ $list_amen_takeaway=1; }

    $list_amen_smoking=$_POST["list_amen_smoking"];
    if($list_amen_smoking==""){ $list_amen_smoking=0; }else{ $list_amen_smoking=1; }

    $list_amen_nonsmoking=$_POST["list_amen_nonsmoking"];
    if($list_amen_nonsmoking==""){ $list_amen_nonsmoking=0; }else{ $list_amen_nonsmoking=1; }

    $list_amen_reservation=$_POST["list_amen_reservation"];
    if($list_amen_reservation==""){ $list_amen_reservation=0; }else{ $list_amen_reservation=1; }

    $list_amen_halal=$_POST["list_amen_halal"];
    if($list_amen_halal==""){ $list_amen_halal=0; }else{ $list_amen_halal=1; }

    $list_amen_nonhalal=$_POST["list_amen_nonhalal"];
    if($list_amen_nonhalal==""){ $list_amen_nonhalal=0; }else{ $list_amen_nonhalal=1; }

    $list_amen_nopork=$_POST["list_amen_nopork"];
    if($list_amen_nopork==""){ $list_amen_nopork=0; }else{ $list_amen_nopork=1; }

    $list_amen_vegeterian=$_POST["list_amen_vegeterian"];
    if($list_amen_vegeterian==""){ $list_amen_vegeterian=0; }else{ $list_amen_vegeterian=1; }
    
    

    $sql=mysqli_query($conn,"UPDATE db_listing list_title='$list_title', list_address='$list_address',list_email='$list_email',list_phone='$list_phone'
        ,list_website='$list_website',list_description='$list_description',list_hour_mon='$list_hour_mon',list_hour_tue='$list_hour_tue',list_hour_wed='$list_hour_wed',list_hour_thu='$list_hour_thu',list_hour_fri='$list_hour_fri',list_hour_sat='$list_hour_sat',list_hour_sun='$list_hour_sun',list_amen_wifi='$list_amen_wifi',
        list_amen_parking='$list_amen_parking',list_amen_takeaway='$list_amen_takeaway',list_amen_smoking='$list_amen_smoking',list_amen_reservation='$list_amen_reservation',list_amen_halal='$list_amen_halal',list_amen_nonhalal='$list_amen_nonhalal',list_amen_nopork='$list_amen_nopork',list_amen_vegeterian='$list_amen_vegeterian', WHERE submission_list_id=$listing_id ");

   if(($sql=="TRUE")) {

    echo"Submission List Add Successfully.. ";}
    else{ echo"Some thing is Error .." ;}

} /* /isset */ 
}/* /form */ 
?>
<?php
  $result=mysqli_query($conn,"SELECT * FROM db_listing WHERE submission_list_id=$listing_id"); /* please check this line why give space then correct */
	while($row=mysqli_fetch_array($result))     
    {?>
<?php include("themes/dashboard-leftbar.php");?>
<!-- Submission listing Update  -->
<div class="content-admin">
<div class="content-admin-wrapper">
<div class="content-admin-main">
    <div class="content-admin-main-inner">
        <div class="container-fluid">
            <div class="row"><!-- row 1-->
                <div class="page-title">
                        <center><h1>Listing update page</h1></center>
                </div><!-- /.page-title -->

                    <div class="row"><!-- row 2-->
                        <div class="col-md-10">
                            <div class="background-white p20 mb50">
                                <h2 class="page-title">Update the submission List </h2>

                                <form action="" method="POST">
                                <input type="hidden" name="form" value="listing_update">

                                    <div class="form-group">
                                        <label for="list_title">Business Title:</label>
                                        <input type="text" class="form-control" id="list_title" name="list_title" value="<?=$row['list_title'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_address">Business Address</label>
                                        <textarea class="form-control" rows="5" id="list_address" name="list_address" <?=$row['list_address']?>> </textarea>
                                    </div>


                                    <div class="form-group">
                                        <label for="list_email">Business Email</label>
                                        <input type="email" class="form-control" id="list_email" name="list_email" value="<?=$row['list_email'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_phone">Business Phone :</label>
                                        <input type="text" class="form-control" id="list_phone" name="list_phone" value="<?=$row['list_phone'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_website">Business Website:</label>
                                        <input type="text" class="form-control" id="list_website" name="list_website" value="<?=$row['list_website']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_description">Business Description:</label>
                                        <textarea class="form-control" rows="5" id="list_description" name="list_description" <?=$row['list_description'];?> ></textarea>
                                    </div>

                                    <h5>Business Hour:</h5>

                                    <div class="form-group">
                                        <label for="list_hour_mon">Monday:</label>
                                        <input type="text" class="form-control" id="list_hour_mon" name="list_hour_mon" value="<?=$row['list_hour_mon']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_hour_tue">Tuesday:</label>
                                        <input type="text" class="form-control" id="list_hour_tue" name="list_hour_tue" value="<?=$row['list_hour_tue']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_hour_wed">Wednesday:</label>
                                        <input type="text" class="form-control" id="list_hour_wed" name="list_hour_wed" value="<?=$row['list_hour_wed']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_hour_thu">Thursday:</label>
                                        <input type="text" class="form-control" id="list_hour_thu" name="list_hour_thu" value="<?=$row['list_hour_thu']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_hour_fri">Friday:</label>
                                        <input type="text" class="form-control" id="list_hour_fri" name="list_hour_fri" value="<?=$row['list_hour_fri']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_hour_sat">Saturday:</label>
                                        <input type="text" class="form-control" id="list_hour_sat" name="list_hour_sat" value="<?=$row['list_hour_sat']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_hour_sun">Sunday:</label>
                                        <input type="text" class="form-control" id="list_hour_sun" name="list_hour_sun" value="<?=$row['list_hour_sun']?>">
                                    </div>

                                    <h5>Amenities</h5>
                                   <div class="col-md-12"><!-- col-12,  Amenities-->

                                   <div class="form-group col-md-4">
                    
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_wifi" name="list_amen_wifi" value="<?=$row['list_amen_wifi'];?>"><label for="list_amen_wifi">WiFi</label>
                                        </div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_parking" name="list_amen_parking" value="<?=$row['list_amen_parking'];?>"><label for="list_amen_parking">Parking</label>
                                        </div>
                                      </div>

                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_takeaway" name="list_amen_takeaway" value="<?=$row['list_amen_takeaway'];?>"><label for="list_amen_takeaway">Take Way</label>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-md-4">
                    
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_smoking" name="list_amen_smoking" value="<?=$row['list_amen_smoking'];?>"><label for="list_amen_smoking">Smoking</label>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_nonsmoking" name="list_amen_nonsmoking" value="<?=$row['list_amen_nonsmoking'];?>"><label for="list_amen_nonsmoking">Non Smoking Area </label>
                                        </div>
                                      </div>

                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_reservation" name="list_amen_reservation" value="<?=$row['list_amen_reservation'];?>"><label for="list_amen_reservation">Reservation </label>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-md-4">
                    
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_halal"  name="list_amen_halal" value="<?=$row['list_amen_halal'];?>"><label for="list_amen_halal">Halal </label>
                                        </div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_nonhalal" name="list_amen_nonhalal" value="<?=$row['list_amen_nonhalal'];?>"><label for="list_amen_nonhalal">Non-Halal</label>
                                        </div>
                                      </div>



                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_nopork"  name="list_amen_nopork" value="<?=$row['list_amen_nopork'];?>"><label for="list_amen_nopork">No Pork</label>
                                        </div>
                                    </div><!-- /.form-group -->



                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_vegeterian"  name="list_amen_vegeterian" value="<?=$row['list_amen_vegeterian'];?>"><label for="list_amen_vegeterian">Vegeterian</label>
                                        </div>
                                    </div><!-- /.form-group -->

                            
                                    </div><!-- / col-12 , Amenities-->


                                    
                                   </center><button type="submit" class="btn btn-primary" name="update"><i class=""></i> Update</button></center>
                                </form>
                            </div><!-- /background-white -->
                        
                        </div> <!-- /col-md-10-->
                        
                    </div><!-- /row 2-->

            </div><!-- /row 1 -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-admin-main-inner -->
</div><!-- /.content-admin-main -->
<!-- / admin-form page -->
<!-- Submission listing Update  -->
<?}?>

