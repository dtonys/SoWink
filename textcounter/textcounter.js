$(document).ready(function () {
    "use strict";
    
    $('.text1').textlimit({$counter: $('.counter1'),  minChars: 60,  charMessage: '%s chars left'});
    $('.text2').textlimit({$counter: $('.counter2'),  minChars: 30,  charMessage: '%s chars remaining'});

});