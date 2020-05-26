<div class="page has-sidebar-left bg-light height-full">
	<header class="blue accent-3 relative nav-sticky">
		<div class="container-fluid text-white">
			<div class="row">
				<div class="col">
					<h3 class="my-3">
						<i class="icon icon-building-o s-18"></i> <?php echo $title; ?>
					</h3>
				</div>
			</div>
		</div>
	</header>
	<?php echo errormsg();
	echo successmsg();?>
	<div class="animatedParent animateOnce">
		<div class="container-fluid my-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body b-b">
							<!-- <h4>Add Class</h4> -->
							<form class="form-material mt-4" action="import" method="post"  enctype="multipart/form-data">
								<!-- Input -->
								<div class="body">
									<div class="row clearfix">

										<div class="col-sm-12">
											<div class="form-group">
												<label for="department">Department</label>
												<select class="form-control" id="department" name="department" required>
													<option disabled selected>Select Department</option>
													<?php $departemnets = department_list();
													foreach ($departemnets as $row){ ?>
														<option value="<?php echo $row->did; ?>"><?php echo $row->name; ?></option>
													<?php } ?>
												</select>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="department">Class</label>
												<select class="form-control" id="class" name="class" required>
													<option disabled selected value="0">Select Class</option>
												</select>
											</div>
										</div>
										<div class="col-sm-12">
											<div class="form-group">
												<label for="department">Student CSV File</label>
												<div class="custom-file">
													<input type="file" class="custom-file-input" id="validatedCustomFile" name="file" accept=".csv" required>
													<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
												</div>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary mt-2"><i
										class="icon-upload mr-2"></i>Upload &nbsp&nbsp
								</button>
								<!-- #END# Input -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid my-3">
		<div class="row">
			<div class="col-md-12">
				<div class="card no-b">
					<div class="card-header no-b">
						<p style="font-size: 18px;">To Import Student data correctly the excel sheet column data should be in this format.</p>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
							<tr>
								<th>Enrollment No</th>
								<th>Full Name</th>
								<th>Email</th>
								<th>Phone No</th>
								<th>Password</th>
							</tr>
							</thead>
							<tbody>


							</tbody>

						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

</div>
