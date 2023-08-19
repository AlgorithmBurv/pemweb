@extends('layouts.main')

@section('title', 'User Delete')

@section('content')
    <div>
        <h2>Are you sure to delete user {{ $user->name }}?</h2>
        <div class="mt-5">
          <a href="/user-destroy/{{ $user->slug }}" class="btn btn-danger me-4">Sure</a>
          <a href="/users" class="btn btn-info">Cancel</a>
        </div>
    </div>
 
@endsection
    
