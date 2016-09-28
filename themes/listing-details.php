<?php if($_SESSION["session_email"]<>"") { 
 include("themes/check_in.php");
}
?>


<?php 
$result=mysqli_query($conn,"SELECT * FROM db_listing WHERE submission_list_id=$id"); 
while($row=mysqli_fetch_array($result))  
{?>
   <div class="main">
        <div class="main-inner">
            <div class="content">
            
                <div class="mt-80 mb80">

                    <div class="detail-banner" style="background-image: url(/assets/img/tmp/detail-banner-1.jpg);">
                        <div class="container">
                            <div class="detail-banner-left">

                                <h2 class="detail-title">
                                    <?=$row['list_title'];?>
                                </h2>

                                <div class="detail-banner-address">
                                    <i class="fa fa-map-o"></i> <?=$row['list_address']?>
                                </div><!-- /.detail-banner-address -->

                            </div><!-- /.detail-banner-left -->
                        </div><!-- /.container -->
                    </div><!-- /.detail-banner -->

                </div>

                <div class="container">
                    <div class="row detail-content">
                        <div class="col-sm-7">

                            <h2>We Are Here</h2>
                            <div class="background-white p20">

                                <!-- Nav tabs -->
                                <ul id="listing-detail-location" class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#simple-map-panel" aria-controls="simple-map-panel" role="tab" data-toggle="tab">
                                            <i class="fa fa-map"></i>Map
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#street-view-panel" aria-controls="street-view-panel" role="tab" data-toggle="tab">
                                            <i class="fa fa-street-view"></i>Street View
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="simple-map-panel">
                                        <div class="detail-map">
                                            <div class="map-position">
                                                <div id="listing-detail-map"
                                                     data-transparent-marker-image="assets/img/transparent-marker-image.png"
                                                     data-styles='[{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"labels.text.fill","stylers":[{"color":"#b43b3b"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"lightness":"8"},{"color":"#bcbec0"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#5b5b5b"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#7cb3c9"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#abb9c0"}]},{"featureType":"water","elementType":"labels.text","stylers":[{"color":"#fff1f1"},{"visibility":"off"}]}]'
                                                     data-zoom="15"
                                                     data-latitude="40.779995"
                                                     data-longitude="-73.969133"
                                                     data-icon="fa fa-coffee">
                                                </div><!-- /#map-property -->
                                            </div><!-- /.map-property -->
                                        </div><!-- /.detail-map -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="street-view-panel">
                                        <div id="listing-detail-street-view"
                                                data-latitude="40.758896"
                                                data-longitude="-73.985135"
                                                data-heading="225"
                                                data-pitch="0"
                                                data-zoom="1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <h2>3 Reasons Why Choose Us</h2>

                            <div class="background-white p20 reasons">
                                <div class="reason">
                                    <div class="reason-icon">
                                        <i class="fa fa-trophy"></i>
                                    </div><!-- /.reason-icon -->
                                    <div class="reason-content">
                                        <h4>Coffee House of the Year 2015</h4>
                                        <p>Fusce at venenatis lorem. Quisque volutpat aliquam leo, a pellentesque orci varius sit amet.</p>
                                    </div><!-- /.reason-content -->
                                </div><!-- /.reason -->
                                <div class="reason">
                                    <div class="reason-icon">
                                        <i class="fa fa-coffee"></i>
                                    </div><!-- /.reason-icon -->
                                    <div class="reason-content">
                                        <h4>High Quality Coffee Beans</h4>
                                        <p>Fusce at venenatis lorem. Quisque volutpat aliquam leo, a pellentesque orci varius sit amet.</p>
                                    </div><!-- /.reason-content -->
                                </div><!-- /.reason -->
                                <div class="reason">
                                    <div class="reason-icon">
                                        <i class="fa fa-cutlery"></i>
                                    </div><!-- /.reason-icon -->
                                    <div class="reason-content">
                                        <h4>Snacks & Deserts</h4>
                                        <p>Fusce at venenatis lorem. Quisque volutpat aliquam leo, a pellentesque orci varius sit amet.</p>
                                    </div><!-- /.reason-content -->
                                </div><!-- /.reason -->
                            </div>

                        </div><!-- /.col-sm-7 -->

                        <div class="col-sm-5">

                            <div class="background-white p20">
                                <div class="detail-overview-hearts">
                                    <i class="fa fa-heart"></i> <strong>213 </strong>people love it
                                </div>
                                <div class="detail-overview-rating">
                                    <i class="fa fa-star"></i> <strong>4.3 / 5 </strong>from <a href="#reviews">316 reviews</a>
                                </div>

                                <div class="detail-actions row">
                                    <div class="col-sm-4">
                                        <div class="btn btn-primary btn-book"><i class="fa fa-shopping-cart"></i> Book Now</div>
                                    </div><!-- /.col-sm-4 -->
                                    <div class="col-sm-4">
                                        <div class="btn btn-secondary btn-share"><i class="fa fa-share-square-o"></i> Share
                                            <div class="share-wrapper">
                                                <ul class="share">
                                                    <li><i class="fa fa-facebook"></i> Facebook</li>
                                                    <li><i class="fa fa-twitter"></i> Twitter</li>
                                                    <li><i class="fa fa-google-plus"></i> Google+</li>
                                                    <li><i class="fa fa-pinterest"></i> Pinterest</li>
                                                    <li><i class="fa fa-chain"></i> Link</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.col-sm-4 -->
                                    <div class="col-sm-4">
                                        <div class="btn btn-secondary btn-claim"><i class="fa fa-hand-peace-o"></i> Claim</div>
                                    </div><!-- /.col-sm-4 -->
                                </div><!-- /.detail-actions -->
                            </div>

                            <h2>About <span class="text-secondary"><?=$row['list_title']?></span></h2>

                            <div class="background-white p20">
                                <div class="detail-vcard">
                                    <div class="detail-logo">
                                        <img src="<?=$row["company_logo"]?>" width="120" height="150">
                                    </div><!-- /.detail-logo -->

                                    <div class="detail-contact">

                                        <?php if($row["list_email"]<>""){ ?>
                                        <div class="detail-contact-email">
                                            <i class="fa fa-envelope-o"></i> <a href="mailto:#"><?=$row["list_email"];?></a>
                                        </div>
                                        <?php } ?>
                                        
                                        <?php if($row["list_phone"]<>""){ ?>
                                        <div class="detail-contact-phone">
                                            <i class="fa fa-mobile-phone"></i> <a href="tel:#"><?=$row["list_phone"];?></a>
                                        </div>
                                        <?php } ?>

                                        <?php if($row["list_website"]<>""){?>
                                        <div class="detail-contact-website">
                                            <i class="fa fa-globe"></i> <a href="<?=$row["list_website"];?>"><?=$row["list_website"];?></a>
                                        </div>
                                        <?php } ?>

                                        <?php if($row["list_address"]<>""){?>
                                        <div class="detail-contact-address">
                                            <i class="fa fa-map-o"></i>
                                            <?=$row["list_address"];?>
                                        </div>
                                        <?php } ?>
                                    </div><!-- /.detail-contact -->
                                </div><!-- /.detail-vcard -->

                                <div class="detail-description">
                                    <?=$row["list_description"];?>
                                </div>

                                <div class="detail-follow">
                                    <h5>Follow Us:</h5>
                                    <div class="follow-wrapper">
                                        <a class="follow-btn facebook" href="<?=$row["facebook_id"];?>"><i class="fa fa-facebook"></i></a>
                                        <a class="follow-btn youtube" href="#"><i class="fa fa-youtube"></i></a>
                                        <a class="follow-btn twitter" href="#"><i class="fa fa-twitter"></i></a>
                                        <a class="follow-btn tripadvisor" href="#"><i class="fa fa-tripadvisor"></i></a>
                                        <a class="follow-btn google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                    </div><!-- /.follow-wrapper -->
                                </div><!-- /.detail-follow -->
                            </div>

                            <div class="widget">
                                <h2 class="widgettitle">Working Hours</h2>
                                    
                                <div class="p20 background-white">
                                    <div class="working-hours">
                                		<div class="day clearfix">
                                			<span class="name">Mon</span><span class="hours"><?=$row["list_hour_mon"]?></span>
                                		</div><!-- /.day -->

                                		<div class="day clearfix">
                                			<span class="name">Tue</span><span class="hours"><?=$row["list_hour_tue"]?><br></span>
                                		</div><!-- /.day -->

                                		<div class="day clearfix">
                                			<span class="name">Wed</span><span class="hours"><?=$row["list_hour_wed"]?><br></span>
                                		</div><!-- /.day -->

                                		<div class="day clearfix">
                                			<span class="name">Thu</span><span class="hours"><?=$row["list_hour_thu"]?><br></span>
                                		</div><!-- /.day -->

                                		<div class="day clearfix">
                                			<span class="name">Fri</span><span class="hours"><?=$row["list_hour_fri"]?><br></span>
                                		</div><!-- /.day -->

                                		<div class="day clearfix">
                                			<span class="name">Sat</span><span class="hours"><?=$row["list_hour_sat"]?></span>
                                		</div><!-- /.day -->

                                		<div class="day clearfix">
                                			<span class="name">Sun</span><span class="hours"><?=$row["list_hour_sun"]?></span>
                                		</div><!-- /.day -->
                                	</div>
                                </div>
                            </div><!-- /.widget -->

                            <h2>Amenities</h2>

                            <div class="background-white p20">
                                <ul class="detail-amenities">
                                    <li class="<?php if($row['list_amen_wifi']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> WiFi </li>
                                    <li class="<?php if($row['list_amen_parking']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Parking </li>
                                    <li class="<?php if($row['list_amen_takeaway']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Take away </li>
                                    <li class="<?php if($row['list_amen_smoking']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Smoking </li>
                                    <li class="<?php if($row['list_amen_nonsmoking']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Non Smoking </li>
                                    <li class="<?php if($row['list_amen_reservation']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Reservation </li>
                                    <li class="<?php if($row['list_amen_halal']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Halal </li>
                                    <li class="<?php if($row['list_amen_nonhalal']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> No Pork </li>
                                    <li class="<?php if($row['list_amen_nopork']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Parking </li>
                                    <li class="<?php if($row['list_amen_vegeterian']==1){ ?>yes<?php }else{ ?>no<?php } ?>"> Vegeterian </li>
                                    
                                </ul>
                            </div><!-- /.detail-amenities -->
                        </div><!-- /.col-sm-5 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->

            </div><!-- /.content -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->

<?php } ?>