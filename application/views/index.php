<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <title><?php echo "$title"; ?></title>
    <?php $this->load->view('headerlinks'); ?>
</head>                                 
<body class="header-sticky">   
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    
    <!-- Boxed -->
    <div class="boxed">
    <?php /* 
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="language">        
                        <ul class="flat-information">
                            <li class="email"><a href="mailto:AlitStudios@gmail.com">AlitStudios@gmail.com</a></li>
                            <li class="phone"><a href="61383766284">+61 3 8376 6284</a></li>
                            <li class="current"><a href="#">English</a>
                                <ul>  
                                    <li class="en"><a href="#">English</a></li>
                                    <li class="ge"><a href="#">German</a></li>
                                    <li class="pl"><a href="#">Polish</a></li>
                                    <li class="ru"><a href="#">Russian</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.language -->
                </div><!-- /.col-md-6 -->   
                <div class="col-md-6">
                    <div class="top-navigator">
                        <ul>
                            <li><a href="#">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div><!-- /.top-navigator --> 
                </div><!-- /.col-md-6 -->              
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.top -->
    */?>
    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <?php $this->load->view('header'); ?>
    </header><!-- /.header -->

    <!-- Slider -->
    <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>
                <li data-transition="slideup" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="<?php echo base_url();?>assets/images/slides/1.jpg" alt="slider-image" />
                    <div class="tp-caption sfl title-slide center" data-x="379" data-y="245" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">
                        
                    </div>  
                    <div class="tp-caption sfr desc-slide center" data-x="306" data-y="322" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">                       
                        We provide the best in-class Institute services to reach your audience easily and effectively.<br>To make your audience more productive, we have different kind of blogs too.
                    </div>                            
                </li>

                <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="<?php echo base_url();?>assets/images/slides/2.jpg" alt="slider-image" />

                    <div class="tp-caption sfb title-slide color-white style1" data-x="15" data-y="254" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">Save your time,<br>and be more productive.</div>

                    <div class="tp-caption sfb desc-slide color-white" data-x="15" data-y="398" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">
                    Qn-Center foucuses on giving best services<br>And make your work less stressfull.
                    </div>

                    <div class="tp-caption sfb center color-white flat-button-slide" data-x="15" data-y="528" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                        <a href="<?php echo base_url('Blog');?>">View Our Blogs</a>
                    </div>
                </li>

                <!-- <li data-transition="random-static" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="<?php //echo base_url();?>assets/images/slides/3.jpg" alt="slider-image" />

                    <div class="tp-caption sfb title-slide color-white center style2" data-x="315" data-y="285" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">Welcome To Aquarius</div>

                    <div class="tp-caption sft desc-slide color-white center" data-x="387" data-y="370" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce<br>tincidunt elit felis, at sagittis enim</div>

                    <div class="tp-caption sft center color-white flat-button-slide style1" data-x="484" data-y="463" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">
                        <a href="#">learn more</a>
                    </div>
                </li> -->

                <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" data-saveperformance="on">
                    <img src="<?php echo base_url();?>assets/images/slides/4.jpg" alt="slider-image" />

                    <div class="tp-caption sft sub-title" data-x="480" data-y="232" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut">Specialized Online Blogs.</div>

                    <div class="tp-caption sft title-slide color-white center style3" data-x="218" data-y="300" data-speed="1000" data-start="1500" data-easing="Power3.easeInOut">we will help to learn</div>

                    <div class="tp-caption sfb desc-slide color-white center style1" data-x="319" data-y="381" data-speed="1000" data-start="2000" data-easing="Power3.easeInOut">We have 100+ category based blogs to help students to be updated.<br/>Like Latest News, Trending technologies and many more.</div>                        
                </li>
            </ul>
        </div>
    </div>

    <div class="flat-divider d55px"></div>

    <!-- About us style1 -->
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="flat-about-us clearfix">
                    <div class="col-md-7">
                        <div class="about-us-img clearfix">
                            <div class="v1">
                                <div class="overly-img"></div>  
                                <img src="<?php echo base_url();?>assets/images/about/about2.jpg" alt="image">
                            </div>
                            <div class="v2">
                                <div class="overly-img"></div>
                                <img src="<?php echo base_url();?>assets/images/about/about6.png" alt="image">
                            </div>
                            <div class="v3">
                                <div class="overly-img"> </div>  
                                <img src="<?php echo base_url();?>assets/images/about/about1.jpg" alt="image">
                            </div>                            
                        </div><!-- /.about-us-img -->
                    </div><!-- /.col-md-7 -->
                    
                    <div class="col-md-5">
                        <div class="about-us style1">
                            <h2 class="title-about-us">our story</h2>
                            <div class="desc">
                                <p>We started this service in 2019, we want to make sure all the institutes make their work less stressful and focus on their students and give them the quality education.Their audience can get all the notices and important files easily through our plateform.</p>
                                <!-- <p>Sometime students, who want to pass competitive exams with high scores, don't have the proper knowledge and guidance. So through our courses they can get some help and do best.</p> -->
                                <p>Sometimes students don't know what are the trending things going on their field, to cover this we have category based blogs, which gives you the perfect knowledge to make yourself to be updated.</p>
                            </div>
                        </div><!-- /.about-us -->
                    </div><!-- /.col-md-5 -->
                </div><!-- /.flat-about-us -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <div class="flat-divider d88px"></div>
    
    <section class="flat-row parallax parallax3">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-divider d33px"></div>
                    <div class="title-section cl-white style3 v3">
                        <h1 class="title">Register with US</h1>
                        <div class="desc">
                            <p>We are a global branding company helping Institutes to communicate with their students<br>through Our plateform to make their work efficient.</p>
                        </div>
                        <a class="flat-button style1" href="<?php echo base_url('Institute/User/register') ?>">Register now!</a>
                    </div>               
                    <div class="flat-divider d33px"></div>  
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->        
    </section>
    
    <!-- Flat courses -->
    <section class="flat-row pad-bottom90px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style1">
                        <h1 class="title">Popular Categories</h1>
                        <div class="desc">
                            <p>These are some popular categories, In which students have more interest<br> We provide all kind of career based blogs to help you to achieve your goals!</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo base_url();?>assets/images/icon/line.png" alt="image">
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d55px"></div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat1.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Business and Economics</h6></a>
                            <p>Management, Marketing, Business</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat2.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Language</h6></a>
                            <p>English, French, Chinese</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat3.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Arts</h6></a>
                            <p>Design, Film, Photography</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat4.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Fashion</h6></a>
                            <p>Fashion Design, Fashion Marketing</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d40px"></div>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat5.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Health Studies</h6></a>
                            <p>Anesthesiology, Immunology</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat6.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Food and Beverage Studies</h6></a>
                            <p>Culinary Arts, Pastry</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat7.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Engineering & Technology</h6></a>
                            <p>IT, Computer Science, Engineering</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.php"><img src="<?php echo base_url();?>assets/images/course/cat8.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.php">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.php"><h6 class="courses-topic">Humanities and Social Sciences</h6></a>
                            <p>Education, Media, Sociology</p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->

    <!-- Portfolio -->
    <section  class="flat-row portfolio-row-page">
        <!-- Portfolio Fullwidth -->
        <div class="flat-portfolio">  
            <div class="portfolio-wrap clearfix">
                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.3.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.3.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->

                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.2.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.2.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->

                <div class="item w50">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.1.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.1.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->
     
                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.4.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.4.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                   
                </div><!-- /.portfolio-item -->

                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.5.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.5.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->

                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.6.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.6.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->

                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.7.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.7.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->

                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.8.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.8.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->

                <div class="item">                                     
                    <a class="popup-gallery" href="<?php echo base_url();?>assets/images/portfolio/1.9.jpg"><img src="<?php echo base_url();?>assets/images/portfolio/1.9.jpg" alt="images"></a>
                    <div class="overlay">                            
                    </div>                    
                </div><!-- /.portfolio-item -->       

            </div><!-- /.portfolio-wrap -->
        </div><!-- /.flat-portfolio --> 
    </section>

    <div class="flat-divider d90px"></div>

    <?php  
    /*<!-- Team member style1-->
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="flat-teammember clearfix">
                    <div class="col-md-9 col-xs-12">               
                        <div class="flat-team-carosuel" data-item="1" data-nav="false" data-dots="false" data-auto="true">
                            <div class="flat-team style1">
                                <div class="descritption">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt. Sed dapibus massa sed felis sodales, sed ornare metus gravida. Etiam tempus lobortis felis, sollicitudin ultricies ipsum porta nec. Quisque at luctus dui, eu accumsan nunc.</blockquote>
                                </div>
                                <div class="profile">
                                    <span class="name">Jen Maroney , </span>
                                    <span class="position">Ceo Auquarius</span>
                                </div>
                                <div class="signature">
                                    <p>Jen Maroney</p>
                                </div>
                            </div><!-- /.flat-team --> 
                            <div class="flat-team style1">
                                <div class="descritption">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt. Sed dapibus massa sed felis sodales, sed ornare metus gravida. Etiam tempus lobortis felis, sollicitudin ultricies ipsum porta nec. Quisque at luctus dui, eu accumsan nunc.</blockquote>
                                </div>
                                <div class="profile">
                                    <span class="name">Jen Maroney , </span>
                                    <span class="position">Ceo Auquarius</span>
                                </div>
                                <div class="signature">
                                    <p>Jen Maroney</p>
                                </div>
                            </div><!-- /.flat-team -->                                      
                        </div><!-- /.flat-team-carosuel -->
                    </div><!-- /.col-md-9 --> 

                   <div class="col-md-3 col-xs-12">
                       <div class="team-image">
                           <img src="<?php echo base_url();?>assets/images/member/1.png" alt="image">
                       </div><!-- /.team-image -->
                   </div><!-- /.col-md-3 -->
                </div><!-- /.flat-teammember -->
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
    </section>*/
    ?>
    <!-- Team member style2 -->
    <?php /*
    <section class="flat-row pad-top95px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style1">
                        <h1 class="title">Our Authors</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin<br> turpis egestas! Mauris dapibus sed integer placerat, scelerisque!</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo base_url();?>assets/images/icon/line.png" alt="image">
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d55px"></div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="flat-team-carosuel-style2" data-item="1" data-nav="true" data-dots="false" data-auto="true">
                        <div class="flat-team style2">
                            <div class="profile">
                                <p class="name">Jen Maroney</p>
                                <p class="position">English Teacher</p>
                            </div>
                            <div class="team-image">
                                <img src="<?php echo base_url();?>assets/images/teacher/3.png" alt="aquarius">
                            </div>
                            <div class="descritption">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt. Sed dapibus massa sed felis sodales, sed ornare metus gravida.</blockquote>
                            </div> 
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
                        </div><!-- /.flat-team -->

                        <div class="flat-team style2">
                            <div class="profile">
                                <p class="name">Jen Maroney</p>
                                <p class="position">English Teacher</p>
                            </div>
                            <div class="team-image">
                                <img src="<?php echo base_url();?>assets/images/teacher/4.png" alt="aquarius">
                            </div>
                            <div class="descritption">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt. Sed dapibus massa sed felis sodales, sed ornare metus gravida.</blockquote>
                            </div> 
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
                        </div><!-- /.flat-team -->

                        <div class="flat-team style2">
                            <div class="profile">
                                <p class="name">Jen Maroney</p>
                                <p class="position">English Teacher</p>
                            </div>
                            <div class="team-image">
                                <img src="<?php echo base_url();?>assets/images/teacher/5.png" alt="aquarius">
                            </div>
                            <div class="descritption">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et velit metus. Vivamus nulla est, accumsan ut turpis sed, accumsan tincidunt lacus. Sed et nisl tincidunt sapien suscipit maximus ut non urna. Phasellus tempus arcu vel odio lobortis pretium. Proin tincidunt eget lacus nec tincidunt. Sed dapibus massa sed felis sodales, sed ornare metus gravida.</blockquote>
                            </div> 
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
                        </div><!-- /.flat-team -->

                    </div><!-- /.flat-team-carosuel -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
    
    <section class="flat-row bg-color-themes">        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flat-divider d33px"></div>
                    <div class="title-section cl-white style3 v3">
                        <h1 class="title">Register with US</h1>
                        <div class="desc">
                            <p>We are a global branding company helping Institutes to communicate with their students<br>through Our plateform to make their work efficient.</p>
                        </div>
                        <a class="flat-button style1" href="<?php echo base_url('Institute/User/register') ?>">Register now!</a>
                    </div>               
                    <div class="flat-divider d33px"></div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    */?>
    <?php /* 
    <!-- Register -->
    <section class="flat-row pad-top180px">
        <div class="container">
            <div class="row flat-margin-lr">
                <div class="col-md-12 flat-border flat-padding-lr clearfix">
                    <div class="col-md-6">
                        <div class="flat-countdown-event">
                            <div class="sub-title">Get 100s of online courses for free</div>
                            <div class="title-countdown">Register now</div>
                            <div class="countdown" data-date="May 8, 2016 7:00:00"></div>
                        </div><!-- /.flat-countdown-event -->
                    </div><!-- /.col-md-6 -->
                    
                    <div class="col-md-6"> 
                        <div class="wrap-form-event">
                            <form class="flat-contact-form border-radius field-large text-large text-center" id="aquarius-contactform5" method="post" action="./contact/contact-process.php">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">                    
                                    <div class="input-wrap name">
                                        <input type="text" value="" tabindex="1" placeholder="Your name" name="name" id="name-form" required>
                                    </div>
                                    <div class="input-wrap email">
                                        <input type="email" value="" tabindex="2" placeholder="Your email" name="email" id="email-form" required>
                                    </div>
                                    <div class="input-wrap last Subject">
                                        <input type="text" value="" placeholder="Your phone" name="subject" id="subject-1" >
                                    </div>  
                                </div>                           
                            </div>
                            <div class="submit-wrap">
                                <button>Get it now</button>
                            </div>
                            </form><!-- /.comment-form -->          
                        </div><!-- /.wrap-form-event -->         
                    </div><!-- /.col-md-5 -->
                </div><!-- /.col-md-12 flat-border -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    
    <!-- Testimonial -->
    <section class="flat-row parallax parallax4 row-bg-whiteblack pad-top240px pad-bottom0px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="flat-testimonials-images">
                        <div class="flat-testimonials-slider">
                            <div id="flat-testimonials-flexslider">
                                <ul class="slides">
                                    <li>
                                        <p class="say">Maecenas facilisis ante mi, nec interdum massa pretium in. Suspendisse sit amet risus non ex molestie ornare sed id odio. Aliquam tincidunt in nunc at consequat. Nullam nec diam erat.</p>
                                        <p class="name">Karen Menezes</p>
                                    </li>
                                    <li>
                                        <p class="say">Maecenas facilisis ante mi, nec interdum massa pretium in. Suspendisse sit amet risus non ex molestie ornare sed id odio. Aliquam tincidunt in nunc at consequat. Nullam nec diam erat.</p>
                                        <p class="name">Karen Menezes</p>
                                    </li>
                                    <li>
                                        <p class="say">Maecenas facilisis ante mi, nec interdum massa pretium in. Suspendisse sit amet risus non ex molestie ornare sed id odio. Aliquam tincidunt in nunc at consequat. Nullam nec diam erat.</p>
                                        <p class="name">Karen Menezes</p>
                                    </li>
                                    <li>
                                        <p class="say">Maecenas facilisis ante mi, nec interdum massa pretium in. Suspendisse sit amet risus non ex molestie ornare sed id odio. Aliquam tincidunt in nunc at consequat. Nullam nec diam erat.</p>
                                        <p class="name">Karen Menezes</p>
                                    </li>
                                    <li>
                                        <p class="say">Maecenas facilisis ante mi, nec interdum massa pretium in. Suspendisse sit amet risus non ex molestie ornare sed id odio. Aliquam tincidunt in nunc at consequat. Nullam nec diam erat.</p>
                                        <p class="name">Karen Menezes</p>
                                    </li>
                                    <li>
                                        <p class="say">Maecenas facilisis ante mi, nec interdum massa pretium in. Suspendisse sit amet risus non ex molestie ornare sed id odio. Aliquam tincidunt in nunc at consequat. Nullam nec diam erat.</p>
                                        <p class="name">Karen Menezes</p>
                                    </li>                                    
                                </ul>
                            </div>
                            <div id="flat-testimonials-carousel">
                                <ul class="slides">
                                    <li>
                                        <img alt="image" src="<?php echo base_url();?>assets/images/testimonial/1.png">
                                    </li>
                                    <li>
                                        <img alt="image" src="<?php echo base_url();?>assets/images/testimonial/2.png">
                                    </li>
                                    <li>
                                        <img alt="image" src="<?php echo base_url();?>assets/images/testimonial/3.png">
                                    </li>
                                    <li>
                                        <img alt="image" src="<?php echo base_url();?>assets/images/testimonial/4.png">
                                    </li>
                                    <li>
                                        <img alt="image" src="<?php echo base_url();?>assets/	images/testimonial/5.png">
                                    </li>                           
                                </ul>
                            </div>
                        </div><!-- /.flat-testimonials-slider -->
                    </div><!-- /.flat-testimonials -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Flat event -->
    <section class="flat-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style1">
                        <h1 class="title">Upcomming Events</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin<br> turpis egestas! Mauris dapibus sed integer placerat, scelerisque!</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo base_url();?>assets/images/icon/line.png" alt="image">
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d75px"></div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="flat-event-slide">
                        <div class="flat-eventdate-slider">
                            <div id="flat-eventdate-carousel">
                                <ul class="slides">
                                    <li>
                                        <div class="event-date">January 15th, 2016</div>
                                    </li>
                                    <li>
                                        <div class="event-date">January 15th, 2016</div>
                                    </li>
                                    <li>
                                       <div class="event-date">January 15th, 2016</div>
                                    </li>
                                    <li>
                                       <div class="event-date">January 15th, 2016</div>
                                    </li>                                                         
                                </ul>                               
                            </div>
                            <div id="flat-eventcontent-flexslider">
                                <ul class="slides">
                                    <li>
                                        <div class="flat-event">
                                            <div class="event-images">
                                                <img src="<?php echo base_url();?>assets/images/event/event.jpg" alt="image">
                                            </div><!-- /.event-images -->

                                            <div class="event-wrapper">
                                                <h5 class="title"><a href="#">Leaner Responsive Images With Client Hints</a></h5>
                                                <div class="meta">                                
                                                    <div class="location">Los Angeles, US</div>
                                                    <div class="content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus.</p>
                                                        <a href="#" class="readmore">Read more</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.event-wrapper -->                            
                                        </div><!-- /.flat-event -->                 
                                    </li>
                                    <li>
                                        <div class="flat-event">
                                            <div class="event-images">
                                                <img src="<?php echo base_url();?>assets/images/event/event.jpg" alt="image">
                                            </div><!-- /.event-images -->

                                            <div class="event-wrapper">
                                                <h5 class="title"><a href="#">Leaner Responsive Images With Client Hints</a></h5>
                                                <div class="meta">                                
                                                    <div class="location">Los Angeles, US</div>
                                                    <div class="content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus.</p>
                                                        <a href="#" class="readmore">Read more</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.event-wrapper -->                            
                                        </div><!-- /.flat-event -->  
                                    </li>
                                    <li>
                                       <div class="flat-event">
                                            <div class="event-images">
                                                <img src="<?php echo base_url();?>assets/images/event/event.jpg" alt="image">
                                            </div><!-- /.event-images -->

                                            <div class="event-wrapper">
                                                <h5 class="title"><a href="#">Leaner Responsive Images With Client Hints</a></h5>
                                                <div class="meta">                                
                                                    <div class="location">Los Angeles, US</div>
                                                    <div class="content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus.</p>
                                                        <a href="#" class="readmore">Read more</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.event-wrapper -->                            
                                        </div><!-- /.flat-event -->  
                                    </li>
                                    <li>
                                       <div class="flat-event">
                                            <div class="event-images">
                                                <img src="<?php echo base_url();?>assets/images/event/event.jpg" alt="image">
                                            </div><!-- /.event-images -->

                                            <div class="event-wrapper">
                                                <h5 class="title"><a href="#">Leaner Responsive Images With Client Hints</a></h5>
                                                <div class="meta">                                
                                                    <div class="location">Los Angeles, US</div>
                                                    <div class="content">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus.</p>
                                                        <a href="#" class="readmore">Read more</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.event-wrapper -->                            
                                        </div><!-- /.flat-event -->  
                                    </li>                                                         
                                </ul>
                            </div>                            
                        </div><!-- /.flat-eventdate-slider -->
                    </div><!-- /.flat-event-slide -->                           
                </div><!-- /.col-md-10 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <!-- Blog -->
    <section class="flat-row main-content blog pad-bottom60px" style="padding-top: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style1">
                        <h1 class="title">Lastest Form Us</h1>
                        <div class="desc">
                            <p>Vut sagittis a, magna ridiculus! Scelerisque parturient! Cum duis nunc in, dignissim, porta porta enim, proin<br> turpis egestas! Mauris dapibus sed integer placerat, scelerisque!</p>
                        </div>
                        <div class="icon">
                            <img src="<?php echo base_url();?>assets/images/icon/line.png" alt="image">
                        </div>
                    </div><!-- /.title-section -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="flat-divider d50px"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        <article class="entry clearfix images-left">                       
                            <div class="feature-post">
                                <a href="blog_single_v2.php"><img src="<?php echo base_url();?>assets/images/blog/b1.jpg" alt="image"></a>
                            </div><!-- /.feature-post -->

                            <div class="main-post">
                                <h2 class="title-post"><a href="blog_single_v2.php">Designing Healthcare Apps With Delight</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">By Charlie Walter</a></span>
                                        </li>                                        
                                        <li class="post-date">November 18th, 2015</li>
                                        <li class="post-categories">
                                            <a href="#">Graphic</a>,
                                            <a href="#">Website</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget, venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Pellentesque faucibus risus libero.<a class="read-more" href="blog_single_v2.php">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post -->                            
                        </article><!-- /.entry -->

                        <article class="entry clearfix images-right">
                            <div class="main-post">
                                <h2 class="title-post"><a href="blog_single_v2.php">Designing Healthcare Apps With Delight</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">By Charlie Walter</a></span>
                                        </li>                                        
                                        <li class="post-date">November 18th, 2015</li>
                                        <li class="post-categories">
                                            <a href="#">Graphic</a>,
                                            <a href="#">Website</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget, venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Pellentesque faucibus risus libero.<a class="read-more" href="blog_single_v2.php">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post --> 
                            <div class="feature-post">
                                <a href="blog_single_v2.php"><img src="<?php echo base_url();?>assets/images/blog/b2.jpg" alt="image"></a>
                            </div><!-- /.feature-post -->                           
                        </article><!-- /.entry -->

                        <article class="entry clearfix images-left">                           
                            <div class="feature-post">
                                <a href="blog_single_v2.php"><img src="<?php echo base_url();?>assets/images/blog/b3.jpg" alt="image"></a>
                            </div><!-- /.feature-post -->

                            <div class="main-post">
                                <h2 class="title-post"><a href="blog_single_v2.php">Designing Healthcare Apps With Delight</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">By Charlie Walter</a></span>
                                        </li>                                        
                                        <li class="post-date">November 18th, 2015</li>
                                        <li class="post-categories">
                                            <a href="#">Graphic</a>,
                                            <a href="#">Website</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget, venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Pellentesque faucibus risus libero.<a class="read-more" href="blog_single_v2.php">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post -->                            
                        </article><!-- /.entry -->

                        <article class="entry clearfix images-right">
                            <div class="main-post">
                                <h2 class="title-post"><a href="blog_single_v2.php">Designing Healthcare Apps With Delight</a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span><a href="#">By Charlie Walter</a></span>
                                        </li>                                        
                                        <li class="post-date">November 18th, 2015</li>
                                        <li class="post-categories">
                                            <a href="#">Graphic</a>,
                                            <a href="#">Website</a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In rutrum odio urna, vitae ultrices mi malesuada ut. Praesent lacus erat, ultricies ut risus nec, pellentesque interdum purus. In mi justo, consectetur tincidunt sapien eget, venenatis volutpat risus. Maecenas eget pretium eros. Integer tincidunt aliquet ligula in vulputate. Pellentesque faucibus risus libero.<a class="read-more" href="blog_single_v2.php">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post --> 

                            <div class="feature-post">
                                <a href="blog_single_v2.php"><img src="<?php echo base_url();?>assets/images/blog/b4.jpg" alt="image"></a>
                            </div><!-- /.feature-post -->                           
                        </article><!-- /.entry -->
                    </div><!-- /.post-wrap -->    
                    <div class="load-more">
                        <a class="flat-button" href="#">Load more</a>
                    </div>        
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <div class="flat-divider d85px"></div>
     */?>
    <!-- Flat contact -->
    <section class="flat-row bg-contact pad-top375px pad-bottom360px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wrap-contactform-home1">
                        <form id="contactform" class="flat-contact-form border-radius field-large text-large"  method="post" action="<?php echo base_url();?>assets/contact/contact-process.php">
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