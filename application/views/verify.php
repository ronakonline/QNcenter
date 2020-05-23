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
<div class="" style="margin-top:8%; margin-bottom: 15%">
	<div class="overlay"></div>
	<div class="container">
		<div class="row" >
			<p align="center" style="font-size: 18px;">Verification link is sent on your email "<b><?php echo $_SESSION['iemail']; ?></b>". Please check your email </p>
			<p align="center" style="font-size: 18px;">Didn't get the email ? <a href="<?php echo base_url('Institute/User/resendmail');?>" style="color:dodgerblue">Resend</a></p>
		</div><!-- /.row -->
	</div><!-- /.container -->
</div style="margin-bottom:50px;"><!-- /.page-title -->



<!-- Footer -->
<footer class="footer">
	<?php $this->load->view('footer'); ?>
</footer>

<!-- Bottom -->
<div class="bottom">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="line-top"></div>
			</div>
		</div>
		<div class="row">
			<div class="container-bottom">
				<div class="col-md-6">
					<div class="copyright">
						<p>© Copyright <a href="#">Alitstudio</a> 2015. All Rights Reserved.
						</p>
					</div>
				</div><!-- /.col-md-6 -->

				<div class="col-md-6">
					<ul class="flat-socials text-right">
						<li class="facebook">
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li class="twitter">
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li class="instagram">
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						<li class="linkedin">
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div><!-- /.col-md-6 -->
			</div><!-- /.container-bottom -->
		</div><!-- /.row -->
	</div><!-- /.container -->
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
