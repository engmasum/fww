<?php
    if($form=="registration"){
        if(isset($_POST["user_name"])){
            $reg_name=$_POST["user_name"];
            $reg_email=$_POST["user_email"];
            $reg_phone=$_POST["user_phone"];
            $get_password=$_POST["user_password"];
            $con_password=$_POST["confirm_password"];
            if($get_password=="$con_password"){
                $con_password==$_POST["confirm_password"];
            }else{ 
                echo" Password Not same..";
                exit();
            }
        }

        $row="SELECT  user_email FROM `registration_info` WHERE `user_email` = '$reg_email'";
        $check_email=mysqli_query($conn,$row);
        if(mysqli_num_rows($check_email)> 0){
            echo"This email already register...";

        }else{ $query=mysqli_query($conn,"INSERT INTO `registration_info` (`user_name`, `user_email`, `user_phone`, `confirm_password`, `registration_date`) VALUES ('$reg_name', '$reg_email', '$reg_phone', '$con_password', '$enquiry_date')");
        if($query=="TRUE"){
            echo" Successfully Registration.."."<br>";
        } else{ echo" Error....";} }
    }
?>


<!-- REG page  -->
<div class="main">
<div class="main-inner">
<div class="container">
    <div class="content">

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="page-title">
                    <br><br>
                    <h1><center> Registration </center></h1>
                </div><!-- /.page-title -->

                <form method="post" action="" method="POST">
                <input type="hidden" name="form" value="registration">
                    <div class="form-group">
                        <label for="user_name">Name</label>
                        <input type="text" class="form-control" name="user_name" id="user_name" placeholder="Name...">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="user_email"> Email </label>
                        <input type="email" class="form-control" name="user_email" id="user_email" required  placeholder="Email...">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="user_phone">Phone Number </label>
                        <input type="text" class="form-control" name="user_phone" id="user_phone" placeholder="Phone Number...">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="confirm_password">Re-enter Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" required placeholder="Re-enter your password">
                    </div><!-- /.form-group -->

                    <button type="submit" class="btn btn-primary pull-right" value="registarion"> Register </button>
                    
                </form>
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->
        <br><br>

    </div><!-- /.content -->
</div><!-- /.container -->
</div><!-- /.main-inner -->
</div><!-- /.main -->