<?php
    $recipientName = mysql_real_escape_string($_POST['firstName']);
    //TO DO: sender = mysql_real_escape_string($_POST['sender']);
    
    if(empty($recipientName)){
        $status = 'error';
        $message = 'Person does not exist';
    }
    else{
        //TO DO: Add sender's like to the recipientName's list of likes
    
        $status = "success";
        $message = "Thanks for liking me!";
    }
    
    //return json response  
    $data = array(  
        'status' => $status,  
        'message' => $message  
    );
    
    echo json_encode($data);
?>