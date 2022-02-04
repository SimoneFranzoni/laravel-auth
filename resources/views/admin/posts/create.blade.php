@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Nuovo post</h1>

    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        @method('POST')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Testo</label>
            <textarea class="form-control" id="content" name="content" rows="3"></textarea>
        </div>
        {{--Invia i dati allo store--}}
        <button type="submit" class="btn btn-success">Invia</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>
</div>
@endsection

@section('title')
    | Nuovo Post
@endsection