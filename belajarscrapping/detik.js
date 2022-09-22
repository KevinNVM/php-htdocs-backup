let axios = require('axios');
let cheerio = require('cheerio');
let fs = require('fs');

axios.get('https://news.detik.com/indeks')
    .then((response) => {
        if(response.status == 200) {
            const html = response.data;
            const $ = cheerio.load(html);
            let detikList = [];
            $('.list-content__item').each(function(i, elem) {
                detikList[i] = {
                    judul : $(this).find('.media__title').text().trim(),
                    thumbnail : $(this).find('.media__link').attr('href'),
                    published : $(this).find('span').text().trim()
                }
            });
            const detikListTrim = detikList.filter(n => n != undefined)
            fs.writeFile('data/detikList.json',
            JSON.stringify(detikListTrim, null, 4), (err) => {
                console.log('Success');
            })
        }
    }), (error) => console.log(error);
