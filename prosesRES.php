<?php
	echo "<head><title>Mini Market</title></head>";

	function alert($msg) {
		echo "<script type='text/javascript'>alert('$msg');</script>";
	}

	$tgl = date("Y-m-d");
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$hsl1 = intval($_POST['hsl1']);
	$hsl2 = intval($_POST['hsl2']);
	$hsl3 = intval($_POST['hsl3']);
	$hsl4 = intval($_POST['hsl4']);
	$hsl5 = intval($_POST['hsl5']);
	$hsl6 = intval($_POST['hsl6']);

	$jum1 = intval($_POST['jum1']);
	$jum2 = intval($_POST['jum2']);
	$jum3 = intval($_POST['jum3']);
	$jum4 = intval($_POST['jum4']);
	$jum5 = intval($_POST['jum5']);
	$jum6 = intval($_POST['jum6']);

	if ($nama != "" && $email != "") {
		if ($jum1 != 0 || $jum2 != 0 || $jum3 != 0 || $jum4 != 0 || $jum5 != 0 || $jum6 != 0) {
			echo "<h1>Pesanan anda sedang diproses";
			echo "</h1>";
			$fp = fopen("list.txt", "a+");
			fputs($fp, "$tgl|$nama|$email|$jum1|$jum2|$jum3|$jum4|$jum5|$jum6\n");
			fclose($fp);
			$fp = fopen("Pesanan.txt", "a+");
			fwrite($fp, "Pesanan:\n");
			fwrite($fp, "Tanggal Pemesanan: $tgl\n");
			fwrite($fp, "Nama Pelanggan: $nama\n");
			fwrite($fp, "Email Pelanggan: $email\n");
			fwrite($fp, "Daftar Pesanan:\n");
			if ($jum1 >= 1) {
				fwrite($fp, "Bango Kecap Manis Pouch 1.52Kg (x$jum1) = Rp.$hsl1\n");
			}
			if ($jum2 >= 1) {
				fwrite($fp, "Ultra UHT Milk Plain 1000 Ml (x$jum2) = Rp.$hsl2\n");
			}
			if ($jum3 >= 1) {
				fwrite($fp, "Indomilk Plain Susu Kental Manis Kaleng 370 Gram (x$jum3) = Rp.$hsl3\n");
			}
			if ($jum4 >= 1) {
				fwrite($fp, "ABC Sambal Terasi 180 g (x$jum4) = Rp.$hsl4\n");
			}
			if ($jum5 >= 1) {
				fwrite($fp, "ABC Sambal Hijau 180 g (x$jum5) = Rp.$hsl5\n");
			}
			if ($jum6 >= 1) {
				fwrite($fp, "Mamasuka Garam Reguler 250gr (x$jum6) = Rp.$hsl6\n");
			}
			fwrite($fp, "\n");
			fclose($fp);
			echo "<br><a href=index.html>:: Kembali Belanja ::</a><br>";
		} else {
			alert("Anda belum memesan apapun");
			echo "<script>window.location = 'index.html'</script>";
		}

	} else {
		alert("Isi nama dan email anda");
		echo "<script>window.location = 'index.html'</script>";
	}
	
?>