@extends('layouts.app')

@section('title','movies')

@section('content')
    <div class="cards_cont">
        <ul>
            @foreach ($movies as $movie)
            <div class="card">
                <li>
                    <a href="{{ route('detail-page', [ 'id' => $movie['id']]) }}">{{$movie['title']}}</a>
                </li>
            </div>
            @endforeach
        </ul>
    </div>
@endsection