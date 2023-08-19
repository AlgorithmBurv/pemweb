@extends('layouts.main')

@section('title', 'Profile')

@section('content')
    
<div class="mt-5">
    <h1>Welcome, {{ Auth::user()->username }}</h1>
    <br><br>
    <h2>Your Rent Log</h2>
       <x-rent-log-table :rentlog='$rentlogs'/>
   </div>
@endsection
    
