<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    protected $visible = ['nama_KA', 'asal', 'tujuan','harga'];

    protected $fillable = ['nama_KA', 'asal', 'tujuan','harga'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    public function pesans()
    {
        return $this->hasMany('App\Models\pesan', 'id_kereta');
    }
}
