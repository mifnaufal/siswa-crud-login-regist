<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis', 'nama', 'jenis_kelamin', 'alamat', 'no_telp'];
}