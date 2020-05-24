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
                        <h1 class="title">Profile</h1>
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

    

    <div class="panel panel-primary" style="padding: 50px;border: none;">
        <div class="panel-heading">
            <h1 class="panel-title" style="font-size: 25px">Personal Info.</h1>
        </div>
        <div class="panel-body">
            
                <table class="table table-hover table-bordered table-responsive">
                    <!-- <thead class="text-center">
                        <th style="text-align: center;font-size: 20px;"><strong>Setting</strong></th>
                        <th style="text-align: center;font-size: 20px;"><strong>Detail</strong></th>
                    </thead> -->
                    <tbody>
                        <tr>
                            <td>Picture</td>
                            <td></td>
                            <td><button class="btn btn-outline-primary">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td>Ravikant</td>
                            <td><button class="btn btn-outline-primary">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td>Ravikant</td>
                            <td><button class="btn btn-outline-primary">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>Ravikant@mail.com</td>
                            <td><button class="btn btn-outline-primary">Edit</button></td>
                        </tr>
                        
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
   
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