<div class="container-fluid">
	<h4>Keranjang Belanja</h4>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>jumlah</th>
			<th>harga</th>
			<th>sub total</th>
		</tr>
		<?php $no = 1;
		foreach ($this->cart->contents() as $items) :; ?>

			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $items['name']; ?></td>
				<td><?php echo $items['qty']; ?></td>
				<td align="right">Rp.<?php echo number_format($items['price'], 0, ',', '.'); ?></td>
				<td align="right">Rp.<?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
			</tr>

		<?php endforeach; ?>
		<tr>
			<td colspan="4"></td>
			<td align="right">Rp.<?php echo number_format($this->cart->total(), 0, ',', '.'); ?></td>
		</tr>
		
	</table>
	<div align=""right>
		<a href="<?php echo base_url('dashboard/hapus_keranjang') ;?>"><div class="btn btn-sm btn-danger">hapus</div></a>

		<a href="<?php echo base_url('dashboard/index') ;?>"><div class="btn btn-sm btn-primary">lanjut</div></a>
		
		<a href="<?php echo base_url('dashboard/bayar') ;?>"><div class="btn btn-sm btn-success">bayar</div></a>

	</div>
</div>
