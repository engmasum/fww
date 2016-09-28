<header class="header" id="header">
        <div class="header-wrapper">
            <div class="container">
                <div class="header-inner">
                    <div class="header-logo">
                        <a href="/?page=home">
                            <img src="../images/img/eat-logo.png" alt="Logo" height="80px">
                            <span>FWW 食天品地</span>
                        </a>
                    </div><!-- /.header-logo -->

                    <div class="header-content">
                    <?php include("common/form/search.php"); ?>


                        <form action="" method="POST">
                        <div class="header-top">
                        <?php ?>
                            <div class="header-search">
                                <input type="text" class="form-control"  name="search" placeholder="Search for..." required>
                               
                            </div><!-- /.header-search -->
                        </form>

                            <ul class="header-nav-social social-links nav nav-pills">
                                <li><a href="https://www.facebook.com/foodwonderworld/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            </ul><!-- /.header-nav-social -->

                            <ul class="header-nav-secondary nav nav-pills">

                                <?php if($_SESSION["session_email"]==""){ ?>
                                    <li <?php if($page=="user-login"){?> class="active" <?php }?>>
                                        <a href="/?page=user-login">Login</a>
                                    </li>
                                    <li <?php if($page=="user-registration") {?> class="active" <?php } ?> ><a href="/?page=user-registration">Registration</a>
                                    </li>
                                <?php }else{ ?>
                                    <li><a href="/?page=logout">LOGOUT(<?=$_SESSION["session_email"];?>)</a></li>
                                   
                                <?php } ?>
                            </ul>
                        </div><!-- /.header-top -->

                        <div class="header-bottom">

                            <ul class="header-nav-primary nav nav-pills collapse navbar-collapse">
                                <li <?php if($page=="home"||$page==""){ ?>class="active"<?php } ?>>
                                    <a href="/?page=home">Home</a>
                                </li>

                                <li <?php if($page=="about"){ ?>class="active"<?php } ?>>
                                    <a href="/?page=about">About</a>
                                </li>

                                <li <?php if($page=="login"){ ?>class="active"<?php } ?>>
                                    <a href="/?page=login">Merchant Login <i class="fa fa-chevron-down"></i></a>
                                    
                                    <ul class="sub-menu">
                                        <li <?php if($page=="logout") {?> class="active" <?php }?>> <a href="/?page=logout"> Logout </a></li>
                                        <!-- <li><a href="admin-tables.html">Tables</a></li> -->
                                        <!-- <li><a href="admin-forms.html">Forms</a></li> -->
                                    </ul>
                                
                                </li>

                                <li <?php if($page=="contact"){ ?>class="active"<?php } ?>>
                                    <a href="/?page=contact">Contact</a>
                                </li>
                            </ul>

                            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".header-nav-primary">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                        </div><!-- /.header-bottom -->
                    </div><!-- /.header-content -->
                </div><!-- /.header-inner -->
            </div><!-- /.container -->
        </div><!-- /.header-wrapper -->
    </header><!-- /.header -->