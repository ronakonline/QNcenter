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
    

    <!-- Header -->            
    <header id="header" class="header clearfix"> 
                <div class="header-wrap clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="logo" class="logo">
                            <a href="index.php" rel="home">
                                <img src="<?php echo base_url();?>assets/images/logo.png" alt="image">
                            </a>
                        </div><!-- /.logo -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-2 -->
                    <div class="col-md-10">
                        <div class="nav-wrap">
                            
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu"> 
                                    <li class="home"><a href="<?php echo base_url(); ?>">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>Course_c">Courses</a></li>
                                    <li><a href="<?php echo base_url(); ?>Institute_c">Institutes</a></li>
                                    <li><a href="<?php echo base_url(); ?>Aboutus_c">About Us</a></li>
                                    <li><a href="<?php echo base_url(); ?>Contactus_c">Contact Us</a></li>
                                    <li><a href="<?php echo base_url(); ?>Blog_c">Blog </a></li>
                                    <li><a href="<?php echo base_url();?>User/User_Login/logout">Logout</a></li>
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->  
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.col-md-10 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="show-search">
                <a href="#"><i class="fa fa-search"></i></a>                
            </div><!-- /.show-search -->
            
        </div><!-- /.header-inner --> 
    </header><!-- /.header -->
            
    <!-- Page title -->
    <div class="page-title parallax parallax1" style="padding-top: 50px;padding-bottom: 50px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Subscribed Courses</h1>
                        <!-- <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>All Course 2</li>
                            </ul>                   
                        </div> -->
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title --> 

    <!-- Blog fullwidth -->
    <section class="main-content blog-fullwidth">
        <div class="wrap-blog-fullwidth">
            <div class="flat-grid margin20px clearfix">
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-1.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four flat-flexslides-blog">
                    <article class="entry flat-flexslides">
                        <ul class="slides">
                            <li>
                                <div class="feature-post">
                                    <a href="blog_single_v2.html"><img src="images/blog/b2-2.jpg" alt="image"></a>
                                    <div class="overlay"></div>
                                </div><!-- /.feature-post -->
                                <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                            </li>
                            <li>
                                <div class="feature-post">
                                    <a href="blog_single_v2.html"><img src="images/blog/b2-2.jpg" alt="image"></a>
                                    <div class="overlay"></div>
                                </div><!-- /.feature-post -->
                                <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                            </li>
                            <li>
                                <div class="feature-post">
                                    <a href="blog_single_v2.html"><img src="images/blog/b2-2.jpg" alt="image"></a>
                                    <div class="overlay"></div>
                                </div><!-- /.feature-post -->
                                <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                            </li>
                        </ul>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-3.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-4.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-5.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-6.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-7.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-8.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-9.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-10.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-11.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-12.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-13.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-14.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-15.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post">
                            <a href="blog_single_v2.html"><img src="images/blog/b2-16.jpg" alt="image"></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="blog_single_v2.html">Never stop learning with conference live streams and videos.</a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
            </div><!-- /.flat-grid margin20px -->                        
        </div><!-- /.wrap-blog-fullwidth -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-pagination">
                        <ul class="flat-pagination clearfix">
                            <li class="prev">
                                <a href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>                                  
                            <li class="next">
                                <a href="#"><i class="fa fa-angle-right"></i></a>
                            </li>                               
                        </ul><!-- /.flat-pagination -->
                    </div><!-- /.blog-pagination -->
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
</html>