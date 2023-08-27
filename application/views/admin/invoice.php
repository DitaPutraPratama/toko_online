<div class="container-fluid">
	<h4>invoice pemesanan produk</h4>
	<table class="table table-border table-hover table-striped">
		<tr>
			<th>id invoice</th>
			<th>nama</th>
			<th>alamat</th>
			<th>tgl</th>
			<th>batas bayar</th>
			<th>aksi</th>
		</tr>
		<?php foreach ($invoice as $inv) : ?>
			<tr>
				<td><?php echo $inv->id ?></td>
				<td><?php echo $inv->nama ?></td>
				<td><?php echo $inv->alamat ?></td>
				<td><?php echo $inv->tgl_pesan ?></td>
				<td><?php echo $inv->batas_bayar ?></td>
				<td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">detal</div>') ?>
				</td>
			</tr>

		<?php endforeach; ?>
	</table>
</div>
