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
							<!-- <h4>Add Class</h4> -->
							<form class="form-material mt-4" action="insert" method="post">
								<!-- Input -->
								<div class="body">
									<div class="row clearfix">

										<div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" required>
                                                    <label class="form-label">Full Name</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="email" class="form-control" required>
                                                    <label class="form-label">Email</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="password" class="form-control" required>
                                                    <label class="form-label">Password</label>
                                                </div>
                                            </div>
                                        </div>

										<div class="col-sm-12">
											<div class="form-group">
			                                    <label for="department">Department</label>
			                                    <select class="form-control" id="department" required>
			                                        <option disabled selected>Select Department</option>
			                                        <option>2</option>
			                                        <option>3</option>
			                                        <option>4</option>
			                                        <option>5</option>
			                                    </select>
			                                </div>
			                            </div>
		                                
		                                <div class="col-sm-12">
											<div class="form-group">
			                                    <label for="department">Class</label>
			                                    <select class="form-control" id="class" required>
			                                        <option disabled selected>Select Class</option>
			                                        <option>2</option>
			                                        <option>3</option>
			                                        <option>4</option>
			                                        <option>5</option>
			                                    </select>
			                                </div>
			                            </div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mt-2"><i
										class="icon-plus-square mr-2"></i>Add &nbsp&nbsp
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
