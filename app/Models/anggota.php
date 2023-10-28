<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota'; // Menyebutkan nama tabel yang sesuai

    protected $primaryKey = 'noktp'; // Menyebutkan primary key

    protected $fillable = [
        'noktp',
        'nama',
        'password',
        'alamat',
        'kota',
        'email',
        'no_telp',
        'file_ktp',
    ];

    protected $hidden = [
        'password',
    ];

    public $timestamps = false; // Menonaktifkan kolom updated_at dan created_at
}
