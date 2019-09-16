<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Data Customer</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="<?= base_url('customer/insert') ?>">Insert</a>
	<h2>Data Customer</h2>
		<!-- <?php var_dump($customer); ?> -->
	<table border="1">
		<tr>
			<th width="25px">ID</th>
			<th width="205px">Nama Customer</th>
			<th width="">#</th>
		</tr>

		<?php foreach ($customer as $value): ?>
			
		<tr>
			<td><?= $value['id_customer']; ?></td>
			<td><?= $value['nama_customer']; ?></td>
			<td>
				<a href="<?= base_url('customer/edit/'.$value['id_customer']); ?>">Edit</a>
				<a href="<?= base_url('customer/delete/'.$value['id_customer']); ?>">Delete</a>
			</td>
		</tr>
		<?php endforeach ?>
		
	</table>
</body>
</html>