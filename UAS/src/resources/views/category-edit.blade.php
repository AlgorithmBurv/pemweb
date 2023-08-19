@extends('layouts.main')

@section('title', 'Category Edit')

@section('content')
   <h1>Edit Category</h1>
   <div class="mt-5 w-50">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
         @endif
    <form action="/category-edit/{{ $category->slug }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="form-controls">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" placeholder="Category Name">
        </div>

        <div class="mt-3">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
   </div>
@endsection
    
