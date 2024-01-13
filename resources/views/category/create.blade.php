@extends('template.master')

@section('content')
<section id="container">
    <h2 class="mb-4">Create Category</h2>

    <form action="{{route('categories.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Category Name</label>
            <input type="text" class="form-control" id="category" name="name" placeholder="Enter Category">
            @error('name')
            <div>{{$message}}</div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary">Create Category</button>
    </form>
</section>
@endsection