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

    <?php /* 
    <!-- Fillter courses -->
    <section class="flat-row pad-top50px pad-bottom0px">
        <div class="container">
            <div class="row">
                <div class="search-course">
                    <div class="col-md-10">
                        <!-- Fillter courses -->
                        <form class="flat-contact-form fillter-courses border-radius border-white text-center style1" id="contactform5" method="post" action="./contact/contact-process.php">
                            <div class="field clearfix">      
                                <div class="wrap-type-input">
                                    <div class="wrap categories-courses">
                                        <select class="select-field categories-courses" name="appointment_services">
                                            <option value="" selected="selected">All Blog </option>
                                            <option value="Categories 1">Courses 1</option>
                                            <option value="Categories 2">Courses 2</option>
                                            <option value="Categories 3">Courses 3</option>
                                        </select> 
                                    </div><!-- /.wrap-select -->
                                    
                                    <div class="wrap courses-keyword">
                                        <input type="text" value="" placeholder="Course keyword" name="subject" id="subject" >
                                    </div>

                                    <div class="wrap all-categories">
                                        <button>All categories</button>
                                    </div>  
                                </div><!-- /.wrap-type-input -->                            
                            </div><!-- /.field -->                        
                        </form><!-- /.comment-form -->  
                    </div><!-- /.col-md-10 -->

                    <div class="col-md-2">
                        <div class="list-course">
                            <a href="course.html"><i class="fa fa-th" aria-hidden="true"></i></a>
                            <a href="course_list.html"><i class="fa fa-list" aria-hidden="true"></i></a>
                        </div>
                    </div><!-- /.colo-md-2 -->
                </div><!-- /.search-course -->
            </div><!-- /.row -->
        </div><!-- /.container -->        
    </section>
    */?>
    <!-- Flat courses -->
    <section class="flat-row pad-top50px pad-bottom90px">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat1.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Business and Economics</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat2.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Language</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat3.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Arts</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat4.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Fashion</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
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
                            <a href="course_single.html"><img src="images/course/cat5.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Health Studies</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat6.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Food and Beverage Studies</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat7.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Engineering & Technology</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="flat-courses">
                        <div class="courses-thumbnail">
                            <a href="course_single.html"><img src="images/course/cat8.jpg" alt="image"></a>
                            <a class="courses-viewmore" href="course_single.html">View more</a>
                        </div>
                        <div class="courses-content">
                            <a href="course_single.html"><h6 class="courses-topic">Humanities and Social Sciences</h6></a>
                            <p>Total Courese<span>( 34 )</span></p>
                        </div>
                    </div><!-- /.flat-courses -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
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