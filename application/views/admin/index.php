
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Form Input</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          
        <div class="container-fluid">
          <form action=" <?= base_url('Admin/tambah') ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Nama Product : </label>
              <input class="form-control" type="text" name="nama_product">
            </div>
            <div class="form-group">
              <label>Harga Product : </label>
              <input class="form-control" type="text" name="harga_product">
            </div>
            <div class="form-group">
              <label>Deskripsi Product : </label>
              <input class="form-control" type="text" name="deskripsi">
            </div>
            <div>
              <label>Kategori Barang : </label>
              <select class="form-control" name="kategori">
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
              <input class="form-control" type="file" name="gambar_product">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
          </form>
        </div>
        <hr>

        <div class="table-responsive">
          <table border="3" class="table table-bordered table-striped text-center">
            <?php foreach($product as $product) : ?>
            <tbody>
              <tr>
                <td width="50px;"><?= $product->nama_product ?></td>
                <td width="50px;"><?= $product->harga_product ?></td>
                <td width="50px;"><?= $product->kategori ?></td>
                <td width="50px;"><img height="100" width="auto" src="<?= base_url("assets/product/$product->gambar_product")?>"></td>
                <td width="50px;">
                  <a class="btn btn-danger" href="<?= base_url("Admin/hapus/$product->id_product") ?>">DELETE</a>
                </td>
                <td width="50px;">
                <a class="btn btn-success" href="<?= base_url("Admin/edit/$product->id_product") ?>">EDIT</a>
                </td>

              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        
        
 
        


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  