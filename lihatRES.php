<?php
	echo "<head><title>Mini Market</title></head>";
	$fp = fopen("list.txt", "r");
	echo "<h1 align=center>Tabel Daftar Pesanan</h1>";
	echo "<p align=center><a href=index.html>:: Kembali Belanja ::</a>&nbsp;<hr></p>";
	echo "<table align=center border=1 cellspacing=2 cellpadding=2>";

	echo "<tr><td width=10%>Tanggal</td><td width=30%>Nama</td><td width=30%>Email</td><td width=5%>Item 1</td><td width=5%>Item 2</td><td width=5%>Item 3</td><td width=5%>Item 4</td><td width=5%>Item 5</td><td width=5%>Item 6</td></tr>";
	while($isi = fgets($fp)) {
		$pisah = explode("|", $isi);
		echo "<tr>";
		echo "<td width=10%>$pisah[0]</td>";
		echo "<td width=30%>$pisah[1]</td>";
		echo "<td width=30%>$pisah[2]</td>";
		echo "<td width=5%>$pisah[3]</td>";
		echo "<td width=5%>$pisah[4]</td>";
		echo "<td width=5%>$pisah[5]</td>";
		echo "<td width=5%>$pisah[6]</td>";
		echo "<td width=5%>$pisah[7]</td>";
		echo "<td width=5%>$pisah[8]</td>";
		echo "</tr>";
	}
	echo "</table>";
	fclose($fp);
?>