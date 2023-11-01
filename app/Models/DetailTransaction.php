<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'transactionId',
        'collectionId',
        'tanggalKembali',
        'status',
        'keterangan',
    ];
}
// Nama:  Fauzan Ramadhana Sadikin
// Nim:   6706220054
// Kelas: D3IF 4603