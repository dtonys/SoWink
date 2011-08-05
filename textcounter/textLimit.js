/**
* The textLimit function takes a textarea and imposes a minimum char
* limit on it, displaying the # of chars left in a counter.  The border
* of the textarea takes on different css elements based on its status.
* The statuses for the textarea are: 
* inactive - has not been touched since loading of page
* active - currently selected and does not meet char minimum
* complete - meets char minimum limit
* error - not selected and does not meet char minimum
*
* The statuses for the counter are:
* valid - meets char minimum
* invalid - does not meet char minimum
*/

(function ($) {
    "use strict";
    $.fn.extend({
        //Called on textarea, pass in char counter, char min, counter message
        textLimit: function (contents) {

            var $textArea = this,
                numChars = 0;

            var defaults = {
                $counter: "",
                minChars: 0,
                charMessage: ' chars remaining'
            };

            //Override/Add default values with the ones passed in
			$.extend(defaults, contents);

            //Get number of chars in textarea
            numChars = $textArea.val().length;

            //Initially count chars and display counter message
            if (numChars >= defaults.minChars) {
                defaults.$counter.removeClass('invalid')
                                 .addClass('valid');
                defaults.$counter.text('Char requirement fulfilled');
                $textArea.removeClass('active')
                         .addClass('complete');
            }
            else if (numChars < defaults.minChars) {
                defaults.$counter.removeClass('valid')
                                 .addClass('invalid');
                defaults.$counter.text((defaults.minChars - numChars) +
                                              defaults.charMessage);
                $textArea.removeClass('complete')
                         .addClass('inactive');
            }

            //Deselect textarea
            $textArea.blur(function () {
                if (numChars < defaults.minChars) {
                    $textArea.removeClass('active')
                             .removeClass('complete')
                             .addClass('error');
                }
                else {
                    $textArea.removeClass('active')
                             .addClass('complete');
                }
            });

            //Select textarea
            $textArea.focus(function () {
                if (numChars < defaults.minChars){
                    $textArea.removeClass('inactive')
                             .removeClass('error')
                             .removeClass('complete')
                             .addClass('active');
                }
            });


            //Calculate chars in textbox upon keyup, display counter message
            $textArea.keyup(function () {
                numChars = $textArea.val().length;
                if (numChars >= defaults.minChars) {
                    defaults.$counter.removeClass('invalid')
                                     .addClass('valid');
                    defaults.$counter.text('Char requirement fulfilled');
                    $textArea.removeClass('active')
                             .addClass('complete');
                }
                else if (numChars < defaults.minChars) {
                    defaults.$counter.removeClass('valid')
                                     .addClass('invalid');
                    defaults.$counter.text((defaults.minChars - numChars) +
                                                  defaults.charMessage);
                    $textArea.removeClass('complete')
                             .addClass('active');
                }
            });
        }
    });
})(jQuery);