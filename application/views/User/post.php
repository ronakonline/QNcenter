<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <title><?php echo "$title"; ?></title>
    <?php $this->load->view('headerlinks'); ?>

    <style type="text/css">
        .main-content{
            padding-top: 0px;
        }
    </style>
</head>                                
<body class="header-sticky">   
    <div class="loader">
        <span class="loader1 block-loader"></span>
        <span class="loader2 block-loader"></span>
        <span class="loader3 block-loader"></span>
    </div>
    

    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <?php $this->load->view('User/header'); ?>
    </header><!-- /.header -->
            
    <!-- Page title -->
    <div class="page-title parallax parallax1" style="padding-top: 50px;padding-bottom: 50px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Posts</h1>
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

    <!-- Blog single -->
    
    <?php foreach ($post as $value) { ?> 
    <section class="main-content blog-single">        
        <div class="post-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article class="entry">
                           
                            <div class="main-post">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h2 class="title-post"><a href="#"><?php echo $value->title; ?></a></h2>
                                        <div class="meta-post clearfix">
                                            <ul>    
                                                <li class="post-author">
                                                    <span><a href="#">By&nbsp;&nbsp;<?php echo $value->institute; ?></a></span>
                                                </li>                                        
                                                <li class="post-date"><?php echo date('d-M-Y',strtotime($value->created_at)); ?></li>

                                                <li class="post-categories">
                                                    <a href="#">Graphic</a>,
                                                    <a href="#">Website</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.meta-post -->
                                        <div class="desc">
                                            <p>descripsion</p>
                                        </div>      
                                        <div class="entry-post">
                                            <?php echo $value->post ?>
                                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare dignissim felis nec malesuada. Nunc fringilla est nec nisi accumsan porta. Praesent non aliquam augue, sed aliquet elit. Nam pretium eu est sed tincidunt. Donec ullamcorper odio vitae felis tempor suscipit tincidunt nec orci. Duis vulputate, nunc id vestibulum imperdiet, dui neque mattis erat, maximus ornare nisi nisi tempor ante.</p>
                                            <p>Cras feugiat sodales arcu. Sed id luctus purus. Aenean tristique risus id sem sollicitudin elementum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam erat volutpat. Mauris viverra quis velit ac lobortis. Donec fringilla rhoncus magna. Maecenas elit lorem, tincidunt non gravida sed, consectetur sed nunc. Suspendisse pretium elit ac viverra faucibus.</p>

                                            <ul>
                                                <li>Pellentesque placerat, ex ac tempor convallis</li>
                                                <li>Orci arcu vulputate sapien, vel pulvinar risus enim at libero. </li>
                                                <li>Vivamus elementum vehicula sapien vitae tincidunt.</li>
                                                <li>Fusce a felis sed leo porttitor cursus</li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ornare dignissim felis nec malesuada. Nunc fringilla est nec nisi accumsan porta. Praesent non aliquam augue, sed aliquet elit. Nam pretium eu est sed tincidunt. Donec ullamcorper odio vitae felis tempor suscipit tincidunt nec orci. Duis vulputate, nunc id vestibulum imperdiet, dui neque mattis erat, maximus ornare nisi nisi tempor ante.</p> -->
                                        </div><!-- /.entry-post -->
                                        <ul class="flat-socials">
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" title="google-plus"><i class="fa fa-youtube-play"></i></a>
                                            </li>                                            
                                        </ul>
                                    </div><!-- /.col-md-8 -->
                                </div><!-- /.row -->
                            </div><!-- /.main-post -->
                        </article><!-- /.entry -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.post-wrap -->            
    </section>
    <?php } ?>
    
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
