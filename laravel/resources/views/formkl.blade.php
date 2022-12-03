@extends('tugas')

@section('content')

<h1>KALKULATOR</h1>

<form action="{{ 'kkl' }}" method="post">
    @csrf
    Angka 1 :
    <input type="number" name="angka1" id="">
    Angka 2 :
    <input type="number" name="angka2" id="">
    <input type="submit" name="tambah" value="Tambah">
    <input type="submit" name="kurang" value="Kurang">
    <input type="submit" name="kali" value="Kali">
    <input type="submit" name="bagi" value="Bagi">
</form>

@endsection

@section('menu')
    <a href="/">Home</a>
@endsection