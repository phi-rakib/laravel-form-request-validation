@extends('layout.default')

@section('content')


    <div class="row py-4">
        <div class="col-12">
            <div class="float-left">
                <h2>All Posts</h2>
            </div>

            <div class="float-right">
                <a href="{{ route('posts.create') }}" class="btn btn-success">Create New Post</a>
            </div>
        </div>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-10">
            @foreach ($posts as $post)
                <div class="card mt-3">
                    <div class="card-header">
                        <h2>{{ $post->title }}</h2>
                    </div>

                    <div class="card-body">
                        {{ $post->body }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection