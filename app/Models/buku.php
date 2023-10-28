<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku'; 

    protected $primaryKey = 'idbuku';

    protected $fillable = [
        'isbn',
        'judul',
        'idkategori',
        'pengarang',
        'penerbit',
        'kota_terbit',
        'editor',
        'file_gambar',
        'tgl_insert',
        'tgl_update',
        'stok',
        'stok_tersedia'
    ];

    protected $dates = ['tgl_insert', 'tgl_update']; // Menyebutkan kolom tanggal

    // Define relasi jika diperlukan
    // Misalnya, jika Anda memiliki relasi ke tabel lain seperti Kategori, Anda dapat mendefinisikan relasinya di sini.

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'idkategori');
    }
}
