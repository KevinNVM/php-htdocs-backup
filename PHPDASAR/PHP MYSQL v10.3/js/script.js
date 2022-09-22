$(document).ready(function() {

	alert($('#modal').attr())
	
	// add event ketika keyword diketik
	$('#keyword').on('keyup', function() {
		// munculkan icon loading
		$('.loader').show()


		// ajax menggunankan load
		$('#container').load('ajax/siswa.php?keyword=' + $('#keyword').val())

// ajax menggunakan $.get()
$.get('ajax/siswa.php?id=' + $('#modal').attr(), function(data) {
	$('#modal-body').html(data)
	
}) 


	})


})