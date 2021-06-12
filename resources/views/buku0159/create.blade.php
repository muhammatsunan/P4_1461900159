@extends('layouts.index')

@section('content')
    <br/>
    <form method= "POST" action="{{ url('buku0159') }}">
        @csrf
        JUDUL: <input type="text" name="judul"><br/>
        TAHUN TERBIT: <input type="text" name="tahun_terbit">
        <br/>
    <button type="submit">Simpan</button>
    
    </form>
@endsection