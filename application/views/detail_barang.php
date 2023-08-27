<div class="container-fluid">
	<div class="card">
		<h5 class="card-header">detail produk</h5>
		<div class="card-body">
			<?php foreach ($barang as $brg) : ?>
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" class="card-img-top" alt="">
					</div>
					<div class="col-md-8">
						<table class="table">
							<tr>
								<td>nama</td>
								<td><strong><?php echo $brg->nama_barang; ?></strong></td>
							</tr>
							<tr>
								<td>keterangan</td>
								<td><strong><?php echo $brg->keterangan; ?></strong></td>
							</tr>
							<tr>
								<td>kategori</td>
								<td><strong><?php echo $brg->kategori; ?></strong></td>
							</tr>
							<tr>
								<td>stok</td>
								<td><strong><?php echo $brg->stok; ?></strong></td>
							</tr>
							<tr>
								<td>harga</td>
								<td><strong>
										<div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.'); ?></div>
									</strong></td>
							</tr>
						</table>
						<?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>'); ?>

						<?php echo anchor('dashboard/index/', '<div class="btn btn-sm btn-danger">kembali</div>'); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
