<div class="page-inner">
	<div class="page-header">
		<h4 class="page-title"><?= $tittle; ?></h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
				<a href="#">
					<i class="flaticon-home"></i>
				</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('Home') ?>">Home</a>
			</li>
			<li class="separator">
				<i class="flaticon-right-arrow"></i>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('User') ?>"><?= $tittle; ?></a>
			</li>
		</ul>
	</div>
	<?php echo $this->session->flashdata('pesan'); ?>
	<div class="row">

		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<select class="form-control form-control" id="defaultSelect">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
				</div>
			</div>
		</div>


		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<h4 class="card-title">List User</h4>
						<button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
							<i class="fa fa-plus"></i>
							Tambah Data
						</button>
					</div>
				</div>
				<div class="card-body">
					<!-- Modal Tambah -->
					<div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header no-bd">
									<h5 class="modal-title">
										<span class="fw-mediumbold">
											Tambah Data User</span>

									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">

									<form action="<?= base_url('User/tambah') ?>" method="post">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group ">
													<label>Nama *</label>
													<input type="text" class="form-control" autocomplete="off" name="nama" placeholder="Nama lengkap" required>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group ">
													<label>Username *</label>
													<input type="text" class="form-control" autocomplete="off" name="usr" placeholder="Username" required>
												</div>
											</div>
											<div class="col-sm-12">
												<div class="form-group ">
													<label>Password *</label>
													<input type="password" class="form-control" name="pw" placeholder="Password" required>
												</div>
											</div>
										</div>

										<div class="modal-footer no-bd">
											<button type="submit" class="btn btn-success">Add</button>
											<!-- <button class="btn btn-danger" data-dismiss="modal">Close</button> -->
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>

					<!-- Modal Edit -->
					<?php $no = 0;
					foreach ($user as $data) : $no++; ?>
						<div class="modal fade" id="updateRowModal<?= $data->user_id; ?>" tabindex="-1" role="dialog" aria-hidden="true">

							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header no-bd">
										<h5 class="modal-title">
											<span class="fw-mediumbold">
												Update data user</span>

										</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">

										<form action="<?= base_url('User/edit') ?>" method="post">
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group ">
														<label>Nama</label>
														<input type="hidden" name="id" value="<?= $data->user_id ?>">

														<input type="text" class="form-control" autocomplete="off" name="nama" value="<?= $data->user_nama ?>">
													</div>
												</div>
												<div class="col-sm-12">
													<div class="form-group ">
														<label>Username</label>
														<input type="text" class="form-control" autocomplete="off" name="usr" value="<?= $data->username ?>">
													</div>
												</div>

											</div>
											<div class="modal-footer no-bd">
												<button type="submit" id="addRowButton" class="btn btn-primary">Update</button>

											</div>
										</form>
									</div>

								</div>
							</div>
						</div>
					<?php endforeach; ?>

					<div class="table-responsive">
						<table id="user" class="display table table-striped table-hover">
							<thead>
								<tr>
									<th style="text-align:center">No</th>
									<th style="text-align:center">Nama</th>
									<th style="text-align:center">Username</th>
									<th style="text-align:center">#</th>
								</tr>
							</thead>

							<tbody>
								<?php $no = 1;
								if (isset($user)) {
									foreach ($user as $data) { ?>
										<tr>
											<td style="text-align:center"><?= $no++ ?></td>
											<td style="text-align:center"><?= $data->user_nama ?></td>
											<td style="text-align:center"><?= $data->username ?></td>
											<td style="text-align:center">
												<div class="form-button-action">
													<?php
													if ($data->user_id != 1) {
													?>
														<button type="button" title="Edit" data-toggle="modal" data-target="#updateRowModal<?= $data->user_id; ?>" class="btn btn-link btn-primary btn-lg">
															<i class="fa fa-edit"></i>
														</button>
														<form action="<?= base_url() ?>User/delete/<?= $data->user_id ?>" method="post">
															<button type="submit" title="Hapus" class="btn btn-link btn-danger" onclick="return confirm('Apakah Anda Yakin?')">
																<i class="fa fa-times"></i>
															</button>
														<?php } ?>
														</form>
												</div>
											</td>
										</tr>
								<?php }
								} ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>