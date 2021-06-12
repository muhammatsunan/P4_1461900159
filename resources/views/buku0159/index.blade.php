@extends('layouts.index')

@section('content')
</br>  
    <a>Data Buku</a>
    </br>
    <table class="table-bordered table">
        <tr>
            <th>NO</th>
            <th>JUDUL</th>
            <th>JENIS BUKU</th>
        </tr>
        <?php $no=1; ?>
        @foreach($rak_buku as $data)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$data->judul}}</td>
            <td>{{$data->jenis}}</td>
    
        </tr>
        @endforeach
    </table>
@endsection