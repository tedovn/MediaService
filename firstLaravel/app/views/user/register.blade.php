@extends('layouts.default')
@section('content')
<h1>Successful registration</h1>
@stop

<?php
$data = array('Hello from laravel123');
Mail::send('emails.demo', $data, function($message)
{
    $message->to('dr3zz@abv.bg', 'Jane Doe')->subject('This is a demo!');
});

?>