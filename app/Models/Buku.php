<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Buku extends Model
{
    public function alldata()
    {
        return DB::table('rak_buku')
        ->leftJoin('buku', 'buku.id', '=', 'rak_buku.id')
        ->leftJoin('jenis_buku', 'jenis_buku.id', '=', 'rak_buku.id')
            ->get();

    }

    
}
