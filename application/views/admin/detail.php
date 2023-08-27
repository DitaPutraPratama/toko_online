<div class="container-fluid">
	<h4>detail invoiece <div class="btn btn-sm btn-success">no. invoice <?php echo $invoice->id; ?></div>
	</h4>

	<table class="table table-border table-hover table-striped">
		<tr>
			<th>id barang</th>
			<th>nama</th>
			<th>jumlah</th>
			<th>harga satutan</th>
			<th>sub total</th>
		</tr>
		<?php
		$total = 0;
		foreach ($pesanan as $psn) :
			$subtotal = $psn->jumlah * $psn->harga;
			$total += $subtotal;
		?>

			<tr>
				<td><?php echo $psn->id_barang; ?></td>
				<td><?php echo $psn->nama_barang; ?></td>
				<td><?php echo $psn->jumlah; ?></td>
				<td><?php echo number_format($psn->harga, 0, ',', '.'); ?></td>
				<td><?php echo number_format($subtotal, 0, ',', '.'); ?></td>
			</tr>
		<?php endforeach; ?>
		<tr>
			<td class="" colspan="4" align="right">grand total</td>
			<td align="right">Rp. <?php echo number_format($total, 0, ',', '.'); ?></td>
		</tr>
	</table>
	<a href="<?php echo base_url('admin/invoice/index') ?>"<div class="btn btn-sm btn-primary">kembali</div></a>
</div>
