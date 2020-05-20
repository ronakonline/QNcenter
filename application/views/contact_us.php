<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php echo "$title"; ?></title>
    <?php $this->load->view('headerlinks'); ?>
</head>                                 
<body class="header-sticky">   
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    

    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <?php $this->load->view('header'); ?> 
    </header><!-- /.header -->

    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Engineering & Technology</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>All Course 2</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Flat contact -->
    <section class="flat-row pad-bottom0px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-contactform-home1">
                        <form id="contactform" class="flat-contact-form border-radius field-large text-large" method="post" action="./contact/contact-process.php">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">                    
                                    <div class="input-wrap name">
                                        <input type="text" value="" tabindex="1" placeholder="Your name" name="name" id="name" required>
                                    </div>
                                    <div class="input-wrap email">
                                        <input type="email" value="" tabindex="2" placeholder="Your email" name="email" id="email" required>
                                    </div>
                                    <div class="input-wrap last Subject">
                                        <input type="text" value="" placeholder="Subject" name="subject" id="subject" >
                                    </div>  
                                </div>
                                <div class="textarea-wrap">
                                    <textarea class="type-input" tabindex="3" placeholder="Your Message" name="message" id="message-contact" required></textarea>
                                </div>
                            </div>
                            <div class="submit-wrap">
                                <button>send</button>
                            </div>
                        </form><!-- /.comment-form -->   
                    </div><!-- /.wrap-contactform-home1 -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Flat information box -->
    <section class="flat-row pad-top0px pad-bottom85px">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="flat-information-box inf1">
                        <span class="icon">
                            <i class="icon-Smartphone-4"></i>
                        </span>
                        <div class="content">
                            <div class="title">Telephone 1</div>                        
                            <p>+61 3 8376 6284</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-information-box inf2">
                        <span class="icon">
                            <i class="icon-Smartphone-4"></i>
                        </span>
                        <div class="content">
                            <div class="title">Telephone 2</div>                        
                            <p>+61 3 8376 6284</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-information-box inf3">
                        <span class="icon">
                            <i class="icon-Email"></i>
                        </span>
                        <div class="content">
                            <div class="title">Email</div>                        
                            <p>AlitStudios@gmail.com</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3">
                    <div class="flat-information-box inf4">
                        <span class="icon">
                            <i class="icon-Edit-Map"></i>
                        </span>
                        <div class="content">
                            <div class="title">Address</div>                        
                            <p>PO Box 16122 Collins Street</p> 
                        </div> 
                    </div><!-- /.flat-information-box -->
                </div><!-- /.col-md-3 -->
            </div>
        </div><!-- /.container -->
    </section>
   
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