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
	<div class="container-fluid my-3">
		<div class="row">
			<div class="col-md-12">
				<div class="card no-b">
					<div class="card-body">
						<table class="table table-bordered table-hover data-tables">
							<thead>
							<tr>
								<th>Enrollment No</th>
								<th>Full Name</th>
								<th>Department</th>
								<th>Class</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								<?php foreach($students as $row){?>
								<tr>
									<td><?php echo $row->eno; ?></td>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->dname; ?></td>
									<td><?php echo $row->cname; ?></td>
									<td><?php echo $row->email; ?></td>
									<td>
										<div class="dropdown">
										  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										    Action
										  </button>
										  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
										    <a class="dropdown-item" href="<?php echo base_url('Institute/Blog/editstudent'); ?>">Edit</a>
										    <a class="dropdown-item" href="#">Delete</a>
										  </div>
										</div>
									</td>
								</tr>
							<?php } ?>
								
							</tbody>

						</table>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

</div>
