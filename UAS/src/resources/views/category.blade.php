@extends('layouts.main')

@section('title', 'Category')

@section('content')
    
  <h1>Category List</h1>
  <div class="mt-5 d-flex justify-content-end">
    <a href="category-deleted" class="btn btn-info me-3">View Deleted Data</a>
    <a href="category-add" class="btn btn-primary">Add Data</a>
  </div>

  <div class="mt-5">
    @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
      @endif
  </div>
  
  <div class="my-5">
    <table class="table table-light">
        <thead>
          <tr class="table-warning">
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>
                  <a class="btn btn-warning me-3" href="category-edit/{{ $item->slug }}">Edit</a>
                  <a class="btn btn-danger" href="category-delete/{{ $item->slug }}">Delete</a>
                </td>
              </tr>
          @endforeach
        </tbody>
    </table>
  </div>  
@endsection
    
