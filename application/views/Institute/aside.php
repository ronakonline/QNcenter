<div id="app">
	<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
		<section class="sidebar">
			<div class="w-80px mt-3 mb-3 ml-3">
				<img src="<?php echo base_url(); ?>assets/admin/img/basic/logo.png" alt="">
			</div>
			<div class="relative">
				<a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
				   aria-controls="userSettingsCollapse"
				   class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
					<i class="icon icon-cogs"></i>
				</a>
				<div class="user-panel p-3 light mb-2">
					<div>
						<div class="float-left image">
							<img class="user_avatar" src="<?php echo base_url(); ?>assets/admin/img/dummy/u2.png"
								 alt="User Image">
						</div>
						<div class="float-left info">
							<h6 class="font-weight-light mt-2 mb-1"><?php echo $_SESSION['Institute']->username;  ?></h6>
								<a href="#"><i class="icon-circle text-green blink"></i> Online</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="collapse multi-collapse" id="userSettingsCollapse">
						<div class="list-group mt-3 shadow">
							<a href="../index.html" class="list-group-item list-group-item-action ">
								<i class="mr-2 icon-umbrella text-blue"></i>Profile
							</a>
							<a href="#" class="list-group-item list-group-item-action"><i
									class="mr-2 icon-cogs text-yellow"></i>Settings</a>
							<a href="#" class="list-group-item list-group-item-action"><i
									class="mr-2 icon-security text-purple"></i>Change Password</a>
							<a href="<?php echo base_url('Institute/User/logout'); ?>" class="list-group-item list-group-item-action"><i
									class="mr-2 icon-sign-out text-blue"></i>Logout</a>
						</div>
					</div>
				</div>
			</div>
			<ul class="sidebar-menu">
				<li class=""><a href="<?php echo base_url('Institute'); ?>">
						<i class="icon icon-dashboard2  s-18"></i> <span>Dashboard</span>
					</a>
				</li>
				<li class="treeview"><a href="#">
						<i class="icon icon-building-o  s-18"></i> <span>Department</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Institute/Department/adddepartment'); ?>"><i class="icon icon-plus-square"></i>Add Department</a></li>
						<li><a href="<?php echo base_url('Institute/Department/alldepartment'); ?>"><i class="icon icon-align-justify"></i>All Department</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#">
						<i class="icon icon-presentation-12  s-18"></i> <span>Class</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Institute/Classes/addclass'); ?>"><i class="icon icon-plus-square"></i>Add Class</a></li>
						<li><a href="<?php echo base_url('Institute/Classes/allclass'); ?>"><i class="icon icon-align-justify"></i>All Class</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#">
						<i class="icon icon-envelope  s-18"></i> <span>Post</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Institute/Post/addpost'); ?>"><i class="icon icon-plus-square"></i>Add Post</a></li>
						<li><a href="<?php echo base_url('Institute/Post/allpost'); ?>"><i class="icon icon-align-justify"></i>All Posts</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#">
						<i class="icon icon-graduation-cap  s-18"></i><span>Student</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Institute/Student/addstudent'); ?>"><i class="icon icon-plus-square"></i>Add Student</a></li>
						<li><a href="<?php echo base_url('Institute/Student/import_excel'); ?>"><i class="icon icon-plus-square"></i>Import Excel</a></li>
						<li><a href="<?php echo base_url('Institute/Student/allstudent'); ?>"><i class="icon icon-align-justify"></i>All Students</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#">
						<i class="icon icon-user  s-18"></i> <span>User</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Institute/User/adduser'); ?>"><i class="icon icon-plus-square"></i>Add User</a></li>
						<li><a href="<?php echo base_url('Institute/User/alluser'); ?>"><i class="icon icon-align-justify"></i>All Users</a></li>
					</ul>
				</li>
				<li class="treeview"><a href="#">
						<i class="icon icon-web  s-18"></i> <span>Blog</span>
					</a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Institute/Blog/addblog'); ?>"><i class="icon icon-plus-square"></i>Add Blog</a></li>
						<li><a href="<?php echo base_url('Institute/Blog/allblog'); ?>"><i class="icon icon-align-justify"></i>All Blogs</a></li>
					</ul>
				</li>
			</ul>
		</section>
	</aside>
	<!--Sidebar End-->

	<div class="has-sidebar-left">
		<div class="sticky">
			<div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
				<div class="relative">
					<a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
						<i></i>
					</a>
				</div>
				<!--Top Menu Start -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages-->
						<li class="dropdown custom-dropdown messages-menu">
							<a href="#" class="nav-link" data-toggle="dropdown">
								<i class="icon-message "></i>
								<span class="badge badge-success badge-mini rounded-circle">4</span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu pl-2 pr-2">
										<!-- start message -->
										<li>
											<a href="#">
												<div class="avatar float-left">
													<img src="<?php echo base_url(); ?>assets/admin/img/dummy/u4.png"
														 alt="">
													<span class="avatar-badge busy"></span>
												</div>
												<h4>
													Support Team
													<small><i class="icon icon-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
										<!-- start message -->
										<li>
											<a href="#">
												<div class="avatar float-left">
													<img src="<?php echo base_url(); ?>assets/admin/img/dummy/u1.png"
														 alt="">
													<span class="avatar-badge online"></span>
												</div>
												<h4>
													Support Team
													<small><i class="icon icon-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
										<!-- start message -->
										<li>
											<a href="#">
												<div class="avatar float-left">
													<img src="<?php echo base_url(); ?>assets/admin/img/dummy/u2.png"
														 alt="">
													<span class="avatar-badge idle"></span>
												</div>
												<h4>
													Support Team
													<small><i class="icon icon-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
										<!-- start message -->
										<li>
											<a href="#">
												<div class="avatar float-left">
													<img src="<?php echo base_url(); ?>assets/admin/img/dummy/u3.png"
														 alt="">
													<span class="avatar-badge busy"></span>
												</div>
												<h4>
													Support Team
													<small><i class="icon icon-clock-o"></i> 5 mins</small>
												</h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
									</ul>
								</li>
								<li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
							</ul>
						</li>
						<!-- Notifications -->
						<li class="dropdown custom-dropdown notifications-menu">
							<a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
								<i class="icon-notifications "></i>
								<span class="badge badge-danger badge-mini rounded-circle">4</span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="#">
												<i class="icon icon-data_usage text-success"></i> 5 new members joined
												today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon icon-data_usage text-danger"></i> 5 new members joined
												today
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon icon-data_usage text-yellow"></i> 5 new members joined
												today
											</a>
										</li>
									</ul>
								</li>
								<li class="footer p-2 text-center"><a href="#">View all</a></li>
							</ul>
						</li>
						<!-- Right Sidebar Toggle Button -->
					</ul>
				</div>
			</div>
		</div>
	</div>
