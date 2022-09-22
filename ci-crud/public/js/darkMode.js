$(document).ready(function() {
let switchID = '.mode-switch';
const BASEURL = 'http://localhost:8080/';

    if (localStorage.getItem('darkMode') === 'TRUE') {
        $(switchID).attr('checked', '');
        $('#css').remove();
        $('#css_dark').remove();
        $('head').prepend(`<link id="css" rel="stylesheet" href="`+BASEURL+`css/mdb.dark.min.css">`)
    } else {
        $('#css').remove();
        $('#css_dark').remove();
        $('head').prepend(`<link id="css" rel="stylesheet" href="`+BASEURL+`css/mdb.min.css">`)
    }

    $(switchID).on('change', function() {
        console.log('Dark Mode ' + localStorage.getItem('darkMode'))
        if ($(switchID).is(':checked')) {
            localStorage.setItem('darkMode', 'TRUE');
            $('#css').remove();
            $('head').prepend(`<link id="css" rel="stylesheet" href="`+BASEURL+`css/mdb.dark.min.css">`);
        } else {
            localStorage.setItem('darkMode', 'FALSE');
            $('#css').remove();
            $('head').prepend(`<link id="css" rel="stylesheet" href="`+BASEURL+`css/mdb.min.css">`);
        }
    });
});