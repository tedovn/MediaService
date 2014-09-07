@extends('layouts.default')
@section('content')
    @foreach($news as $msg)
            <div style="border: ridge">{{e($msg->news_name) ."->". e($msg->author) }}</div>
            <div>{{e($msg->context)}}</div>
            <div><small>{{e($msg->date)}}</small></div>
    @endforeach
@stop