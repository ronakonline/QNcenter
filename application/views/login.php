<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php echo "$title"; ?></title>
    <?php $this->load->view('headerlinks'); ?>
</head>                                 
<body class="header-sticky">   
    <!-- <section class="loading-overlay">
        <div class="Loading-Page">
            <h2 class="loader">Loading...</h2>
        </div>
    </section>  -->
    
    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <?php $this->load->view('header'); ?>
    </header><!-- /.header -->
    <?php echo usererrormsg();
    echo usersuccessmsg();?>
         
    <!-- Login -->
    <div class="flat-row pad-top50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="flat-login">
                        <form action="<?php echo base_url();?>User/Login/check_login" class="flat-contact-form border-white border-large" id="contactform5"  method="post">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">                    
                                    <div class="input-wrap name">
                                        <p>Email*</p>
                                        <input type="email" value="" tabindex="1" name="email" id="email" required>
                                    </div>
                                    <div class="input-wrap email">
                                        <p>Password *</p>
                                        <input type="password" value="" tabindex="2" name="password" id="password" required>
                                    </div>                                    
                                </div>
                            </div>
                            <div class="submit-wrap">
                                <button type="submit" tabindex="3">login</button>
                            </div>
                            <div class="option-login">
                                <div class="remember">
                                    <input type="checkbox" name="check3" id="check3" class="css-checkbox" checked="checked"/><label for="check3" class="css-label">Remember me</label>
                                </div>
                                <div class="forgot">
                                    <a href="#">I forgot my password</a>
                                </div>
                            </div>
                            <!-- <div class="create-account">
                                <p>Not registered? No problem</p>
                                <div class="link-submit-wrap">
                                    <a href="#">create an account</a>
                                </div>
                            </div> -->
                        </form><!-- /.comment-form -->
                        <div class="create-account">
                            <div class="link-submit-wrap">
                                <a href="<?php echo base_url('Institute/') ?>">Login&nbsp;&nbsp;Institute</a>
                            </div>
                            <div class="forgot text-center">
                                Don't have an account? <a style="color: blue;font-size: 17px;" href="<?php echo base_url('Institute/register') ?>">Register now!</a>
                            </div>
                        </div>
                    </div><!-- /.flat-login -->
                </div><!-- /.col-md-6 .col-md-offset-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
   
    <!-- Footer -->
    <footer class="footer">        
        <?php $this->load->view('footer'); ?>
    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <?php $this->load->view('bottom'); ?>
    </div>

    <!-- Go Top -->
    <a class="go-top">
        <i class="fa fa-angle-up"></i>
    </a>   

    </div>
    
    <!-- Javascript -->
    <?php $this->load->view('scripts'); ?>
</body>
</html>
