<!DOCTYPE html>
<html>
<head>
<title>Studi Kasus 2</title>
</head>

<body>
 <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Menu Makanan
<input name="menu[]" type = "checkbox" value="Bakso" checked="CHECKED"/>Bakso
<input type = "checkbox" name="hoby[]" value="Soto ayam"/> Soto Ayam
<input name="menu[]" type = "checkbox" value="Soto Daging" checked="checked"/>Soto Daging
<br>
<input type="submit" value="OK" /> 
</form>

<?php
//Ekstrasi Nilai
if (isset($_POST['menu'])){
 foreach ($_POST['menu'] as $key => $val ){
 echo $key . ' -> ' .$val . '<br />';
 }
}
?>
</body>
</html>