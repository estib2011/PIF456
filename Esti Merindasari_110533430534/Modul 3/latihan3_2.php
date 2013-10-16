<!DOCTYPE HTML>
<html>
<head>
	<title>Prefill Data radio Button</title>
</head>
<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
			Jenis Kelamin
			<input type="radio" name="sex" value="Pria" checked
			<?php
			if ($_GET['sex'] == 'Pria') {
				echo 'checked="checked"';
			}
			?>
			/>Pria

			<input type="radio" name="sex" value="Wanita"
			<?php
			if ($_GET['sex'] == 'Wanita') {
				echo 'checked="checked"';
			}
			?>
			/>Wanita</br>

			<input type="submit" value="ok"/>
		</form>

		<?php
		if (isset($_GET['sex'])) {
			echo $_GET['sex'];
		}
		?>
</body>
</html>
