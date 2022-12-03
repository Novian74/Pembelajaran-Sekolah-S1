@extends('tugas')

@section('content')

<h1>{{ $judul }}</h1>

<h1>TEBAK ZODIAK ANDA !</h1>

@foreach ($contoh as $key => $value)
    <h2>{{ $key .' : '. $value }}</h2>
@endforeach

<form action="{{ url('rumus') }}" method="post">
    @csrf
    Bulan :
    <input type="text" name="bulan" id="">
    Tanggal :
    <input type="text" name="tanggal" id="">
    <input type="submit" name="kirim" value="Kirim">
</form> 

@endsection

@section('menu')
    <a href="/">Home</a>
@endsection