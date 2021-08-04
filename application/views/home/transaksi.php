<style>
	body{
		background: #dcdde1;
	}
	.form-alamat{
		background-color: white;
		padding: 50px;
	}
	.cart_section{
		background-color: white;
		color: black;
	}
	.cart_items_list
	{
		display: block;
	}
	.cart_item
	{
		 width: 100%;
		 height: 126px;
		 padding-top: 23px;
		 padding-bottom: 23px;
		 border-bottom: solid 1px #ededed;
	}
	.cart_item > div:not(:first-child)
	{
		width: 68px;
	}
	.cart_item > div:not(:first-child):not(:last-child)
	{
		margin-right: 30px;
	}
</style>
<br><br><br><br>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="form-alamat mt-2 mb-2">
				<h3 style="color: black;">Tambah Alamat dan Identitas Pembayar</h3>
				<form action="<?= base_url() ?>transaksi/send" method="post">
					<div class="form-group">
						<label>Nama</label>
						<input class="form-control" type="text" name="nama">
					</div>
					<div class="form-group">
						<label>Nomor Telepon</label>
						<input class="form-control" type="text" name="nohp">
					</div>
					<div class="form-group">
						<label>Provinsi</label>
						<input class="form-control" type="text" name="provinsi">
					</div>
					<div class="form-group">
						<label>Kota</label>
						<input class="form-control" type="text" name="kota">
					</div>
					<div class="form-group">
						<label>Kecamatan</label>
						<input class="form-control" type="text" name="kecamatan">
					</div>
					<div class="form-group">
						<label>Kode Pos</label>
						<input class="form-control" type="text" name="kodepos">
					</div>
					<div class="form-group">
						<label>Nama gedung, jalan, dan lainnya</label>
						<input class="form-control" type="text" name="jalan">
					</div>
					<div class="form-group">
						<label>Nama Bank</label>
						<input class="form-control" type="text" name="bank">
					</div>
					<div class="form-group">
						<label>Nomor Rekening</label>
						<input class="form-control" type="text" name="rekening">
					</div>
					<div class="form-group">
						<label>Nama Pengirim</label>
						<input class="form-control" type="text" name="pengirim">
					</div>
					<div class="form-group">
						<label>Catatan ke Penjual</label>
						<input class="form-control" type="text" name="catatan">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Kirim!">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cart_container">
					
					<!-- Cart Bar -->
					<div class="cart_bar">
						<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
							<li class="mr-auto"><h2>Product</h2></li>
							<li>Size</li>
							<li>Price</li>
							<li></li>
							<li>Total</li>
						</ul>
					</div>

<!-- Cart Items -->
<div class="cart_items">
	<ul class="cart_items_list">
		<?php $total = 0; ?>
		<?php foreach($cart as $cart) : ?>
		<?php 
			$this->db->where('id_product', $cart->id_product);
			$product = $this->db->get('product')->result()[0];
		?>

		<li class="cart_item item_list d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-end justify-content-start">
			<div class="product d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start mr-auto">
				<div><div class="product_image"><img src="images/cart_item_1.jpg" alt=""></div></div>
				<div class="product_name_container">
					<div class="product_name "><?= $product->nama_product ?></div>
				</div>
			</div>
			<div class="product_size product_text"><span>Size: </span>L</div>
			<div class="product_price product_text"><span>Price: </span>Rp.<?= $product->harga_product ?></div>
			<div class="product_quantity_container">
			</div>
			<div class="product_total product_text"><span>Total: </span>Rp.<?= $product->harga_product ?> </div>
		<?php $total += $product->harga_product ?>
		</li>
	</ul>
</div>
		<?php endforeach; ?>