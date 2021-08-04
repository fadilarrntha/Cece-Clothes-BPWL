<!DOCTYPE html>
<html lang="en">
<head>
<title>Cart</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/cart.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/cart_responsive.css">
</head>
<body>


<div class="super_container">
		<!-- Home -->

		<div class="home">
			<div class="home_container d-flex flex-column align-items-center justify-content-end">
				<div class="home_content text-center">
					<div class="home_title">Shopping Cart</div>
					<div class="breadcrumbs d-flex flex-column align-items-center justify-content-center">
						<ul class="d-flex flex-row align-items-start justify-content-start text-center">
							<li><a href="#">Home</a></li>
							<li>Your Cart</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<!-- Cart -->

<div class="cart_section">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="cart_container">
					
					<!-- Cart Bar -->
					<div class="cart_bar">
						<ul class="cart_bar_list item_list d-flex flex-row align-items-center justify-content-end">
							<li class="mr-auto">Product</li>
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
			<div class="product_size product_text"><span>Size: </span>Isi Di Catatan</div>
			<div class="product_price product_text"><span>Price: </span>Rp. <?= $product->harga_product ?>K</div>
			<div class="product_quantity_container">
			</div>
			<div class="product_total product_text"><span>Total: </span>Rp. <?= $product->harga_product ?>K</div>
		<?php $total += $product->harga_product ?>
		</li>
	</ul>
</div>
		<?php endforeach; ?>

							<!-- Cart Buttons -->
				<div class="cart_buttons d-flex flex-row align-items-start justify-content-start">
					<div class="cart_buttons_inner ml-sm-auto d-flex flex-row align-items-start justify-content-start flex-wrap">
						<div class="button button_continue trans_200"><a href="<?= base_url("category") ?>">continue shopping</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
		<div class="col-lg-12 cart_extra_col">
			<div class="cart_extra cart_extra_2">
				<div class="cart_extra_content cart_extra_total">
					<div class="cart_extra_title">Cart Total</div>
						<li class="d-flex flex-row align-items-center justify-content-start">
							<div class="cart_extra_total_title">Total</div>
							<div class="cart_extra_total_value ml-auto"><?= $total ?>K</div>
						</li>
					</ul>
					<div class="checkout_button trans_200"><a href="<?= base_url("cart/checkout/" . $this->session->id_users) ?>">Checkout</a></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
