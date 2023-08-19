@extends('layouts.main')

@section('title', 'user')

@section('content')
    
  <h1>User List</h1>  

  <div class="mt-5 d-flex justify-content-end">
    <a href="user-banned" class="btn btn-secondary me-3">View Banned user</a>
    <a href="/registered-users" class="btn btn-primary">New Registered User</a>
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
            <th>Username</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->username }}</td>
                <td>
                  @if ($item->phone)
                  {{ $item->phone }}
                  @else
                      -
                  @endif
                </td>
                <td>
                  <a class="btn btn-warning me-3" href="/user-detail/{{$item->slug}}">Detail</a>
                  <a class="btn btn-danger" href="/user-ban/{{$item->slug}}">Ban User</a>
                </td>
              </tr>
          @endforeach
        </tbody>
    </table>
  </div>  
@endsection
    
