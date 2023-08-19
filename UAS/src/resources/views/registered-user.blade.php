@extends('layouts.main')

@section('title', 'Detail user')

@section('content')
    
  <h1>New Registered User List</h1>  

  <div class="mt-5 d-flex justify-content-end">
      <a href="/users" class="btn btn-primary me-3">Back</a>
      {{--  <a href="/registered-users" class="btn btn-primary">Approved User List</a>  --}}
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
          @foreach ($registeredUsers as $item)
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
                  <a class="btn btn-info" href="/user-detail/{{$item->slug}}">Detail To Approve</a>
                  
                </td>
              </tr>
          @endforeach
        </tbody>
    </table>
  </div>  
@endsection
    
