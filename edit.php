<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit Data</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Edit Data</h2>
	<form action="<?= base_url('customer/update/') ?>" method="post">
		<input hidden type="text" value="<?= $customer->id_customer ?>" name="id">
		<input type="text" value="<?= $customer->nama_customer ?>" name="nama">
		<button type="submit">Update</button>
	</form>

</body>
</html>