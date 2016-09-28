<!-- user login page  -->
<?php 
if(isset($_POST["login_email"])){
    $login_email=$_POST["login_email"];
    $login_password=$_POST["login_password"];
    $sql=mysqli_query($conn,"SELECT * FROM registration_info WHERE user_email='$login_email' AND 
        confirm_password='$login_password'");
    $result=mysqli_num_rows($sql);

    if($result<>0){ 
        while($row=mysqli_fetch_array($sql)){

            $_SESSION["session_email"]=$row["user_email"];
            $_SESSION["session_passwors"]=$row["confirm_password"];
            $_SESSION["user_session_id"]=$row["registration_id"];

            if(isset($_POST["remember_me"])<>""){
                $c_email=$_SESSION["session_email"];
                $c_password=$_SESSION["session_passwors"];
                setcookie("Cookie_email","$c_email",time()+(60));
            }else{ 
                echo " Cookies not set..";
            }
            echo"login successfully........";
        }

    }else{
        ?><script type="text/javascript">window.alert(" Email or Password Error....")</script><?
    }

}
?>
<?php if($_SESSION['session_email']<>""){ ?><script>window.location="/";</script> <?php }?>


<!-- user login page  -->
<div class="main">
<div class="main-inner">
<div class="container">
    <div class="content">

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                <div class="page-title">
                    <br><br>
                    <h1>Login</h1>
                </div><!-- /.page-title -->

                <form method="post" action="">
                    <div class="form-group">
                        <label for="login-form-email">E-mail</label>
                        <input type="email" class="form-control" name="login_email" id="user_email">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="confirm_password">Password</label>
                        <input type="password" class="form-control" name="login_password" id="confirm_password">
                    </div><!-- /.form-group -->

                    <div class="checkbox">
                        <input type="checkbox" id="remember_me" name="remember_me"><label for="remember_me">Remember Me</label>
                    </div>
                    <a href="" style="color:black"> Forget Password </a>
                    <button type="submit" class="btn btn-primary pull-right" name="submit" >Login</button>
                    
                </form>
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->
        <br><br>

    </div><!-- /.content -->
</div><!-- /.container -->
</div><!-- /.main-inner -->
</div><!-- /.main -->