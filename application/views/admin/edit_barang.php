<div class="container-fluid">
	<h3><i class="fa fa-edit"></i>edit data barang</h3>
	<?php foreach ($barang as $brg) :; ?>
		<form method="post" action="<?php echo base_url() . 'admin/data_barang/update' ?>">
			<div class="form-group">
				<input type="hidden" name="id_brg" class="form-control" value="<?php echo $brg->id_brg ?>">
				<label for="">nama barang</label>
				<input type="text" name="nama_barang" class="form-control" value="<?php echo $brg->nama_barang ?>">
				<label for="">keterangan</label>
				<input type="text"keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
				<label for="">kategori</label>
				<input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori ?>">
				<label for="">harga</label>
				<input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
				<label for="">stok</label>
				<input type="text" name="stok" class="form-control" value="<?php echo $brg->stok ?>">
			</div>
			<button type="submit" class="btn btn-primary btn-sm">simpan</button>
		</form>
	<?php endforeach; ?>
</div>
