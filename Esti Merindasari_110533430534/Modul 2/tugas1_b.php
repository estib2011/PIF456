<!DOCTYPE HTML>
<html>
<head>
	<title>Passing by Value</title>
</head>
<body>
	<h2> Passing by Value </h2>
<?php
	function jumlah($b){
	$b++; //8
	}
	
	$a = 7;
	jumlah($a);
	echo $a;
?>
</body>
</html>