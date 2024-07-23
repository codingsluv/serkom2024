<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table ='menu_tiket';
    protected $fillable = [
        'nama_tiket',
        'deskripsi',
        'harga',
        'status',
        'gambar'
    ];
}