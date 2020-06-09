<div class="page has-sidebar-left">
	<header class="blue accent-3 relative">
		<div class="container-fluid text-white">
			<div class="row p-t-b-10 ">
				<div class="col">
					<h4>
						<i class="icon-building-o"></i>
						  <?php echo $title; ?>
					</h4>
				</div>
			</div>
		</div>
	</header>
	<?php
		echo errormsg();
		echo successmsg();
	?>
	<div class="animatedParent animateOnce">
		<div class="container-fluid my-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body b-b">
							<h4>Edit Department</h4>
							<form class="form-material mt-4" action="insert" method="post">
								<!-- Input -->
								<div class="body">
									<div class="row clearfix">
										<div class="col-sm-12">

											<div class="form-group">
												<div class="form-line">
													<input type="text" name="name" class="form-control" placeholder="Department Name"/>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mt-2"><i
										class="icon-plus-square mr-2"></i>Update &nbsp&nbsp
								</button>
								<!-- #END# Input -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


</div>
