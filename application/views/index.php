<main role="main" class="main-content">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="row align-items-center mb-2">
					<div class="col">
						<?= $this->session->flashdata('greeting') ?>
						<?php $this->session->unset_userdata('greeting') ?>
					</div>
					<div class="col-auto">
						<form class="form-inline">
							<div class="form-group d-none d-lg-inline">
								<label for="reportrange" class="sr-only">Rentang waktu</label>
								<div id="reportrange" class="px-2 py-2 text">
									<span class="small"></span>
								</div>
							</div>
							<div class="form-group">
								<button type="button" class="btn btn-sm">
									<span class="fe fe-refresh-ccw fe-16 text"></span>
								</button>
								<button type="button" class="btn btn-sm mr-2">
									<span class="fe fe-filter fe-16 text"></span>
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="mb-2 align-items-center">
					<div class="card shadow mb-4">
						<div class="card-body">
							<?= $this->session->flashdata('buku_alert') ?>
							<?php $this->session->unset_userdata('buku_alert') ?>
							<div class="row">
								<div class="col-md-12 col-xl-4 mb-4">
									<a class="card shadow bg-primary" href="#" data-toggle="modal" data-target="#tambahCC">
										<div class="card-body">
											<div class="row align-items-center">
												<div class="col-3 text-center">
													<span class="circle circle-sm bg-primary-light">
														<i class="fe fe-16 fe-plus text-white mb-0"></i>
													</span>
												</div>
												<div class="col pr-0">
													<p class="small text-light mb-0 font-weight-bold">Tambah</p>
													<span class="h6 mb-0 text-white">Cost Center Baru</span>
												</div>
											</div>
										</div>
									</a>
								</div>
								<?php foreach ($cc as $key) { ?>
									<div class="col-md-12 col-xl-4 mb-4">
										<div class="card shadow btn-outline-light">
											<div class="card-body">
												<div class="row align-items-center">
													<a class="col pr-0 text-decoration-none" href="<?= base_url('dashboard/pilih_cc/' . $key['kode_cc']) ?>">
														<p class="small text-secondary mb-0"><?= $key['kode_cc'] ?></p>
														<span class="h6 mb-0 text-primary">
															<?php
															if (strlen($key['nama_cc']) > 25) {
																echo substr($key['nama_cc'], 0, 25) . '...';
															} else {
																echo $key['nama_cc'];
															}
															?>
														</span>
													</a>
													<div class="col-3 text-center">
														<a href="#" class="circle circle-sm bg-primary-light text-decoration-none" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<i class="fe fe-16 fe-more-vertical text-white mb-0"></i>
														</a>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item text-primary" href="#" data-toggle="modal" data-target="#detailCC<?= $key['kode_cc'] ?>"><span class="fe fe-clipboard fe-16"></span> Detail
															</a>
															<a class="dropdown-item text-primary" href="#" data-toggle="modal" data-target="#editCC<?= $key['kode_cc'] ?>"><span class="fe fe-edit fe-16"></span>
																Ubah
															</a>
															<a class="dropdown-item text-danger" href="<?= base_url('dashboard/hapus/') . $key['kode_cc']; ?>" onclick="return confirm('Data akan dihapus secara permanen. Lanjutkan?');">
																<span class="fe fe-trash-2 fe-16"></span> Hapus
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
