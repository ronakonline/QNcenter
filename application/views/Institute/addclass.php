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
											<div class="form-group">
			                                    <label for="department">Department</label>
			                                    <select class="form-control" id="department" name="did" required>
			                                        <option disabled selected>Select Department</option>
			                             			<?php $departments = department_list();
			                             				foreach ($departments as $row){
			                             			?>
														<option value="<?php echo $row->did; ?>"><?php echo $row->name; ?></option>
													<?php } ?>
			                                    </select>
			                                </div>
			                            </div>
		                                
		                                <div class="col-sm-12">
                                            <div class="form-group form-float">
                                                <div class="form-line">

                                                    <input type="text" class="form-control" placeholder="Class Name" name="name" required>

                                                </div>
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
