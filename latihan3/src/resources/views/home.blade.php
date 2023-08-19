@extends('layouts.main')

@section('title','Home')

@section('content')
<div class="container">

    <h1>Halaman Home</h1>
    <h2>Welcome {{ $name }}</h2>
    <h2>Role anda {{ $role }}</h2>
    {{--  @if ($role=='admin')
        <a href="">Halaman Admin</a>
    @endif  --}}

    {{--  @foreach ($buah as $data)
        {{ $data }} <br>
    @endforeach  --}}
    <table class="table">
        <tr>
            <th>No. </th>
            <th>Nama</th>
        </tr>
        @foreach ($buah as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data }}</td>
        </tr>
        @endforeach
    </table>

</div>

@endsection
   