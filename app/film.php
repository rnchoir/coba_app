<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    protected $table = "film";
    protected $fillable = ['judul_film','deskripsi_film','kategori','reting','jadwal_rilis','jadwal_tayang','foto'];
}
