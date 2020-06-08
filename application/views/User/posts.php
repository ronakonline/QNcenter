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
                                
                                <?php foreach ($post as $value) { ?>
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="panel  panel-default">
                                          <h5 class="panel-heading">By&nbsp;&nbsp;<?php echo $value->institute; ?></h5>
                                          <div class="panel-body">
                                            <h1 class="panel-title"><strong><?php echo $value->title; ?></strong></h1>
                                            <p class="panel-text"><?php echo substr(strip_tags($value->post),0,70); ?>...</p>
                                            <a href="<?php echo base_url('User/Post/single_post/').$value->nid; ?>" class="btn btn-primary">View Post</a>
                                          </div>
                                          <div class="panel-footer" style="padding-bottom: 30px;">
                                              <p class="text-left pull-left" style=""><?php echo date('d-M-Y',strtotime($value->created_at)); ?></p>
                                              <p class="text-right pull-right" style=""><?php echo "$value->views Views"; ?></p>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div><!-- /.main-post -->
                        </article><!-- /.entry -->
                    </div><!-- /.col-md-12 -->
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
</html>
