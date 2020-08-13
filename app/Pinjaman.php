<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Jenis_pinjaman;
use App\Nasabah;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';

    protected $guarded = [];

    public function jenis_pinjaman()
    {
        return $this->belongsTo(Jenis_pinjaman::class);
    }

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pinjaman_setoran()
    {
        return $this->hasMany(Pinjaman_setoran::class);
    }
}
