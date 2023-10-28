<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman'; // Menyebutkan nama tabel yang sesuai

    protected $primaryKey = 'idtransaksi'; // Menyebutkan primary key

    protected $fillable = [
        'noktp',
        'tgl_pinjam',
        'idpetugas',
    ];

    public $timestamps = false; // Menonaktifkan kolom updated_at dan created_at
}
