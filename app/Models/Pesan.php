<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $visible = ['id_kereta', 'kelas', 'tgl','jml_tiket', 'total'];

    protected $fillable = ['id_kereta', 'kelas', 'tgl','jml_tiket', 'total'];
    // mencatat waktu pembuatan dan update otomatis
    public $timestime = true;

    public function keretas()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->belongsTo('App\Models\kereta', 'id_kereta');
    }
    public function penumpangs()
    {
        // data model "Author" bisa memiliki banyak data
        // dari model "Book" melalui fk "author_id"
        return $this->hasMany('App\Models\penumpang', 'id_penumpang');
    }
}
