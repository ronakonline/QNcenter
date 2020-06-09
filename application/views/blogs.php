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
        <?php 
            if (isset($_SESSION['User'])){ 
                $this->load->view('User/header'); 
            }
            else{
                $this->load->view('header'); 
            }
        ?>    
    </header><!-- /.header -->
            
    

    <!-- Blog posts -->
    <section class="main-content blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="post-wrap">
                        <article class="entry clearfix images-left">                       
                            <?php foreach ($bloglist as $blog) { ?>
                            <div class="feature-post">
                                <a href="<?php echo base_url('Blog/single_blog/').$blog->id; ?>"><img src="<?php echo base_url('assets/images/blog/').$bloglist[0]->banner; ?>" alt="image" style="width: 600px;height: 365px;"></a>
                            </div><!-- /.feature-post -->
                            
                                
                            
                            <div class="main-post">
                                <h2 class="title-post"><a href="<?php echo base_url('Blog/single_blog/').$blog->id; ?>"><?php echo $blog->title; ?></a></h2>
                                <div class="meta-post clearfix">
                                    <ul>    
                                        <li class="post-author">
                                            <span>
                                                <a href="#">By <?php if ($blog->name != "") {
                                                                    echo $blog->name;}
                                                                    else{
                                                                        echo "QN-Center";}  ?>
                                                                            
                                                </a>
                                            </span>
                                        </li>                                        
                                        <li class="post-date"><?php echo date('d-M-Y',strtotime($blog->created)); ?></li>
                                        <li class="post-categories">
                                            <a href="#"><?php echo $blog->category; ?></a>
                                        </li>
                                    </ul>
                                </div><!-- /.meta-post -->                                   
                                <div class="entry-post">
                                    <p style="overflow-wrap: break-word;"><?php echo substr(strip_tags($blog->blog),0,395); ?><a class="read-more" href="<?php echo base_url('Blog/single_blog/').$blog->id; ?>">Read more</a>
                                    </p>                                    
                                </div><!-- /.entry-post -->
                            </div><!-- /.main-post --> 
                            <?php } ?>                           
                        </article><!-- /.entry -->
                    </div><!-- /.post-wrap -->    
                    <div class="load-more">
                        <a class="flat-button" href="#">Load more</a>
                    </div>        
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