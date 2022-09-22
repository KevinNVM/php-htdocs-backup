$(document).ready(function () {
  
  $('.btnAddData').on('click', function () { 
    $('#judulModal').html('Tambah Data Siswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('#nama').val('');
    $('#kelas').val('');
    $('#email').val('');
    $('#jurusan').val('');
  });

  $('.showEditModal').on('click', function () { 
    
    $('#judulModal').html('Ubah Data Siswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost/phpmvc/public/siswa/ubah/')

    const editId = $(this).data('id');
    
    $.ajax({
      url: 'http://localhost/phpmvc/public/siswa/getUbah',
      data: {id: editId},
      method: 'POST',
      dataType: 'JSON',
      success: function(result) {
        $('#nama').val(result.nama);
        $('#kelas').val(result.kelas);
        $('#email').val(result.email);
        $('#jurusan').val(result.jurusan);
        $('#id').val(result.id);
      }
    });
  });
});