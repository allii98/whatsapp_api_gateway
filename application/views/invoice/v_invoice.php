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
				<a href="<?= base_url('Invoice') ?>"><?= $tittle; ?></a>
			</li>
		</ul>
	</div>

	<?php echo $this->session->flashdata('pesan'); ?>

	<div class="row">

		<div class="col-md-6 col-lg-4">
			<div class="card">
				<div class="card-header">
					<h5 class="card-title">
						<span class="fw-mediumbold">
							Whatsapp Gateway</span>

					</h5>
				</div>
				<form action="<?= base_url('Invoice/kirim') ?>" method="post">
					<div class="form-group">
						<label for="email2">Nomer Tujuan</label>
						<input type="number" class="form-control" name="no" id="email2" placeholder="Masukan Nomer Whatsapp">

					</div>

					<div class="form-group">
						<label for="comment">Isi Pesan</label>
						<textarea class="form-control" id="comment" name="pesan" rows="5">
													</textarea>
					</div>

					<div class="card-footer">
						<button type="submit" class="btn btn-success fas fa-paper-plane"> Kirim</button>
						<!-- <button class="btn btn-danger">Cancel</button> -->
					</div>
				</form>
			</div>

		</div>
	</div>
</div>