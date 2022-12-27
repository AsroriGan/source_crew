<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function idkelas()
    {
        return $this->hasMany(Jurusan::class);
    }
}
