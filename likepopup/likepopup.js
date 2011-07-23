$(document).ready(function(){
    "use strict";
                                      
    var $likeProfileBtn = $('input[name="like_profile"]'),  //Button
        $likeProfileForm = $likeProfileBtn.closest('form'); //Form
    
    function likeProfile(event){
        event.preventDefault();
        var $button = $(this);
        
        //Only proceed if button status is not liked
        if($likeProfileBtn.data('status') != 'liked'){            
            $.ajax({
                url: '?action=like',
                type: 'post',
                data: $likeProfileForm.serialize(),
                //disable double click
                beforeSend: function() {
                    if ($likeProfileForm.data('disabled')) {
                        return false;
                    }
                },
                //send data to server
                success: function(data){
                    var responseData = jQuery.parseJSON(data);
                    var responseMessage = responseData.message;
                    $('#like-text').text(responseMessage).show();
                    if (responseData.status === 'success'){
                        $button.attr('value', 'Liked');
                        $likeProfileBtn.data('status','liked');
                    }                            
                }
            });
        }
        
        //Calls fadeButton function after 4 sec
        var fade = window.setInterval(fadeButton, 4000);
        function fadeButton(){
            clearInterval(fade);
            $("#like-text").fadeOut("slow");
        }
    }
    
    //If button exists and status not liked
    if ($likeProfileBtn.length && $likeProfileBtn.data('status') != 'liked')
        $likeProfileBtn.click(likeProfile);
});