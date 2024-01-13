@extends('template.master')

@section('content')
<section class="container mt-5">
    @if(session('success'))
    <div class="  alert alert-success" id="success-message">
        {{ session('success') }}
    </div>
    @endif
        <div class="d-flex justify-content-between">
        <div class="display-3">Category Details</div>
            <div>
                <a href="{{route('categories.create')}}" class="btn btn-primary mt-5 mb-1">Create Category</a>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center"> Category ID</th>
                    <th class="text-center"> Category name</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                  
             @foreach ($categories as $category)
                <tr>
                    <td class="text-center">{{$category->id}}</td>
                    <td class="text-center"> {{$category->name}}</td>
                    <td class="d-flex justify-content-around text-center"> 
                        <a class="btn btn-primary me-2" href="{{route('categories.edit',$category->id)}}">Edit</a>
                      <form action="{{route('categories.destroy',$category->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger " type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
             @endforeach
            </tbody>
        </table>
        <div>
            {{-- <a href="{{route('dashboard')}}" class="btn btn-secondary mt-5 mb-1">Back to Dashboard</a> --}}
        </div>
    </section>
@endsection