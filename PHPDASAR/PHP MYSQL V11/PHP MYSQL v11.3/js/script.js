$(document).ready(function() {
console.log('asdasdasd')
	// hilangkan tombol cari 
	$('#cari').hide();


	// add event ketika keyword diketik
	$('#keyword').on('keyup', function() {
		// munculkan icon loading
		$('.loader').show()


		// ajax menggunankan load
		$('#container').load('ajax/siswa.php?keyword=' + $('#keyword').val())

// ajax menggunakan $.get()
$.get('ajax/siswa.php?keyword=' + $('#keyword').val(), function(data) {
	$('#container').html(data)
	setTimeout(function() {$('.loader').hide()}, 1000)
	
}) 


	})


})