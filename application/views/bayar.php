<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success mt-3">
				<?php
				$grandtotal = 0;
				if ($keranjang = $this->cart->contents()) {
					foreach ($keranjang as $item) {
						$grandtotal = $grandtotal + $item['subtotal'];
					}
					echo 'totak belanja anda adalah Rp.' . number_format($grandtotal, 0, ',', '.');
				 ?>
			</div>
			<br><br>
			<h3>input alamat pengiriman dan pembayaran</h3>
			<form action="<?php echo base_url() ?>dashboard/proses_pesanan" method="post">
				<div class="form-group">
					<label for="">nama</label>
					<input class="form-control" type="text" name="nama" placeholder="nama lengkap anda" id="">
					<label for="">alamat</label>
					<input class="form-control" type="text" name="alamat" placeholder="alamat lengkap anda" id="">
					<label for="">no_telephone</label>
					<input class="form-control" type="text" name="no_telephone" placeholder="no_telephone lengkap anda" id="">
					<label for="">jasa pengiriman</label>
					<select class="form-control" name="" id="">
						<option value="">jne</option>
						<option value="">jnt</option>
						<option value="">ninja</option>
					</select>
					<label for="">bank</label>
					<select class="form-control" name="" id="">
						<option value="">bca - 00000</option>
						<option value="">bri</option>
						<option value="">bni</option>
					</select>
				</div>
				<button type="submit" class="btn btn-sm btn-primary">pesan</button>
			</form>
			<?php 
			}else{
				echo "keranjang anda kosong";
			}
			 ;?>
		</div>


		<div class="col-md-2"></div>
	</div>
</div>
