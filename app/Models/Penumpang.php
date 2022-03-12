<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    protected $visible = ['id_pesan', 'nm_penumpang', 'no_telp','no_ktp'];

    protected $fillable = ['id_pesan', 'nm_penumpang', 'no_telp','no_ktp'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    public function pesans()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\pesan', 'id_pesan');
    }
}
