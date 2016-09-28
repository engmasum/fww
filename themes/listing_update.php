<?php
$result=mysqli_query($conn,"SELECT * FROM db_listing WHERE submission_list_id=$id"); /* please check this line why give space then correct */
while($row=mysqli_fetch_array($result)){
?>
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
                                
                                <?php include("common/form/listing_update.php"); ?>

                                <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="form" value="listing_update">

                                    <div class="form-group">
                                        <label for="list_title">Business Title:</label>
                                        <input type="text" class="form-control" id="list_title" name="list_title" value="<?=$row['list_title'];?>">
                                    </div>


                                    <div class="form-group">
                                    <label for="list_category"> Select :</label>
                                    <select class="form-control" id="list_category" name="list_category">
                                        <option value="" <?php if($row["list_category"]=="") echo 'selected="selected"'; ?>>No Selected</option>
                                        <option value="Cafe" <?php if($row["list_category"]=="Cafe") echo 'selected="selected"'; ?>>Cafe</option>
                                        <option value="New Restaurant" <?php if($row["list_category"]=="New Restaurant") echo 'selected="selected"';?>>New Restaurant</option>
                                
                                        <option value="Steamboat" <?php if($row["list_category"]=="Steamboat") echo 'selected="selected"'; ?> >Steamboat</option>
                                        <option value="Noodles" <?php if($row["list_category"]=="Noodles") echo 'selected="selected"'; ?> >Noodles</option>
                                    </select>
                                    </div>

                                   


                                    <div class="form-group">
                                        <label for="list_address">Business Address</label>
                                        <textarea class="form-control" rows="5" id="list_address" name="list_address" ><?=$row['list_address']?></textarea>
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
                                        <label for="facebook_id">Facebook :</label>
                                        <input type="text" class="form-control" id="facebook_id" name="facebook_id" value="<?=$row['facebook_id']?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="list_description">Business Description:</label>
                                        <textarea class="form-control" rows="5" id="list_description" name="list_description"><?=$row['list_description'];?></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="company_logo">Company Picture:</label>
                                        <input type="file" id="company_logo" name="company_logo" placeholder=" company logo">
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
                                            <input type="checkbox" id="list_amen_wifi" name="list_amen_wifi" <?php if($row['list_amen_wifi']==1){ ?>checked="checked"<? } ?>><label for="list_amen_wifi">WiFi</label>
                                        </div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_parking" name="list_amen_parking" <?php if($row["list_amen_parking"]==1){?>checked<?}?> ><label for="list_amen_parking">Parking</label>
                                        </div>
                                      </div>

                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_takeaway" name="list_amen_takeaway" <?php if($row['list_amen_takeaway']==1){?> checked <?}?>> <label for="list_amen_takeaway">Take away</label>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-md-4">
                    
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_smoking" name="list_amen_smoking" <?php if($row['list_amen_smoking']==1){?>checked="checked" <?}?>><label for="list_amen_smoking">Smoking</label>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_nonsmoking" name="list_amen_nonsmoking"<?php if($row['list_amen_nonsmoking']==1) {?> checked="checked" <?}?>><label for="list_amen_nonsmoking">Non Smoking Area </label>
                                        </div>
                                      </div>

                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_reservation" name="list_amen_reservation" <?php if($row['list_amen_reservation']==1) {?>  checked="checked" <?}?>><label for="list_amen_reservation">Reservation </label>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group col-md-4">
                    
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_halal"  name="list_amen_halal" <?php if($row['list_amen_halal']==1) {?> checked="checked" <?}?>><label for="list_amen_halal">Halal </label>
                                        </div>
                                    </div><!-- /.form-group -->
                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_nonhalal" name="list_amen_nonhalal" <?php if($row['list_amen_nonhalal']==1) {?> checked="checked" <?}?>><label for="list_amen_nonhalal">Non-Halal</label>
                                        </div>
                                      </div>



                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_nopork"  name="list_amen_nopork" <?php if($row['list_amen_nopork']==1) {?> checked="checked" <?}?>><label for="list_amen_nopork">No Pork</label>
                                        </div>
                                    </div><!-- /.form-group -->



                                    <div class="form-group col-md-4">
                                        <div class="checkbox">
                                            <input type="checkbox" id="list_amen_vegeterian"  name="list_amen_vegeterian"  <?php if($row['list_amen_vegeterian']==1) {?> checked="checked" <?}?>><label for="list_amen_vegeterian">Vegeterian</label>
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


