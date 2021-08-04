<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Form Input</h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li class="active">User</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- Main row -->
		<div class="row">
			<!-- Left col -->
			<section class="col-lg-7 connectedSortable">

				<div class="table-responsive">
					<table border="3" class="table table-bordered table-striped text-center">
                    <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
						<?php foreach($users as $users) : ?>
						<tbody>
							<tr>
								<td width="50px;"><?= $users->username ?></td>
								<td width="50px;"><?= $users->password ?></td>
                                <td width="50px;">
									<a class="btn btn-danger"
										href="<?= base_url("User/hapus/$users->id_users") ?>">DELETE</a>
								</td>
								<td width="50px;">
									<a class="btn btn-success"
										href="<?= base_url("User/edit/$users->id_users") ?>">EDIT</a>
								</td>

							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>







			</section>
			<!-- /.Left col -->
			<!-- right col (We are only adding the ID to make the widgets sortable)-->
			<section class="col-lg-5 connectedSortable">

			</section>
			<!-- right col -->
		</div>
		<!-- /.row (main row) -->

	</section>
	<!-- /.content -->
</div>
