@extends('layouts.main')

@section('title', 'Banned User')

@section('content')

<h1>Banned User</h1>

<div class="mt-5 d-flex justify-content-end">

  <a href="/users" class="btn btn-primary">Back</a>
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
      @foreach ($bannedUsers as $item)
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
          <a class="btn btn-success" href="/user-restore/{{ $item->slug }}">Restore</a>

        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection