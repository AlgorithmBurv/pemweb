@extends('layouts.main')

@section('title', 'Ren log')

@section('content')
    
  <h1>Halaman Renlog</h1>  

  <div class="mt-5">
    <x-rent-log-table :rentlog='$rentlogs'/>
  </div>
@endsection
    
