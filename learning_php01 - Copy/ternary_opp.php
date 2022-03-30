<?php

$is_logged_in = true;
$name = null;
/*if( $is_logged_in ){
    $message = "welcome back";
}else{
    $message = "hello there";
}*/

//$message = $is_logged_in ? "welcome back" : "hello there";

//echo $message;

//$message = "welcome" . ($is_logged_in ? " back" : "!");

//echo $message;

//echo "welcome" . ($is_logged_in ? " back" : "!");

$name = isset( $name ) ? $name : 'Mike';

echo $name;