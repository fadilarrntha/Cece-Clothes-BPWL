  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Konfirmasi Pesanan</h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url('Admin') ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Konfirmasi Pesanan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          
        <div class="container-fluid">
          
        </div>
        <hr>
<table border="2" class="text-center table1" cellspacing="0">
  <thead>
    <tr>
      <th>Nama User</th>
      <th>Total</th>
      <th>Aksi</th>
    </tr>
    <?php foreach ($transaksi as $row): ?>
      <tr>
        <?php $user = $this->M_konfirmasi->getuser($row->id_users)[0] ?>
        <?php $total = $this->M_konfirmasi->get_total($row->id_transaksi) ?>
        <td><?= $user->username ?></td>
        <td><?= $total; ?></td>
        <td>
          <a href="<?= base_url() ?>konfirmasi/konfirmasi/<?= $user->id_users ?>" class="btn btn-success">Konfirmasi</a>
          <a href="<?= base_url() ?>konfirmasi/detail/<?= $user->id_users ?>" target="_blank" class="btn btn-primary">Detail</a>
        </td>
      </tr>
    <?php endforeach ?>
  </thead>
</table>
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
  