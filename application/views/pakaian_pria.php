<div class="container-fluid">
	<!-- carousel -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('/assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('/assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
			</div>
		</div>
	</div>
	<!-- End carousel -->
	<div class="row text-center mt-3">
		<?php foreach ($pakaian_pria as $brg) : ?>
			<div class="card ml-3 mb-3" style="width: 16rem;">
				<img src="<?php echo base_url() . '/upload/' . $brg->gambar ?>" class="card-img-top" alt="...">
				<div class="card-body">

					<h5 class="card-title mb-1"><?php echo $brg->nama_barang; ?></h5>

					<small><?php echo $brg->keterangan; ?></small><br>

					<span class="badge badge-success mb-3">Rp.<?php echo number_format($brg->harga, 0, ',', '.'); ?></span><br>

					<?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>'); ?>

					<?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>'); ?>

				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
