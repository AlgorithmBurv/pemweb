@extends('layouts.main')
@section('content')
<form action="{{ route('student.store') }}" method="POST">
  @csrf
  @if ($errors->any())
    @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
  @endif
  <div class="mb-3">
    <label for="student_name" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="student_name" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection