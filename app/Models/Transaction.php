<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'transactions';
    protected $fillable = ['userIdPetugas', 'userIdPeminjam', 'tanggalPinjam', 'tanggalKembali'];

    public function peminjam()
    {
        return $this->belongsTo(User::class, 'userIdPeminjam');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'userIdPetugas');
    }
}
// Nama:  Fauzan Ramadhana Sadikin
// Nim:   6706220054
// Kelas: D3IF 4603