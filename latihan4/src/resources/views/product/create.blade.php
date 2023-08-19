@extends('layouts.main')
@section('content')
<form action="{{ route('product.store') }}" method="POST">
  @csrf
  @if ($errors->any())
    @foreach ($errors->all() as $err)
      <p class="alert alert-danger">{{ $err }}</p>
    @endforeach
  @endif
  <div class="mb-3">
    <label for="product_name" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="product_name" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection