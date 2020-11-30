<div class="panel-header bg-primary-gradient">
	<div class="page-inner py-5">
		<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
			<div>
				<h2 class="text-white pb-2 fw-bold"><?= $tittle; ?></h2>
				<!-- <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5> -->
			</div>
			<div class="ml-md-auto py-2 py-md-0">
				<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
				<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
			</div>
		</div>
	</div>
</div>
<div class="page-inner mt--5">
	<div class="row mt--2">
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">Overall statistics</div>
					<div class="card-category">Daily information about statistics in system</div>
					<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
						<div class="px-2 pb-2 pb-md-0 text-center">
							<div id="circles-1"></div>
							<h6 class="fw-bold mt-3 mb-0">New Users</h6>
						</div>
						<div class="px-2 pb-2 pb-md-0 text-center">
							<div id="circles-2"></div>
							<h6 class="fw-bold mt-3 mb-0">Sales</h6>
						</div>
						<div class="px-2 pb-2 pb-md-0 text-center">
							<div id="circles-3"></div>
							<h6 class="fw-bold mt-3 mb-0">Subscribers</h6>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card full-height">
				<div class="card-body">
					<div class="card-title">Total income & spend statistics</div>
					<div class="row py-3">
						<div class="col-md-4 d-flex flex-column justify-content-around">
							<div>
								<h6 class="fw-bold text-uppercase text-success op-8">Total Income</h6>
								<h3 class="fw-bold">$9.782</h3>
							</div>
							<div>
								<h6 class="fw-bold text-uppercase text-danger op-8">Total Spend</h6>
								<h3 class="fw-bold">$1,248</h3>
							</div>
						</div>
						<div class="col-md-8">
							<div id="chart-container">
								<canvas id="totalIncomeChart"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>