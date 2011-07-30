$(document).ready(function() {
    "use strict";
    var $giftButton = $('input[name="gift_profile"]'),
        $giftForm = $giftButton.closest('form');
    
    $giftButton.click(function(event) {
        event.preventDefault();
    });
});