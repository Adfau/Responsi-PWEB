function bersihkan(tujuan, tujuan2) {
	var a = document.getElementById(tujuan);
	var b = document.getElementById(tujuan2);

	b.value = 0;
	a.value = 0;
}

function hitung(dari, tujuan, harga) {
	var a = document.getElementById(dari);
	var b = document.getElementById(tujuan);

	b.value = a.value * harga;
}