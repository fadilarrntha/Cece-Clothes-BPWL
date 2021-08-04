<table border="1">
	<tr>
		<td>nama</td>
		<td><?= $detail_user->nama ?></td>
	</tr>
	<tr>
		<td>no hp</td>
		<td><?= $detail_user->nohp ?></td>
	</tr>
	<tr>
		<td>provinsi</td>
		<td><?= $detail_user->provinsi ?></td>
	</tr>
	<tr>
		<td>kota</td>
		<td><?= $detail_user->kota ?></td>
	</tr>
	<tr>
		<td>kecamatan</td>
		<td><?= $detail_user->kecamatan ?></td>
	</tr>
	<tr>
		<td>Kode Pos</td>
		<td><?= $detail_user->kodepos ?></td>
	</tr>
	<tr>
		<td>Jalan</td>
		<td><?= $detail_user->jalan ?></td>
	</tr>
	<tr>
		<td>Bank</td>
		<td><?= $detail_user->bank ?></td>
	</tr>
	<tr>
		<td>Rekening</td>
		<td><?= $detail_user->rekening ?></td>
	</tr>
	<tr>
		<td>Nama Pengirim</td>
		<td><?= $detail_user->pengirim ?></td>
	</tr>
	<tr>
		<td>Catatan</td>
		<td><?= $detail_user->catatan ?></td>
	</tr>
</table>
<br><br><br>
<table border="1" width="100%">
	<tr>
		<td>Produk</td>
		<td>Harga</td>
	</tr>
	<?php foreach ($items as $row): ?>
		<?php $getproduk = $this->M_konfirmasi->getproduk($row->id_product) ?>
		<tr>
			<td><?= $getproduk->nama_product ?></td>
			<td><?= $getproduk->harga_product ?></td>
		</tr>
	<?php endforeach ?>
</table>
<br><br><br>
Total : Rp.<?= number_format($total) ?>