<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="<?php echo base_url('assets/') ?>plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>styles/responsive.css">
</head>
<body>
<style>
	.product_name{
		color: black;
	}
	.product_category{
		color: black;
	}
</style>		
<h1></h1>
<br>
<div class="row products_row products_container grid">
<!-- Product -->
		<?php foreach($product as $product) : ?>
	<div class="col-xl-4 col-md-6 grid-item new">
			<div class="product">
				<div class="product_image text-center"><img height="500" width="auto" src="<?= base_url("assets/product/$product->gambar_product")?>" alt=""></div>
					<div class="product_content">
						<div class="product_info d-flex flex-row align-items-start justify-content-start">
							<div>
								<div>
									<div class="product_name" style="font-size:large; color:#4a4a4a;"><strong><?= $product->nama_product ?></strong></div>
									<br>
									<div class="product_category"><?= $product->deskripsi ?></div>
								</div>
							</div>
					<div class="ml-auto text-right">
						<div class="rating_r rating_r_4 home_item_rating"><i></i><i></i><i></i><i></i><i></i></div>
						<div class="product_price text-left"><?= $product->harga_product ?>K</div>
						</div>
					</div>
			<div class="product_buttons">
				<div class="text-center align-items-center justify-content-center">
			<div class="product_button product_cart text-center d-flex align-items-center justify-content-center">
				<div>
					<div>
					<a href="<?= base_url('cart/add_to_cart/'.$this->session->id_users.'/'.$product->id_product)?>">
							<img src="assets/images/cart.svg" class="svg">
						</a>
					<div>
				</div>
				</div>
					</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
		<?php endforeach; ?>
</div>
</body>
</html>