<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $keyword = $request->keyword;
        $buku = Buku::where('judul', 'LIKE', '%'.$keyword.'%')
            ->orWhere('tahun_terbit', 'LIKE', '%'.$keyword.'%')
            ->paginate();
        $buku->withPath('buku');
        $buku->appends($request->all());
        return view('buku0159.index', compact(
            'buku', 'keyword'
        ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $model = new Buku;
        return view('buku0159.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Buku;
        $model->judul = $request->judul;
        $model->tahun_terbit = $request->tahun_terbit;
        $model->save();

        return redirect('buku0159');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Buku::find($id);
        return view('buku0159.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Buku::find($id);
        $model->judul = $request->judul;
        $model->tahun_terbit = $request->tahun_terbit;
        $model->save();

        return redirect('buku0159')->with('success', "Data berhasil diperbaharui");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Buku::find($id);
        $model->delete();
        return redirect('Buku0159');
    }
}