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
								<th>Institute Name</th>
								<th>Institute Email</th>
								<th>Institute PhoneNo</th>
								<th>Email Verified</th>
								<th>Account Verified</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							<?php foreach ($institutes as $row){ ?>
								<tr>
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->email; ?></td>
									<td><?php echo $row->phonenumber; ?></td>
									<?php if($row->everified==1){ ?>
										<td>YES</td>
									<?php }else{ ?>
										<td>NO</td>
									<?php } ?>
									<?php if($row->averified==1){ ?>
										<td>YES</td>
									<?php }else{ ?>
										<td>NO</td>
									<?php } ?>
									<td></td>
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
