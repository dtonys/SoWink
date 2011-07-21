$(document).ready(function(){
   var firstName = $.trim($('#first-name').text());
   var liked = false;                           //we would usually retrieve this value from the server somehow
   
   var triggered = false;
   $('input[name="like_profile"]').click(function(){
            //send data to server
            if(!liked){
                $.ajax({
                    url: 'LikePopup.php',
                    type: 'post',
                    data: "firstName="+firstName,
                    success: function(data){
                        console.log(data);
                        var responseData = jQuery.parseJSON(data);
                        var responseMessage = responseData.message;
                        $('#like-text').text(responseMessage).show();
                        if (responseData.status === 'success')
                            liked = true;
                        $('[name="like_profile"]').attr('value', 'Liked');
                    }
                });
            }
            if(!triggered){
                fade = window.setInterval(fadeButton, 4000);
                triggered = true;
            }
            function fadeButton(){
                clearInterval(fade);
                $("#like-text").fadeOut("slow");
                triggered = false;
            }
    //prevent the like submit from happening for the purposes of implementing the popup
    return false;
    });
});