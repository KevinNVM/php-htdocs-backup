let axios = require('axios');
let cheerio = require('cheerio');
let fs = require('fs');

// axios.get('https://kiryuu.id/').then((response) => {
//     fs.writeFile('data/coba.txt', 'hello world');
//     console.log(response.status);
// });

fs.writeFile('data/coba.txt', 'Coba write file', function() {
    console.log('err')
});