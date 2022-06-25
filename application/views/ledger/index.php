<style>
	.itemTitle {
		font-weight: bold;
		text-align: left;
	}

	.subitemTitle {
		padding-left: 2em !important;
	}
</style>

<main role="main" class="main-content">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12">
				<h2 class="mb-2 page-title">Jurnal Umum</h2>
				<div class="card shadow">
					<div class="card-body">
						<div class="col mb-3 text-center">
							<h5 class="card-title text-uppercase">General Ledger</h5>
							<p class="card-text">[<?= $cc['kode_cc'] ?>] - <?= $cc['nama_cc'] ?> <br> <?= '(' . date('d/m/Y', strtotime($cc['mulai_cc'])) ?> &ndash; <?= date('d/m/Y', strtotime($cc['akhir_cc'])) . ')' ?></p>
						</div>
						<table class="table table-sm table-hover datatables" id="dataTable-0">
							<thead class="thead-dark text-center">
								<tr>
									<th>#</th>
									<th>Tanggal</th>
									<th>Akun</th>
									<th>Kategori</th>
									<!-- <th>Uraian</th> -->
									<th>Keterangan</th>
									<th>Keluar</th>
									<th>Masuk</th>
									<th>Saldo</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$saldo = 0;
								foreach ($ledger as $key) {
								?>
									<tr>
										<td class="text-center"><?= $i ?></td>
										<td class="text-center"><?= $format->date($key['tanggal_faktur']) ?></td>
										<td><?= $key['nama_akun'] ?></td>
										<td><?= $key['nama_kategori'] ?></td>
										<!-- <td><?= $key['uraian_preferensi'] ?></td> -->
										<td><?= $key['keterangan'] ?></td>
										<?php
										$keluar = '';
										$masuk = '';
										if ($key['akun_transaksi'] == 1 && $key['status_transaksi'] == 1) {
											$saldo = $saldo + $key['total_biaya_transaksi'];
											$masuk = $key['total_biaya_transaksi'];
										} elseif ($key['akun_transaksi'] == 1 && $key['status_transaksi'] == 0) {
											$saldo = $saldo - $key['total_biaya_transaksi'];
											$keluar = $key['total_biaya_transaksi'];
										}

										if ($key['akun_transaksi'] == 2 && $key['status_transaksi'] == 1) {
											$saldo = $saldo - $key['total_biaya_transaksi'];
											$keluar = $key['total_biaya_transaksi'];
										} elseif ($key['akun_transaksi'] == 2 && $key['status_transaksi'] == 0) {
											$saldo = $saldo + $key['total_biaya_transaksi'];
											$masuk = $key['total_biaya_transaksi'];
										}

										if ($key['akun_transaksi'] == 3 && $key['kategori_transaksi'] == 11) {
											$saldo = $saldo - $key['total_biaya_transaksi'];
											$keluar = $key['total_biaya_transaksi'];
										} elseif ($key['akun_transaksi'] == 3 && $key['kategori_transaksi'] == 12) {
											$saldo = $saldo + $key['total_biaya_transaksi'];
											$masuk = $key['total_biaya_transaksi'];
										}
										?>
										<td class="text-right"><?= $format->account($keluar) ?></td>
										<td class="text-right"><?= $format->account($masuk) ?></td>
										<td class="text-right"><?= $format->account($saldo) ?></td>
									</tr>
								<?php
									$i++;
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- .container-fluid -->
</main>
