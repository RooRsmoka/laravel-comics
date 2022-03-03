@extends('layouts.default')

@section('pageTitle')

@section('content')
<!-- @dump($comics) -->
<div class="container">
    <div class="comics-list">
    @foreach($comics as $comic)
        <div class="comic-card">
            <div class="comic-thumbnail">
                <img src="{{ $comic['thumb'] }}">
            </div>
            <p>{{ $comic['series'] }}</p>
        </div>
    @endforeach
    </div>
    <div class="btn-box">
        <div class="more-btn">
            Load more
        </div>
    </div>
</div>
@endsection