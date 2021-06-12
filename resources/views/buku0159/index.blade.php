@extends('layouts.index')

@section('content')
</br>
    @if(Session::has('success'))
        <p class="alert alert-success">{{ Session::get('success') }}</p><br/>
    @endif    
    <a class="btn btn-info" href="{{ url('buku0159/create')}}">Tambah Data</a>
    </br>
    <table class="table-bordered table">
        <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>TAHUN TERBIT</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php $no=1; ?>
        @foreach($buku as $bku)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$bku->judul}}</td>
            <td>{{$bku->tahun_terbit}}</td>
            <td class="text-center"><a class="btn btn-info" href="{{ url('buku0159/'.$bku->id.'/edit') }}">Update</a></td>
                <td class="text-center">
                    <form action="{{ url('buku0159/'.$bku->id) }}" method="POST">
                        @csrf 
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">DELETE</button>
        </tr>
        @endforeach
    </table>
@endsection