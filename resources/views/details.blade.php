@extends('layouts.app')

@section('title','detail')

@section('content')
    <h2>{{$movie['title']}}</h2>
    <h3>({{$movie['original_title']}})</h3>
    <p>{{$movie['nationality']}}</p>
    <p>{{$movie['date']}}</p>
    <h2>{{$movie['vote']}}</h2>
@endsection