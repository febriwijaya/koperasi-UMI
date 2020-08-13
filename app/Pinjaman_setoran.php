<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pinjaman;

class Pinjaman_setoran extends Model
{
    protected $table = "pinjaman_setoran";

    protected $guarded = [];

    public function pinjaman()
    {
        return $this->belongsTo(Pinjaman::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
