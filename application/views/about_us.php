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

     <!-- Flat content box -->
    <section class="flat-row pad-bottom90px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="thumb-content-box">
                        <img src="images/about/about3.jpg" alt="image">
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="content-box">
                        <h2 class="title"><a href="#">Who We Are</a></h2>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae risus vestibulum, feugiat tellus nec, finibus nisi. Duis eu quam feugiat metus semper sollicitudin sed quis erat. Morbi hendrerit imperdiet mi ut tristique. Integer vitae viverra lacus. Donec quis erat vehicula, faucibus tellus ut, finibus nunc.</p>
                            <p> Donec luctus, felis id varius facilisis, nulla urna suscipit nibh, sed hendrerit tellus ligula at arcu. In lorem lacus, dapibus eu congue at, consectetur sit amet leo.</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="content-box">
                        <h2 class="title"><a href="#">What We Do</a></h2>
                        <div class="content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae risus vestibulum, feugiat tellus nec, finibus nisi. Duis eu quam feugiat metus semper sollicitudin sed quis erat. Morbi hendrerit imperdiet mi ut tristique. Integer vitae viverra lacus. Donec quis erat vehicula, faucibus tellus ut, finibus nunc.</p>
                            <p> Donec luctus, felis id varius facilisis, nulla urna suscipit nibh, sed hendrerit tellus ligula at arcu. In lorem lacus, dapibus eu congue at, consectetur sit amet leo.</p>
                        </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

     <!-- Flat video parallax -->
    <section class="flat-row flat-video video-bg parallax bg-playvideo">
        <div class="overlay"></div>        
        <div class="video">
            <div id="bg-video">
                <div class="video-section" data-property="{videoURL:'https://youtu.be/raDmtsOB7n0',containment:'.flat-video.video-bg', autoPlay:false, mute:true, startAt:0, opacity:1, vol: 0, realfullscreen:true, quality: 'hd1080', startAt: 12}"></div>
            </div>
            <div id="video-controls" style="display: block;">
                <a class="fa fa-play text-color color-border" id="video-play" href="#"></a>
                <br />
                <h2 class="title">take the time to visit our school</h2>
            </div> 
        </div>
    </section>

    <!-- Flat iconbox left style1 -->
    <section class="flat-row pad-bottom85px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single-image style1">
                        <img src="images/about/about4.png" alt="image">
                    </div>
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="about-us">
                        <h2 class="title-about-us">Why Choose Us</h2>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin turpis egestas</p>                           
                        </div>
                    </div><!-- /.about-us -->

                    <div class="flat-divider d30px"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="flat-iconbox style1">
                                <div class="icon-image">
                                    <span class="icon-Board"></span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Our Teaching</a></h6>            
                                    <p>Nullam ultricies urna id ornare interdum. Maecenas ut suscipit mauris, non sodales metus. Pellentesque cursus.</p> 
                                </div>
                            </div><!-- /.flat-iconbox -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="flat-iconbox style1">
                                <div class="icon-image">
                                    <span class="icon-Notepad"></span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Our Student Feedback</a></h6>            
                                    <p>Nullam ultricies urna id ornare interdum. Maecenas ut suscipit mauris, non sodales metus. Pellentesque cursus.</p> 
                                </div>
                            </div><!-- /.flat-iconbox -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->

                    <div class="flat-divider d45px"></div>

                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="flat-iconbox style1">
                                <div class="icon-image">
                                    <span class="icon-Brain"></span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Our Experience</a></h6>            
                                    <p>Nullam ultricies urna id ornare interdum. Maecenas ut suscipit mauris, non sodales metus. Pellentesque cursus.</p> 
                                </div>
                            </div><!-- /.flat-iconbox -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6 col-sm-6 col-xs-6">
                            <div class="flat-iconbox style1">
                                <div class="icon-image">
                                    <span class="icon-Affiliate"></span>
                                </div>
                                <div class="content">
                                    <h6 class="title"><a href="#">Our School Partnerships</a></h6>            
                                    <p>Nullam ultricies urna id ornare interdum. Maecenas ut suscipit mauris, non sodales metus. Pellentesque cursus.</p> 
                                </div>
                            </div><!-- /.flat-iconbox -->
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Flat aquarius -->
    <section class="flat-row pad-top80px pad-bottom90px" style="background-color: #697ea4;">
        <div class="container">
            <div class="row">
                <div class="aquarius">
                    <h2>We Are <span>Aquarius</span>. A Wordpress Education Theme</h2>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- About-us -->
    <section class="flat-row pad-bottom60px pad-top85px">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us pad-top55px">
                        <h2 class="title-about-us">Our Mission <span>and</span> Philosophy</h2>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin turpis egestas! Mauris dapibus sed integer placerat, scelerisque! Ac enim nascetur rhoncus facilisis phasellus eu sit turpis purus magna auctor nunc facilisis parturient ac tempor, montes etiam tortor rhoncus! In, aliquam. Elementum urna, tincidunt? Nisi ut urna? Arcu, odio facilisis urna magna vel, elementum integer quis nisi nisi scelerisque etiam.</p>
                            <ul>
                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                <li>Nam ultrices elit augue, at euismod ipsum bibendum at.</li>
                                <li>Nulla semper consectetur ex,</li>
                                <li>Integer nisl nisi, scelerisque in metus nec</li>
                                <li>Aenean suscipit ullamcorper aliquam.</li>
                            </ul>
                        </div>
                    </div><!-- /.about-us -->
                </div><!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="single-image">
                        <img src="images/about/about5.png" alt="image">
                    </div><!-- /.about-us-img -->                        
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <!-- Team member style3 -->
    <section class="flat-row pad-top95px pad-bottom40px" style="background-color: #eef1f6;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style2">
                        <h1 class="title">Our Teacher</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin<br>turpis egestas! Mauris dapibus sed integer placerat, scelerisque!</p>
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d60px"></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="flat-grid margin55px">
                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/1.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->

                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/2.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->

                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/3.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->

                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/4.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->
                    </div><!-- /.flat-grid -->                    
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="flat-grid margin55px">
                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/5.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->

                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/6.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->

                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/7.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->

                        <div class="flat-team flat-one-four style3">
                            <article class="entry">
                                <div class="entry-border">
                                    <div class="team-image">
                                        <img src="images/teacher/8.png" alt="image">
                                    </div><!-- /.feature-post -->
                                    <ul class="flat-socials">
                                        <li class="facebook">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="instagram">
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                    </ul>  
                                    <div class="profile">
                                        <p class="name">Jen Maroney</p>
                                        <p class="position">Ceo envato</p>
                                    </div><!-- /.main-post -->
                                </div><!-- /.entry-border -->
                            </article><!-- /.entry -->
                        </div><!-- /.flat-one-four -->
                    </div><!-- /.flat-grid -->                    
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Testimonials style1 -->
    <section class="flat-row pad-bottom95px">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image">
                        <img src="images/member/2.png" alt="image">
                    </div>
                </div><!-- /.col-md-4 -->

                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="about-us">
                                <h2 class="title-about-us">Our Student Love Us</h2>
                                <div class="desc">
                                    <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim,<br>porta porta enim, proin turpis egestas</p>
                                </div>
                            </div><!-- /.about-us -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="flat-divider d15px"></div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonials-flexslides flat-testimonials-flex">
                                <ul class="slides">
                                    <li>
                                        <p class="say">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt.</p>
                                        <span class="name">Jen Maroney , </span>
                                        <span class="position">Ceo envato</span>
                                    </li>
                                    <li>
                                        <p class="say">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt.</p>
                                        <span class="name">Jen Maroney , </span>
                                        <span class="position">Ceo envato</span>
                                    </li>
                                    <li>
                                        <p class="say">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt.</p>
                                        <span class="name">Jen Maroney , </span>
                                        <span class="position">Ceo envato</span>
                                    </li>
                                    <li>
                                        <p class="say">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt.</p>
                                        <span class="name">Jen Maroney , </span>
                                        <span class="position">Ceo envato</span>
                                    </li>
                                    <li>
                                        <p class="say">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt.</p>
                                        <span class="name">Jen Maroney , </span>
                                        <span class="position">Ceo envato</span>
                                    </li>
                                </ul>
                            </div><!-- /.testimonials-flexslides -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
   
    <!-- Footer -->
    <footer class="footer">        
        <?php $this->load->view('footer'); ?>
    </footer>

    <!-- Bottom -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="line-top"></div>
                </div>
            </div>
            <div class="row">
                <div class="container-bottom">
                    <div class="col-md-6">
                        <div class="copyright"> 
                            <p>© Copyright <a href="#">Alitstudio</a> 2015. All Rights Reserved.
                            </p>
                        </div>                   
                    </div><!-- /.col-md-6 -->

                    <div class="col-md-6">
                        <ul class="flat-socials text-right">
                            <li class="facebook">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="twitter">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="instagram">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="linkedin">
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>              
                    </div><!-- /.col-md-6 -->
                </div><!-- /.container-bottom -->
            </div><!-- /.row -->
        </div><!-- /.container -->
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