// ambil elemen 
var keyword = document.getElementById('keyword');
var btnCari = document.getElementById('cari');
var container = document.getElementById('container');


// add event ketika keyword di ketik
keyword.addEventListener('keyup', function() {

	// buat object ajax
	var xhr = new XMLHttpRequest()

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			container.innerHTML = xhr.responseText
		}
	}

	// execute ajax
	// xhr.open(method, dimana data diambil, asynchronous)
	xhr.open('GET', 'ajax/siswa.php?keyword=' + keyword.value, true)
	xhr.send()



})