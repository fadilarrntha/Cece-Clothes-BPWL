    <!DOCTYPE html>
    <html lang="en">

    <head>
    	<title></title>
    	<meta charset="UTF-8">
    	<!-- Tell the browser to be responsive to screen width -->
    	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    	<!-- Bootstrap 3.3.7 -->
    	<link rel="stylesheet"
    		href="<?php echo base_url('assets/') ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
    	<!-- Font Awesome -->
    	<link rel="stylesheet"
    		href=" <?php echo base_url('assets/') ?>bower_components/font-awesome/css/font-awesome.min.css">
    	<!-- Ionicons -->
    	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/Ionicons/css/ionicons.min.css">
    	<!-- Theme style -->
    	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/AdminLTE.min.css">
    	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>dist/css/skins/_all-skins.min.css">
    	<!-- Morris chart -->
    	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>bower_components/morris.js/morris.css">
    	<!-- jvectormap -->
    	<link rel="stylesheet"
    		href="<?php echo base_url('assets/') ?>bower_components/jvectormap/jquery-jvectormap.css">
    	<!-- Date Picker -->
    	<link rel="stylesheet"
    		href="<?php echo base_url('assets/') ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    	<!-- Daterange picker -->
    	<link rel="stylesheet"
    		href="<?php echo base_url('assets/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
    	<!-- bootstrap wysihtml5 - text editor -->
    	<link rel="stylesheet" href="<?php echo base_url('assets/') ?>plugins/
  bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    </head>

    <body>
    	<!-- Content Wrapper. Contains page content -->
    	<div class="content-wrapper">
    		<!-- Content Header (Page header) -->
    		<section class="content-header">
    			<h1>Form Edit</h1>
    			<ol class="breadcrumb">
    				<li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    				<li class="active">Edit</li>
    			</ol>
    		</section>

    		<!-- Main content -->
    		<section class="content">
    			<!-- Main row -->
    			<div class="row">
    				<!-- Left col -->
    				<section class="col-lg-7 connectedSortable">

    					<div class="container-fluid">
    						<form action=" <?= base_url('Admin/update') ?>" method="POST" enctype="multipart/form-data">
    							<?php 
          foreach($data as $row){

          ?>
    							<div class="form-group">
    								<label>Nama Product : </label>
    								<input class="form-control" type="hidden" name="id_product"
    									value="<?php echo $row['id_product']?>">
    								<input class="form-control" type="text" name="nama_product"
    									value="<?php echo $row['nama_product']?>">
    							</div>
    							<div class="form-group">
    								<label>Harga Product : </label>
    								<input class="form-control" type="text" name="harga_product"
    									value="<?php echo $row['harga_product']?>">
    							</div>
    							<div class="form-group">
    								<label>Deskripsi Product : </label>
    								<input class="form-control" type="text" name="deskripsi"
    									value="<?php echo $row['deskripsi']?>">
    							</div>
    							<div>
    								<label>Kategori Barang : </label>
    								<select class="form-control" name="kategori" required>
    									<option>-</option>
    									<option value="jacket">Jacket</option>
    									<option value="tshirt">T-Shirt</option>
    									<option value="hoodie">Hoodie</option>
    									<option value="shirt">Shirt</option>
    									<option value="pants">Pants</option>
    									<option value="Accessories">Accessories</option>

    								</select>
    							</div>
    							<div class="form-group">
    								<label>Input Gambar : </label>
    								<input class="form-control" type="file" name="gambar_product" required>
    							</div>
    							<div class="form-group">
    								<button type="submit" class="btn btn-primary">Kirim</button>
    							</div>
    							<?php } ?>
    						</form>
    					</div>
    </body>

    </html>
