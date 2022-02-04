@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content}}</p>
    </div>
</div>
@endsection

@section('title')
    | {{ $post->title }}
@endsection