<!DOCTYPE HTML>
<html>
<head>
	<title>Data Checkbox</title>
</head>
<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>"method="post">
			Jenis Kelamin
			<input type="checkbox" name="hobby[]" value="Membaca"/>Membaca
			<input type="checkbox" name="hobby[]" value="Olahraga"/>Olahraga
			<input type="checkbox" name="hobby[]" value="Menyanyi"/>Menyanyi <br/>
			<input type="submit" value="ok"/>
		</form>

		<?php
		if (isset($_POST['hobby'])) {
			foreach ($_POST['hobby'] as $key => $value) {
				echo $key . ' -> '.$value . '<br/>';
			}		}
		?>
</body>
</html>

