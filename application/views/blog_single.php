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
                        <h1 class="title">Welcome To Our Blog</h1>
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

    <!-- Blog single -->
    <section class="main-content blog-single">        
        <div class="post-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article class="entry">
                            <div class="feature-post">
                                <img src="<?php echo base_url('assets/images/blog/').$blogdetail[0]->banner; ?>" alt="image" style="width: 1400px;height: 500px;">
                            </div><!-- /.feature-post -->
                            <div class="main-post">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
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
                                            <p><?php echo $blogdetail[0]->blog; ?></p>

                                            
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

            <div class="section-comment">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="author-post">                            
                                <h4 class="title">About author</h4>
                                <article class="author">
                                    <div class="author-avatar">
                                        <img src="images/blog/author-avatar.jpg" alt="image">
                                    </div>
                                    <div class="position">
                                        <div class="author-meta">
                                            <h4><a href="#">Michael Windzor</a></h4>
                                            <p>Wed Design Teacher</p>
                                        </div>
                                    </div>
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
                                    <div class="author-detail">
                                        <p class="author-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at eros vitae libero posuere efficitur et vel erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce lacinia risus metus, quis sodales ipsum aliquam vel. Duis accumsan fringilla justo vel dignissim.</p>
                                    </div>
                                </article><!-- /.comment -->                                
                            </div><!-- /.author-post -->

                            <div class="comment-post">
                                <div class="comment-list-wrap">   
                                    <ul class="comment-list">
                                        <li>
                                            <article class="comment">
                                                <h4 class="title comment-author">Michael windzor</h4>
                                                <div class="comment-avatar">
                                                    <img src="images/blog/comment-avatar.jpg" alt="image">
                                                </div>                  
                                                <div class="comment-detail">
                                                    <div class="comment-meta">
                                                        <span class="comment-date"><a href="">3 days ago</a></span> 
                                                        <p>Great Guide to get the job</p>
                                                    </div>
                                                    <p class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at eros vitae libero posuere efficitur et vel erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                                </div><!-- /.comment-detail -->
                                            </article><!-- /.comment -->
                                        </li>

                                        <li>
                                            <article class="comment">
                                                <h4 class="title comment-author">Michael windzor</h4>
                                                <div class="comment-avatar">
                                                    <img src="images/blog/comment-avatar.jpg" alt="image">
                                                </div>                  
                                                <div class="comment-detail">
                                                    <div class="comment-meta">
                                                        <span class="comment-date"><a href="">3 days ago</a></span> 
                                                    </div>
                                                    <p class="comment-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at eros vitae libero posuere efficitur et vel erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos</p>
                                                </div><!-- /.comment-detail -->
                                            </article><!-- /.comment -->
                                        </li>
                                    </ul><!-- /.comment-list -->
                                </div><!-- /.comment-list-wrap -->

                                <div id="respond" class="comment-respond">
                                    <h4 class="title comment-title">Add a review</h4>
                                    <form class="flat-contact-form" id="contactform5" method="post" action="./contact/contact-process.php">
                                        <div class="field clearfix">      
                                            <div class="wrap-type-input">                    
                                                <div class="input-wrap name">
                                                    <input type="text" value="" tabindex="1" placeholder="Name" name="name" id="name" required>
                                                </div>
                                                <div class="input-wrap email">
                                                    <input type="email" value="" tabindex="2" placeholder="Email" name="email" id="email-contact" required>
                                                </div> 
                                            </div>
                                            <div class="textarea-wrap">
                                                <textarea class="type-input" tabindex="3" placeholder="Your Review" name="message" id="message-contact" required></textarea>
                                            </div>
                                        </div>
                                        <div class="submit-wrap">
                                            <button>Submit</button>
                                        </div>
                                    </form><!-- /.comment-form -->
                                </div><!-- /#respond -->
                            </div><!-- /.comment-post -->
                        </div><!-- /.col-md-8 -->
                    </div><!-- /.row -->                                               
                </div><!-- /.container -->
            </div><!-- /.section-comment -->
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