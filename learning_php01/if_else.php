<?php

$is_logged_in = true;
if($is_looged_in) {
    $message = "welcome back";
}else{
    $message = "hello there"
}

echo $message;