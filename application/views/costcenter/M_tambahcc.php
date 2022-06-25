<!-- Modal tambah Cost Center-->
<div class="modal fade" id="tambahCC" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="varyModalLabel">Data Cost Center Baru</h5>
			</div>
			<!-- TAMBAH METHOD -->
			<form action="<?= base_url('dashboard/tambah') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="kode_cc" class="col-form-label">
							Kode Cost Center
						</label>
						<input type="text" class="form-control" name="kode_cc" placeholder="Max. 8 karakter. Ex: SMAN2KMA" maxlength="8" required>
					</div>
					<div class="form-group">
						<label for="nama_cc" class="col-form-label">
							Nama Cost Center
						</label>
						<input type="text" class="form-control" name="nama_cc" placeholder="Ex: SMA Negeri 2 Kumai" required>
					</div>
					<div class="form-group">
						<label for="mulai_cc" class="col-form-label">
							Tanggal Mulai
						</label>
						<input type="date" class="form-control" name="mulai_cc" required>
					</div>
					<div class="form-group">
						<label for="akhir_cc" class="col-form-label">
							Tanggal Berakhir
						</label>
						<input type="date" class="form-control" name="akhir_cc" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn mb-2 btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal Tambah Cost Center -->
