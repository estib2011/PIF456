<?php
	error_reporting(0);
// Nama :Esti Merindasari
// NIM 	:110533430534
// Prodi:S1 PTI B 2011

	echo "<h1> OPERASI ARITMATIKA </h1>";
	echo " <table width = 300 border=1
		<tr>
			<td> <strong> Operator </strong> </td>
			<td> <strong> Contoh </strong> </td>
			<td> <strong> Keterangan </strong> </td>
		</tr>
		<tr>
			<td> + </td>
			<td> a + b </td>
			<td> Penambahan </td>
		</tr>
		<tr>
			<td> - </td>
			<td> a - b </td>
			<td> Pengurangan </td>
		</tr>
		<tr>
			<td> * </td>
			<td> a * b </td>
			<td> Perkalian </td>
		</tr>
		<tr>
			<td> / </td>
			<td> a / b </td>
			<td> Pembagian </td>
		</tr>
		<tr>
			<td> % </td>
			<td> a % b </td>
			<td> Modulus </td>
		</tr>
		</table>";
	echo "<br>";
	// Di bawah ini merupakan pengenalan variabel yang digunakan
	// untuk operasi aritmatika
	$a="10";
	$b="20";
	$c="30";
	// rumus yang digunakan untuk operasi
	$penjumlahan=$a+$b+$c;
	$pengurangan=$c-$b;
	$perkalian=$a*$b;
	$pembagian=$c/$a;
	$modulus=$c%4;

// operasi penjumlahan
	echo " <strong>1. Operasi Penjumlahan </strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Nilai c=$c <br>";
	echo "Hasil dari a + b + c =$penjumlahan <br>";

	echo "<br>";
// operasi pengurangan
	echo " <strong>2. Operasi Pengurangan </strong><br>";
	echo "Nilai b=$b <br>";
	echo "Nilai c=$c <br>";
	echo "Hasil dari c + b =$pengurangan <br>";

	echo "<br>";
// operasi perkalian
	echo " <strong>3. Operasi Perkalian </strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Hasil dari a x b =$perkalian <br>";

echo "<br>";
// operasi pembagian
	echo " <strong>4. Operasi Pembagian </strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai c=$c <br>";
	echo "Hasil dari a/c =$pembagian <br>";

echo "<br>";
// operasi Modulus
	echo " <strong>5. Operasi Modulus </strong><br>";
	echo "Nilai c=$c <br>";
	echo "Hasil dari c%4 =$modulus <br>";
?>