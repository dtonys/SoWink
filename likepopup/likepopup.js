$(document).ready(function() {
    "use strict";
    // Like button, form, and popup    
    var $likeProfileBtn = $('input[name="like_profile"]'),
        $likeProfileForm = $likeProfileBtn.closest('form'),
        $likePopup = $('#like-text');
        
    function likeProfile(event) {
        event.preventDefault();
        var $button = $(this);
        
        //Only proceed if button status is not liked
        if ($likeProfileBtn.data('status') != 'liked') {
            $.ajax({
                url: $likeProfileForm.attr('action'),
                type: 'post',
                data: $likeProfileForm.serialize(),
                //disable double click
                beforeSend: function() {
                    if ($likeProfileForm.data('disabled')) {
                        return false;
                    }
                },
                //send data to server
                success: function(data) {
                    var responseData = jQuery.parseJSON(data);
                    var responseMessage = responseData.message;
                    //Display popup with message
                    $likePopup.text(responseMessage).show();
                    //If like succeeds, change like status
                    if (responseData.status === 'success') {
                        $button.attr('value', 'Liked');
                        $likeProfileBtn.data('status','liked');
                    }
                    
                    //Popup fades away after given time
                    var fade = window.setInterval(fadeButton, 4000);
                    function fadeButton() {
                        clearInterval(fade);
                        $likePopup.fadeOut("slow");
                    }
                }
            });
        }
    }
    //If button exists and status not liked
    if ($likeProfileBtn.length && $likeProfileBtn.data('status') != 'liked') {
        $likeProfileBtn.click(likeProfile);
    }
});