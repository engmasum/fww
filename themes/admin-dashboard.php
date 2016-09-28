<?php
if($_SESSION['member_login']==""){ ?><script>window.location="?page=login";</script><? }
?>
<!-- admin-dashboard -->
<?php include("themes/dashboard-leftbar.php");?>

<div class="content-admin">
<div class="content-admin-wrapper">
    <div class="content-admin-main">
        <div class="content-admin-main-inner">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="message">
                                    <h1>Welcome in Dashboard</h1>
                                    <p>Thanks for checking <a href="#">Superlist</a> backend. If you have any questions, feel free to ask your question using ThemeForest's <a href="#">item comments</a> section. Before asking don't forget to check the template <a href="#">documentation</a>.</p>
                                </div><!-- /.message -->
                            </div><!-- /.col-* -->
                        </div><!-- /.row -->

                    </div><!-- /.col-* -->
                </div><!-- /.row -->

            </div><!-- /.container-fluid -->
        </div><!-- /.content-admin-main-inner -->
    </div><!-- /.content-admin-main --><!-- / left bar  -->
<!-- /admin-dashboard -->

