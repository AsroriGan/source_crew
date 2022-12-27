<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function idkelass()
    {
        return $this->belongsTo(Kelas::class,'kelas','id');
    }

    public function idjurusan()
    {
        return $this->belongsTo(Jurusan::class,'jurusan','id');
    }
}
