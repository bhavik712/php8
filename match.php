<?php

Class Conversation{

}

Class Comment{

}

$obj = new Conversation;
$obj1 = new Comment;

function message($obj){
    // use of match instead of the switch
    return match($obj::class){
        'Conversation' => 'Conversation Started',
        'Reply' => 'Reply Given',
        'Comment' => 'Comment added '
    };
    
};

// echo message($obj);
echo message($obj1);

//get_class($obj) can be replaced by $obj::class in php8 

?>