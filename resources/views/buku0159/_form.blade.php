<div class="row clearfix">
    <div class="col-md-6">Judul Buku</div>
    
    <div class="col-md-6">
        <input class="form-control" type="text" name="judul" value="{{ $model->judul }}"> 
        @foreach($errors->get('buku') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tahun Terbit </div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tahun_terbit" value="{{ $model->tahun_terbit }}">
        @foreach($errors->get('tahun_terbit') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>
<button type="submit" class="btn btn-primary">SIMPAN</button>