<?php
	error_reporting(0);
// Nama :Esti Merindasari
// NIM 	:110533430534
// Prodi:S1 PTI B 2011
	echo "<h1> OPERASI LOGIKA </h1>";
	echo " <table width = 300 border=1
		<tr>
			<td> <strong> Operator </strong> </td>
			<td> <strong> Keterangan </strong> </td>
		</tr>
		<tr>
			<td> && </td>
			<td> AND </td>
		</tr>
		<tr>
			<td> || </td>
			<td> OR </td>
		</tr>
		<tr>
			<td> XOR</td>
			<td> XOR </td>
		</tr>
		<tr>
			<td> ! </td>
			<td> NOT </td>
		</tr>
		</table>";
	echo "<br>";
	// Di bawah ini merupakan pengenalan variabel yang digunakan
	// untuk operasi aritmatika
	$a="10";
	$b="20";
	$c="30";
	// rumus yang digunakan untuk operasi
	
// Logika AND
	echo " <strong> LOGIKA AND</strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Pernyataan I <br>";
	echo "Jika kondisinya if (a==30 && b==10) maka hasilnya adalah ";
	if ($a==30 && $b==10)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong>Data Sama </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>Data Beda </strong><br>";
	}

	echo "<br>";
	echo "Pernyataan II <br>";
	echo "Jika kondisinya if (a==10 && b==20) maka hasilnya adalah ";
	if ($a==10 && $b==20)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong>Data Sama </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>Data Beda </strong><br>";
	}

// Logika OR
	echo "<br>";
	echo " <strong> LOGIKA OR</strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Pernyataan I <br>";
	echo "Jika kondisinya if (a==30 || b==10) maka hasilnya adalah ";
	if ($a==30 || $b==10)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong>Data Sama </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>Data Beda </strong><br>";
	}

	echo "<br>";
	echo "Pernyataan II <br>";
	echo "Jika kondisinya if (a==10 || b==20) maka hasilnya adalah ";
	if ($a==10 || $b==20)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong>Data Sama </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>Data Beda </strong><br>";
	}

// Logika XOR
	echo "<br>";
	echo " <strong> LOGIKA XOR</strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Pernyataan I <br>";
	echo "Jika kondisinya if (a==30 Xor b==10) maka hasilnya adalah ";
	if ($a==30 Xor $b==10)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong>Data Sama </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>Data Beda </strong><br>";
	}

	echo "<br>";
	echo "Pernyataan II <br>";
	echo "Jika kondisinya if (a==10 Xor b==20) maka hasilnya adalah ";
	if ($a==10 Xor $b==20)
	{
		// Jika kedua nilai variabel sama maka akan menghasilkan 
		echo "<strong>Data Sama </strong><br>";
	}
	else
	{
		// jika kedua nilai variabel beda maka akan menghasilkan
		echo "<strong>Data Beda </strong><br>";
	}

	// Logika NOT
	echo "<br>";
	echo " <strong> LOGIKA XOR</strong><br>";
	echo "Nilai a=$a <br>";
	echo "Nilai b=$b <br>";
	echo "Pernyataan I <br>";
	echo "Jika kondisinya if (!a == !b) maka hasilnya adalah ";
	if (!$a == !$b)
	{
		// Jika keduanya tidak benar
		echo "<strong>Data Benar </strong><br>";
	}
	else
	{
		// jika salah satu benar
		echo "<strong>Data Salah </strong><br>";
	}


?>