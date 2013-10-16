<?php
	error_reporting(0);
// Nama :Esti Merindasari
// NIM 	:110533430534
// Prodi:S1 PTI B 2011
	echo "<h1> OPERASI PERCABANGAN </h1>";
	echo " <table width = 300 border=1
		<tr>
			<td> <strong> Operator </strong> </td>
		</tr>
		<tr>
			<td> IF </td>
		</tr>
		<tr>
			<td> IF ... else ... </td>
		</tr>
		<tr>
			<td> SWITCH</td>
		</tr>
		</table>";
	echo "<br>";
	// Di bawah ini merupakan pengenalan variabel yang digunakan
	// untuk operasi aritmatika
	$a="10";
	$b="20";
	$c="30";
	// rumus yang digunakan untuk operasi
	
// LOGIKA IF... ELSE..
	echo " <strong> LOGIKA IF</strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Jika kondisinya if (a < b) maka hasilnya adalah ";
	if ($a < $b)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong> a kurang dari b </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>a lebih dari b  </strong><br>";
	}
?>