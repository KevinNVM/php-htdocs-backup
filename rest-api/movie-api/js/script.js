function searchMovie() {
  $('#movie-list').html('');
  
  $.ajax({
    url: 'http://omdbapi.com',
    type: 'get',
    dataType: 'json',
    data: {
      'apikey': 'fbdcaa86',
      's': $('#search-input').val()
    },
    success: function (result) {
      if ( result.Response == "True" ) {
        
        let movies = result.Search

        $.each(movies, function(i, data) {
          $('#movie-list').append(`
          <div class="col-md-4">
          <div class="card">
            <img src="`+ data.Poster +`" class="card-img-top image-fluid" width="300" height="425" alt="Movie Poster">
            <div class="card-body">
              <h5 class="card-title text-truncate" title="`+ data.Title +`">`+ data.Title +`</h5>
              <p class="card-text text-truncate">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h6 class="card-subtitle mb-2 text-muted">`+ data.Year +`</h6>
              <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="`+ data.imdbID +`" class="card-link see-detail">See Details</a>
            </div>
          </div>
          </div>
          `)
        })

        $('#search-input').val('');

      } else {
        $('#movie-list').html(`
        <div class="col">
        <h1 class="text-center">`+ result.Error +`</h1>
        </div>
        `)
      }
    }
  })
}

$('#search-btn').on('click', function() {
  if($('#search-input').val().length !== 0) {
    searchMovie()
  } else {
    alert('Please Enter Movie Name')
    $('#search-input').focus()
  }
})

$('#search-input').on('keyup', function (e) {
  if (e.keyCode === 13) {
    if($('#search-input').val().length !== 0) {
      searchMovie()
    } else {
      alert('Please Enter Movie Name')
      $('#search-input').focus()
    }

  }
})

$('#movie-list').on('click', '.see-detail', function () {

  $.ajax({
    url: 'http://omdbapi.com',
    type: 'get',
    dataType: 'json',
    data: {
      'apikey': 'fbdcaa86',
      'i': $(this).data('id')
    },
    success: function(movie) {
      console.log(movie.Title, movie.Poster)
      if (movie.Response === "True") {
        $('#exampleModalLabel').html('About ' + movie.Title)
        $('.modal-body').html(`
        <div class="container-fluid">
        <div class="row g-2">
          <div class="col-md-4"><img width="300" height="450" class="img-fluid rounded shadow" src="`+ movie.Poster +`" alt="Movie Poster"></div>
          <div class="col-md-8">
            <ul class="list-group">
              <li class="list-group-item"><h3>`+ movie.Title +`</h3></li>
              <li class="list-group-item">Released `+ movie.Released +`</li>
              <li class="list-group-item">Genre `+ movie.Genre +`</li>
              <li class="list-group-item">Director `+ movie.Director +`</li>
              <li class="list-group-item">Writer `+ movie.Writer +`</li>
              <li class="list-group-item">Actors `+ movie.Actors +`</li>
              <li class="list-group-item"><i class="bi bi-star-half"></i> `+ movie.Ratings[0].Value +`</li>
              <li class="list-group-item">`+ movie.Runtime +`</li>
            </ul>
          </div>
        </div>
      </div>
        `)
      }
    }
  })

})