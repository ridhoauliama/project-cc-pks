<!-- Modal Tambah Preferensi -->
<div class="modal fade" id="tambahPreferensi" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="varyModalLabel">Data Preferensi Baru</h5>
			</div>
			<form action="<?= base_url('preferensi/tambah') ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="kode_preferensi" class="col-form-label">
							Kode Preferensi
						</label>
						<input type="text" class="form-control" name="kode_preferensi" value="<?= str_pad($max_id, 4, 0, STR_PAD_LEFT) ?>" readonly>
					</div>
					<div class="form-group">
						<label for="uraian_preferensi" class="col-form-label">
							Nama Preferensi
						</label>
						<input type="text" class="form-control" name="uraian_preferensi" placeholder="Upah, Pulsa, Pipa, dll." required>
					</div>
					<div class="form-group">
						<label for="satuan_preferensi" class="col-form-label">
							Satuan Preferensi
						</label>
						<input type="text" class="form-control" name="satuan_preferensi" placeholder="Orang, kg, meter, hari, dsb." required>
					</div>
					<div class="form-group">
						<label for="harga_preferensi" class="col-form-label">
							Harga Preferensi
						</label>
						<input type="number" class="form-control" name="harga_preferensi" placeholder="123456" min="0" required>
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
<!-- End Modal Tambah Preferensi -->
