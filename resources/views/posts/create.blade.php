@extends('layout.default')

@section('content')
    <div class="row justify-content-center my-4">

        <div class="col-8 my-3">
            <h2>Add New Product</h2>
        </div>

        <div class="col-8">
            <form action="{{ route('posts.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" autofocus>

                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="body">Content</label>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control">
                        {{ old('body') }}
                    </textarea>
                    @error('body')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="float-right">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection