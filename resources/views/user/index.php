<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<td>id</td>
				<td>nama</td>
		<td>email</td>
		</tr>
		</thead>
		<tbody>
			<?php
			print_r($data);
			foreach ($data['siswa'] as $key => $value) : 
			?>
			<tr>	
				<td><?= $value['id'] ?></td>
				<td><?= $value['name'] ?></td>
				<td><?= $value['email'] ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<?php $page = $data['index'];
	if ($page > 1) {
		if (count($data['siswa']) < 3) {
			$prev = $page - 1;
			echo "<a href='$prev'>prev</a>";
			echo "<br>";
		} else {
			$prev = $page - 1;
			echo "<a href='$prev'>prev</a>";
			echo "<br>";
			$next = $page + 1;
			echo "<a href='$next'>next</a>";
		}
	} else {
		$page += 1;
		echo "<a href='$page'>lanjut</a>";
	}

	?>

</body>
</html>