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
                        <h1 class="title">Subscribed</h1>
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
				<?php foreach ($institutes as $row){  ?>
                <div class="flat-one-four">
                    <article class="entry">
                        <div class="feature-post" style="display: block; text-align: center;">
                            <a href="<?php echo base_url('User/Post/').$row->aid; ?>"><img src="<?php if($row->profile==''){
                              echo base_url('uploads/').'thumbnail.png';  
                            }else{
                              echo base_url('uploads/').$row->profile;  
                            }?>" alt="image" style="width: 250px;height: 200px; margin-top: 15px;" ></a>
                        </div><!-- /.feature-post -->
                        <p class="entry-title"><a href="<?php echo base_url('User/Post/').$row->aid; ?>"><?php echo $row->name; ?></a></p>
                    </article><!-- /.entry -->
                </div><!-- /.flat-one-four -->
				<?php } ?>

            </div><!-- /.flat-grid margin20px -->
        </div><!-- /.wrap-blog-fullwidth -->
        
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
