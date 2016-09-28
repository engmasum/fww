<?php

if($form=="submission_form"){
    $list_title=$_POST["list_title"];
    $list_category=$_POST["list_category"];
    $list_address=$_POST["list_address"];
    $list_email=$_POST["list_email"];
    $list_phone=$_POST["list_phone"];
    $list_website=$_POST["list_website"];
    $list_facebook=$_POST["facebook_id"];
    $list_description=$_POST["list_description"];

    $file =$_FILES['company_logo']['name'];
    $file_loc = $_FILES['company_logo']['tmp_name'];
    $folder="uploads/";
    $new_file_name = strtolower($file);
    $destifinal=$folder.str_replace(' ','-',$new_file_name);
    $veryfinalfile=$destifinal;

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
    
    if($file<>""){
        move_uploaded_file($file_loc,$destifinal);
       


        $sql=mysqli_query($conn,"INSERT INTO `db_listing` (`list_title`,`list_category`, `list_address`, `list_email`, `list_phone`, `list_website`, `facebook_id`, `list_description`, `company_logo`,`list_hour_mon`, `list_hour_tue`, `list_hour_wed`, `list_hour_thu`, `list_hour_fri`, `list_hour_sat`, `list_hour_sun`, `list_amen_wifi`, `list_amen_parking`, `list_amen_takeaway`, `list_amen_smoking`, `list_amen_nonsmoking`, `list_amen_reservation`, `list_amen_halal`, `list_amen_nonhalal`, `list_amen_nopork`, `list_amen_vegeterian`,`submission_date`) VALUES 

        ('$list_title', '$list_category', '$list_address', '$list_email', '$list_phone', '$list_website','$list_facebook', '$list_description','$veryfinalfile', '$list_hour_mon', '$list_hour_tue', '$list_hour_wed', '$list_hour_thu', '$list_hour_fri', '$list_hour_sat', '$list_hour_sun', '$list_amen_wifi', '$list_amen_parking', '$list_amen_takeaway', '$list_amen_smoking', '$list_amen_nonsmoking', '$list_amen_reservation', '$list_amen_halal', '$list_amen_nonhalal', '$list_amen_nopork','$list_amen_vegeterian','$submission_date')");
        echo"Submission List Add Successfully.. ";

    }else{ echo"Some thing is Error .." ;}

} /* /isset */ 
?>
