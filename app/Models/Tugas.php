<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = 'tugas';
    protected $primarykey = 'id';
    protected $fillable = [
        'judul', 'sub_judul', 'kategori', 'tanggal', 'deadline', 'deskripsi'
    ];
}
