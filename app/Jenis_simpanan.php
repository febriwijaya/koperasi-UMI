<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_simpanan extends Model
{
    protected $table = "jenis_simpanan";

    protected $guarded = [];

    public function simpanan()
    {
        return $this->hasMany(Simpanan::class);
    }
}
