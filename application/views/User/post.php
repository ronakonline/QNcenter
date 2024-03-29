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
    
     
    <section class="main-content blog-single">        
        <div class="post-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <article class="entry">
                           
                            <div class="main-post">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <h2 class="title-post"><a href="#"><strong><?php echo $post[0]->title; ?></strong></a></h2>
                                        <div class="meta-post clearfix">
                                            <ul>    
                                                <li class="post-author">
                                                    <span><a href="#">By&nbsp;&nbsp;<?php echo $post[0]->institute; ?></a></span>
                                                </li>                                        
                                                <li class="post-date"><?php echo date('d-M-Y',strtotime($post[0]->created_at)); ?></li>
                                                <li class="post-categories">
                                                    <a href="#">Graphic</a>,
                                                    <a href="#">Website</a>
                                                </li>
                                            </ul>
                                        </div><!-- /.meta-post -->
                                        <div class="desc">
                                            <p>Descripsion</p>
                                        </div>      
                                        <div class="entry-post">
                                            <?php echo $post[0]->post; ?>
                                        </div><!-- /.entry-post -->
                                        
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
                            <center><h2><strong>Comments</strong></h2></center>

                            <div class="comment-post">
                                <div class="comment-list-wrap">   
                                    <ul class="comment-list">
										<?php if(count($comments) == 0) { ?>
										<p align="center" style="margin-top: 25px; margin-bottom: 20px; font-size: 20px;">There is no comments on this post.</p>
										<?php } ?>
										<?php foreach ($comments as $comment){ ?>
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
                                                    <p class="comment-body"><?php echo $comment->comment; ?></p>
                                                </div><!-- /.comment-detail -->
                                            </article><!-- /.comment -->
                                        </li>
										<?php } ?>

                                    </ul><!-- /.comment-list -->
                                </div><!-- /.comment-list-wrap -->

                                <div id="respond" class="comment-respond">
                                    <h4 class="title comment-title">Add a comment</h4>
                                    <form class="flat-contact-form" id="contactform5" method="post" action="./contact/contact-process.php">
                                        <div class="field clearfix">      

                                            <div class="textarea-wrap">
                                                <textarea class="type-input" tabindex="3" placeholder="Your comment" name="message" id="message-contact" required></textarea>
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
</html>
