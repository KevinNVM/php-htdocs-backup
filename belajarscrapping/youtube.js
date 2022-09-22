let axios = require('axios');
let cheerio = require('cheerio');
let fs = require('fs');

axios.get('https://www.youtube.com/').then((response) => console.log(response.data))
    // .then((response) => {
    //     if(response.status == 200) {
    //         const html = response.data;
    //         const $ = cheerio.load(html);
    //         let detikList = [];
    //         $('#details').each(function(i, elem) {
    //             detikList[i] = {
    //                 judul : $(this).find('#video-title').text().trim(),
    //                 thumbnail : $(this).find('#img').attr('src'),
    //                 published : $(this).find('span').text().trim()
    //             }
    //         });
    //         const detikListTrim = detikList.filter(n => n != undefined)
    //         fs.writeFile('data/Youtube.json',
    //         JSON.stringify(detikListTrim, null, 4), (err) => {
    //             console.log('Success');
    //         })
    //     }
    // }), (error) => console.log(error);
