<!DOCTYPE HTML>
<html>
<head>
	<title>Passing by Reference</title>
</head>

<body>
	<h2>Passing by Reference</h2>
<?php
	function jumlah(&$b){
	$b++; //8
	}
	
	$a = 7;
	jumlah($a);
	echo $a;
?>
</body>
</html>