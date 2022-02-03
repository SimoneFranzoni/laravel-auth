@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Elenco posts</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col" colspan="3">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td><a href="{{ route('admin.posts.show', $post) }}" class="btn btn-info">Show</a></td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection

@section('title')
    | Elenco Post
@endsection