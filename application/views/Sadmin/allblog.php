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
								<th>Title</th>
								<th>Author</th>
								<th>Banner</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
								<?php foreach ($blogs as $row){ ?>
								<tr>
									<td><?php echo $row->title; ?></td>
									<?php if($row->author==null){ ?>
									<td><?php echo "QN-Center" ?></td>
									<?php }else{ ?>
										<td><?php echo $row->author; ?></td>
									<?php } ?>
									
									<td><img src="<?php echo base_url('assets/images/blog/').$row->banner ?>" style="width: 150px;height: 100px;"></td>
									<td><?php echo $row->created; ?></td>
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
