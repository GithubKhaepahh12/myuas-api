<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $fillable = [
        'nama','jenis_vitamin','status','gambar'
    ];
}
