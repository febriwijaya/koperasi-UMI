<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pinjaman;

class Nasabah extends Model
{
    protected $table = "nasabah";

    protected $guarded = [];
    public function getCover()
    {
        if (substr($this->foto, 0, 5) == "https") {
            return $this->foto;
        }

        if ($this->foto) {
            return asset($this->foto);
        }

        return 'https://via.placeholder.com/50x50.png?text=No+Cover';
    }

    public function pinjaman()
    {
        return $this->hasMany(Pinjaman::class);
    }

    public function simpanan()
    {
        return $this->hasMany(Simpanan::class);
    }
}
