$(document).ready(function () {
    "use strict";

    $('.text1').textLimit({$counter: $('.counter1'),  minChars: 60,  charMessage: ' chars left'});
    $('.text2').textLimit({$counter: $('.counter2'),  minChars: 30,  charMessage: ' chars remaining'});

});