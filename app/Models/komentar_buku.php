<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KomentarBuku extends Model
{
    use HasFactory;

    protected $table = 'komentar_buku'; // Menyebutkan nama tabel yang sesuai

    protected $primaryKey = 'idkomentar'; // Menyebutkan primary key

    protected $fillable = [
        'idbuku',
        'noktp',
        'komentar',
    ];

    public $timestamps = false; // Menonaktifkan kolom updated_at dan created_at
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'idbuku');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'noktp');
    }


}
