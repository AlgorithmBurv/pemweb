@extends('layouts.main')
@section('content')

  {{-- {{ dd($products) }} --}}
  @if (session('success'))
    <p class="alert alert-success">{{ session('success') }}</p>
  @endif
  @if ($errors->any())
    @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
  @endif
  <a href="{{ route('student.create') }}"class="btn btn-primary">Add Student</a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#ID</th>
        <th scope="col">Student Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($students as $pr)
        <tr>
          <th scope="row">{{ $pr->id }}</th>
          <td>{{ $pr->name }}</td>
          <th>
            <a href="{{ route('student.edit', $pr->id) }}"class="btn btn-success">Edit</a>
            <div class="d-inline-block">
              <form action="{{ route('student.delete',$pr->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </div>
          </th>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
