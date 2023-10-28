<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi'; // Menyebutkan nama tabel yang sesuai

    protected $fillable = [
        'idtransaksi',
        'idbuku',
        'tgl_kembali',
        'denda',
        'idpetugas',
    ];

    public $timestamps = false; // Menonaktifkan kolom updated_at dan created_at

    // Define foreign key constraints
    public function peminjaman()
    {
        return $this->belongsTo(Peminjaman::class, 'idtransaksi');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'idbuku');
    }

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'idpetugas');
    }
}
