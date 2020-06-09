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

    <!-- Page title -->
    <div class="page-title parallax parallax1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
                    <div class="page-title-heading">
                        <h1 class="title">Blog Categories</h1>
                        <div class="breadcrumbs">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li>Blog Categories</li>
                            </ul>                   
                        </div>
                    </div><!-- /.page-title-captions --> 
                    
                </div><!-- /.col-md-12 -->  
            </div><!-- /.row -->  
        </div><!-- /.container -->                      
    </div><!-- /.page-title -->

    <!-- Flat courses -->
    <section class="flat-row pad-top50px pad-bottom90px">
        <div class="container">
            <div class="row">
                <?php $i=0; ?>
                <?php foreach ($categories as $category) { ?>
                    
                
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="<?php echo base_url('Blog/BlogList/').$category->id; ?>"><img src="<?php echo base_url('assets/images/category/').$category->banner; ?>" alt="image"></a>
                            <a class="courses-viewmore" href="<?php echo base_url('Blog/BlogList/').$category->id; ?>">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="<?php echo base_url('Blog/BlogList/').$category->id; ?>"><h6 class="courses-topic"><?php echo $category->category ?></h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <?php $i++;
                if ($i==8) {
                    break;
                } } ?>
            </div><!-- /.row -->

            <div class="row">
                <div class="flat-divider d40px"></div>
            </div>

            
        </div><!-- /.container -->
    </section><!-- /.flat-row -->
   
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