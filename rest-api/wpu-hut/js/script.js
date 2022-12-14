function showAllMenu() {
  $.getJSON('./data/pizza.json', function(data) {
    let menu = data.menu;
    $.each(menu, function(i, data) {
      $('#daftar-menu').append(`<div class="col-sm-4"><div class="card mb-2"><img src="./img/menu/`+ data.gambar+`"class="card-img-top"><div class="card-body"><h5 class="card-title">`+ data.nama +`</h5><p class="card-text text-truncate">`+ data.deskripsi +`</p><h5 class="card-title">`+ data.harga +`</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>`)
    });
  });
}

showAllMenu();

$('.nav-link').on('click', function() {
  $('.nav-link').removeClass('active');
  $(this).addClass('active');

  let kategori = $(this).html();
  console.log(kategori);
  $('h1').html(kategori);

  if (kategori == "Home") {
    $('#daftar-menu').html('');
    showAllMenu();
    return;
    
  }

  $.getJSON('data/pizza.json', function(data) {
    let menu = data.menu;
    let content = '';

    $.each(menu, function(i, data) {
      if (data.kategori == kategori.toLowerCase()) {
        content += '<div class="col-sm-4"><div class="card mb-2"><img src="./img/menu/'+ data.gambar+'"class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><p class="card-text text-truncate">'+ data.deskripsi +'</p><h5 class="card-title">'+ data.harga +'</h5><a href="#" class="btn btn-primary">Pesan Sekarang</a></div></div></div>'
      }
    })

    $('#daftar-menu').html(content);

  });
});