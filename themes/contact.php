<?php 
if($form=="contact_us"){

    $name=$_POST["txtName"];
    $subject=$_POST["txtSubject"];
    $email=$_POST["txtEmail"];
    $message=$_POST["message"];

    $sql=mysqli_query($conn,"INSERT INTO `b7_18558097_foodwonder`.`db_enquiry` (`txtName`, `txtSubject`, `txtEmail`, `message`, `enquiry_date`) VALUES ('$name', '$subject', '$email', '$message', '$enquiry_date')");
                                                                               

    if(($sql=="TRUE")) {
        echo"Thank You"." " . $name." ". "for enquiry.we will replay early as possible..";
    }else{ 
        echo"Message Send Error ..";
    }
    
}
?>
<br>
<div class="main">
        <div class="main-inner">
            <div class="container">
                <div class="content">
                    
                    <div class="document-title">
                        <br><br>
                        <h1>Contact Us</h1>

                        <ul class="breadcrumb">
                            <li><a href="#">Food Wonder World 食天品地</a></li>
                            <li><a href="#">A Project by Brandhex Hybrid</a></li>
                        </ul>
                    </div><!-- /.document-title -->

                    <div class="background-white p30 mt30 mb30">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15934.21445569486!2d101.6466945!3d3.2112068!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x57965797b82c0fa2!2sBrandhex+Hybrid!5e0!3m2!1sen!2s!4v1468350445293" width="100%" height="350" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
                    </div>

                    <h3>We’d love to hear from you. Say us hello!</h3>

                    <div class="contact-form-wrapper clearfix background-white p30">
                        <form class="contact-form" method="post" action="">
                        <input type="hidden" name="form" value="contact_us">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="contact-form-name">Name</label>
                                        <input type="text" name="txtName" id="contact-form-name" class="form-control" required>
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-* -->

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="contact-form-subject">Subject</label>
                                        <input type="text" name="txtSubject" id="contact-form-subject" class="form-control">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-* -->

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="contact-form-email">E-mail</label>
                                        <input type="text" name="txtEmail" id="contact-form-email" class="form-control">
                                    </div><!-- /.form-group -->
                                </div><!-- /.col-* -->
                            </div><!-- /.row -->

                            <div class="form-group">
                                <label for="contact-form-message">Message</label>
                                <textarea class="form-control" name="message" id="contact-form-message"  rows="6"></textarea>
                            </div><!-- /.form-group -->

                            <button class="btn btn-primary pull-right" type="submit"> Post Message</button>
                        </form><!-- /.contact-form -->
                    </div><!-- /.contact-form-wrapper -->

                </div><!-- /.content -->
            </div><!-- /.container -->
        </div><!-- /.main-inner -->
    </div><!-- /.main -->