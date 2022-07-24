<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa2 extends Model
{
    use HasFactory;
    public $fillable = ['nama', 'nis', 'agama', 'jenis_kelamin', 'alamat', 'tgl_lahir'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
