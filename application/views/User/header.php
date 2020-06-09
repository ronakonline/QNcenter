        <div class="header-wrap clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div id="logo" class="logo">
                            <a href="index.php" rel="home">
                                <img src="<?php echo base_url();?>assets/images/logo.png" alt="image">
                            </a>
                        </div><!-- /.logo -->
                        <div class="btn-menu">
                            <span></span>
                        </div><!-- //mobile menu button -->
                    </div><!-- /.col-md-2 -->
                    <div class="col-md-10">
                        <div class="nav-wrap">
                            
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu"> 
                                    <li class="home"><a href="<?php echo base_url('User/Home'); ?>">Home</a></li>
                                    <li><a href="<?php echo base_url(); ?>Blog">Blogs</a></li>
                                    <!-- <li><a href="<?php echo base_url();?>User/Login">Login</a></li> -->
                                   <!--  <li><a href="<?php echo base_url();?>User/Login"><img width="60" height="60" src="<?php echo base_url('assets/images/teacher/1.png'); ?>" class="rounded"></a></li> -->
                                    <li>
                                    <div class="dropdown">
                                        
                                         <img  width="60" height="60" src="<?php echo base_url('assets/images/teacher/1.png'); ?>" class="rounded dropdown-toggle" data-toggle="dropdown">
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('User/Profile'); ?>">Profile</a></li>
                                          <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url('User/Login/logout'); ?>">Logout</a></li>
                                        </ul>
                                    </div>
                                    </li>
                                </ul><!-- /.menu -->
                            </nav><!-- /.mainnav -->  
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.col-md-10 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
            <div class="show-search">
                <a href="#"><i class="fa fa-search"></i></a>                
            </div><!-- /.show-search -->
            <div class="nav-search">
                <div class="container"> 
                    <div class="col-md-12">
                       <div class="top-search" id="s1">
                            <aside id="search-4" class="widget widget_search">
                                <form role="search" method="get" class="search-form">
                                    <label>
                                        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
                                    </label>
                                    <input type="submit" class="search-submit" value="Search">
                                </form>
                            </aside>                    
                        </div><!-- /.top-search -->
                    </div>
                </div>
            </div><!-- /.nav-search -->             
        </div><!-- /.header-inner --> 
