<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingBuku extends Model
{
    use HasFactory;

    protected $table = 'rating_buku'; // Menyebutkan nama tabel yang sesuai

    protected $primaryKey = null; // Karena ada dua kolom sebagai primary key, kita set null

    public $incrementing = false; // Karena primary key bukan auto-increment

    protected $fillable = [
        'idbuku',
        'noktp',
        'skor_rating',
        'tgl_rating',
    ];

    public $timestamps = false; // Menonaktifkan kolom updated_at dan created_at

    protected $dates = ['tgl_rating'];

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'idbuku', 'idbuku');
    }

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'noktp', 'noktp');
    }
}
