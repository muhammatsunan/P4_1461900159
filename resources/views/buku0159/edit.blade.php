@extends('layouts.index')

@section('content')
    <br/>
    <form method="POST" action="{{ url('buku0159/'.$model->id) }}" enctype="multipart/form-data">
        @csrf 
        <input type="hidden" name="_method" value="PATCH">

        @include('buku0159._form')
    </form>
@endsection