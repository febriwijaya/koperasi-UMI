<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pinjaman;

class Jenis_pinjaman extends Model
{
    protected $table = "jenis_pinjaman";

    protected $guarded = [];

    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class);
    }
}
