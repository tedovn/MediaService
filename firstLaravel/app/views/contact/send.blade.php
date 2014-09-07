<?php
$data = array('Hello from laravel123');
Mail::send('emails.send', $data, function($message)
{
    $message->to('dr3zz@abv.bg', 'Jane Doe')->subject('This is a demo!');
});

?>