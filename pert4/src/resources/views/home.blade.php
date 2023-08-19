@extends('layouts.main')

@section('content')

@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<div class="container mb-15">
    <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
</div>
@endauth
@guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
@endguest
@endsection