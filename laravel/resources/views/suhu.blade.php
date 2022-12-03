@extends('tugas')

@section('content')
    <h1>KONVERSI SUHU</h1>

    <form action="{{ 'panas' }}" method="post">
        @csrf
        Suhu :
        <input type="number" name="suhu" id="">
        <select name="sebelum" id="">
            <option value="C">Celcius</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
            <option value="R">Reamur</option>
        </select>
        Konversi Ke = 
        <select name="setelah" id="">
            <option value="C">Celcius</option>
            <option value="F">Fahrenheit</option>
            <option value="K">Kelvin</option>
            <option value="R">Reamur</option>
        </select>
        <input type="submit" name="kirim" value="Kirim">
    </form>
@endsection

@section('menu')
    <a href="/">Home</a>
@endsection