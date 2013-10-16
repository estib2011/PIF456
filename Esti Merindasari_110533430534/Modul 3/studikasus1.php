<DOCTYPE HTML>
<html>
<head>
 <title>Studi Kasus 1</title>
</head>
<body>

 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Program Studi
<select name="prodi">
 <option value="S1 Pendidikan Teknik Informatika" selected
 <?php
 if ($_POST['prodi']=="S1 Pendidikan Teknik Informatika"){
 	echo 'selected="selected"';
 }
 ?>
 >S1 Pendidikan Teknik Informatika
 <option value="S1 Pendidikan Teknik Elektro">S1 Pendidikan Teknik Elektro
 <option value="S1 Pendidikan Teknik Elektro" selected
 <?php
 if ($_POST['prodi']=="S1 Pendidikan Teknik Elektro"){
 	echo 'selected="selected"';
 }
 ?>
 >S1 Pendidikan Teknik Elektro
  <option value="D3 Elektronika">D3 Elektronika
</select> <br />
<input type="submit" value="OK" /> 
</form>

<?php
if (isset($_POST['job'])){
echo $_POST['job'];
}
?>
</body>
</html>