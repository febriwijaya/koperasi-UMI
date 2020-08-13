<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = "simpanan";

    protected $guarded = [];

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }

    public function jenis_simpanan()
    {
        return $this->belongsTo(Jenis_simpanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
