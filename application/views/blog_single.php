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
    
    <!-- Boxed -->
    <div class="boxed">

    <!-- Header -->            
    <header id="header" class="header clearfix"> 
        <?php 
            if (isset($_SESSION['User'])){ 
                $this->load->view('User/header'); 
            }
            else{
                $this->load->view('header'); 
            }
        ?>
    </header><!-- /.header -->
          
            
    

    <!-- Blog single -->
    <section class="main-content blog-single blog-single-sidebar">
        <div class="post-wrap">        
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <article class="entry">
                            <div class="feature-post">
                                <img src="<?php echo base_url('assets/images/blog/').$blogdetail[0]->banner; ?>" alt="image" style="width: 1400px;height: 500px;" alt="image">
                            </div><!-- /.feature-post -->
                            <div class="main-post">
                                <h2 class="title-post"><a href="#"><?php echo $blogdetail[0]->title; ?></a></h2>
                                        <div class="meta-post clearfix">
                                            <ul>    
                                                <li class="post-author">
                                                    <span>
                                                        <a href="#">
                                                            By <?php if ($blogdetail[0]->name != ""){
                                                                echo $blogdetail[0]->name;
                                                                 }
                                                                else{
                                                                echo "QN-Center";          
                                                                } ?>
                                                        </a>
                                                    </span>
                                                </li>                                        
                                                <li class="post-date"><?php echo date('d-M-Y',strtotime($blogdetail[0]->created)); ?></li>
                                                <li class="post-categories">
                                                    <a href="#"><?php echo $blogdetail[0]->category; ?></a>
                                                    
                                                </li>
                                            </ul>
                                        </div><!-- /.meta-post -->
                                <div class="desc">
                                    <p>descripsion</p>
                                </div>      
                                <div class="entry-post">
                                    <p style="overflow-wrap: break-word;"><?php echo $blogdetail[0]->blog; ?></p>
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
                            </div><!-- /.main-post -->
                        </article><!-- /.entry -->
                        
                    </div><!-- /.col-md-9 -->
                    <div class="col-md-3">
                        <div class="sidebar">
                        <div class="widget widget-categories">
                            <h5 class="widget-title">Categories</h5>
                            <ul>
                                <?php foreach ($categories as $value) { ?>
                                    <li><a href="#"><?php echo $value->category; ?><span>(5)</span></a></li>    
                                <?php } ?>s
                            </ul>
                        </div><!-- /.widget .widget-categories -->
 
                        <div class="widget widget-recent-post">
                            <h5 class="widget-title">Recent Posts</h5>
                            <ul>
                                <li><a href="#">Smarter Grids With Sass And ...</a></li>
                                <li><a href="#">Quantity Ordering With CSS</a></li>
                                <li><a href="#">Gallery Post</a></li>
                                <li><a href="#">Video Post</a></li>
                                <li><a href="#">Image Post</a></li>
                            </ul>
                        </div><!-- /.widget .widget-recent-post -->

                        

                        

                        <!-- <div class="widget widget-recent-post style1">
                            <h5 class="widget-title">popular posts</h5>
                            <ul class="post-news clearfix">
                                <li>
                                    <div class="thumb">
                                        <a href="#"><img src="images/blog/thumb1.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb2.png" alt="image"></a>
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p> 
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb3.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb4.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                       <a href="#"><img src="images/blog/thumb5.png" alt="image"></a>
                                    </div>
                                    <div class="text">                                        
                                        <h4><a href="#">Melancholy Middletons Yet Understood Decisively</a></h4>
                                        <p>December 9th, 2015</p>
                                    </div>
                                </li>
                            </ul> 
                        </div>-->

                        
                                                
                    </div><!-- /.sidebar -->
                    </div><!-- /.col-md-3 -->
                </div><!-- /.row -->
            </div><!-- /.container --> 
        </div><!-- /.post-wrap -->           
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