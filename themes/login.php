<?php
if($_SESSION['member_login']<>""){ ?><script>window.location="?page=dashboard";</script><? }
?>
<?php
if(isset($_POST["user_email"])){
    $user_email=$_POST["user_email"];
    $user_password=$_POST["user_password"];

    if($user_email==""){
        ?><script type=text/javascript>alert("Please FILL UP  your user Email and Password")</script><? 
    }

    $sql=mysqli_query($conn,"SELECT * FROM db_user WHERE user_email='$user_email' AND  user_password='$user_password'");
    $result=mysqli_num_rows($sql);

   // echo"SELECT * FROM db_user WHERE user_email='$user_email' AND  user_password='$user_password' ";
    //echo$user_email;
    //echo$user_password;

    if($result<> 0){
        while($row=mysqli_fetch_array($sql)){
            $_SESSION['Email']=$row['user_email'];
            $_SESSION['Password']=$row['user_password'];
            $_SESSION['member_login']=$row['db_user_id'];
        }

        ?><script type="text/javascript">window.location="/?page=dashboard"</script><?
        echo"successfully..";
    }else{

        echo"Please Check your user Email and Password";
       
    }
}
?>

<!-- login page  -->
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
                        <label for="user_email">E-mail</label>
                        <input type="email" class="form-control" name="user_email" id="user_email">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="user_password">Password</label>
                        <input type="password" class="form-control" name="user_password" id="user_password">
                    </div><!-- /.form-group -->

                    <button type="submit" class="btn btn-primary pull-right">Login</button>
                    
                </form>
            </div><!-- /.col-sm-4 -->
        </div><!-- /.row -->
        <br><br>

    </div><!-- /.content -->
</div><!-- /.container -->
</div><!-- /.main-inner -->
</div><!-- /.main -->