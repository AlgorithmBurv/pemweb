@extends('layouts.main')
@section('content')
<form action="{{ route('student.update',$student->id) }}" method="POST">
  @csrf
  @method('PUT')
  @if ($errors->any())
    @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
  @endif
  <div class="mb-3">
    <label for="student_name" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="student_name" name="name" value="{{ $student->name }}">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="{{ route('student') }}" class="btn btn-danger">Cancel</a>
</form>
@endsection