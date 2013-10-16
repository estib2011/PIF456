<?php
	error_reporting(0);
// Nama :Esti Merindasari
// NIM 	:110533430534
// Prodi:S1 PTI B 2011
	
	echo "<h1> OPERASI PERULANGAN</h1>";
	echo " <table width = 300 border=1
		<tr>
			<td> <strong> Operator </strong> </td>
		</tr>
		<tr>
			<td> FOR </td>
		</tr>
		<tr>
			<td> While </td>
		</tr>
		<tr>
			<td> Do ... While ...</td>
		</tr>
		</table>";
	echo "<br>";
	// Di bawah ini merupakan pengenalan variabel yang digunakan
	// untuk operasi aritmatika
	$a="10";
	$b="20";
	$c="30";
	// rumus yang digunakan untuk operasi
	
// FOR
	echo " <strong>PERULANGAN FOR </strong><br>";
	echo "<br>";
	echo " Perulangan kalimat Esti Merindasari dengan menggunakan perulangan for <br>";
	echo "<br>";

	for($d=1;$d<=10;$d++)
	{
		echo "<font size=$d>Esti Merindasari<BR></font>";
	}

// WHILE
	echo "<br>";
	echo " <strong>PERULANGAN WHILE </strong><br>";
	echo "<br>";
	$x=1;
	while ($x<=10)
	{
		print ("$x<br/>");
		$x++;
	}

// DO ... WHILE
	echo "<br>";
	echo " <strong>PERULANGAN DO... WHILE ... </strong><br>";
	echo "<br>";
	$x = 1;
	do
	{
		print("$x.Teknik Informatika<br>");
		$x++;
	}
	while ($x<=10);
?>