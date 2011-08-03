$(document).ready(function () {
    "use strict";
    var minChars = 30,
        numChars;

    var $active = $('.active'),
        $complete = $('.complete'),
        $error = $('.error'),
        $textArea = $('#text'),
        $counter = $('#counter');

    //Click outside of textarea
    $('html').click(function () {
        if (numChars < minChars) {
            $textArea.removeClass('active')
                     .removeClass('complete')
                     .addClass('error');
        }
        else {
            $textArea.removeClass('active').addClass('complete');
        }
    });

    //Click inside of textarea
    $textArea.click(function (event) {
        event.stopPropagation();  //Only select text, dont trigger window
        $textArea.removeClass('inactive')
                 .removeClass('error')
                 .addClass('active');
    });

    //Calculate chars in textbox upon keyup
    $textArea.keyup(function () {
        numChars = this.value.length;
        if (numChars >= minChars) {
            $counter.removeClass('inactive').addClass('valid');
            $counter.text('Char requirement fulfilled');
            $textArea.removeClass('active').addClass('complete');
        }
        else if (numChars < minChars) {
            $counter.removeClass('valid').addClass('inactive');
            $counter.text(minChars - numChars + " chars left");
            $textArea.removeClass('complete').addClass('active');
        }
    });
});