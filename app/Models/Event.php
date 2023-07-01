<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'event';
    protected $primaryKey = 'id_event';
    protected $fillable = [
        'judul_event',
        'pembicara',
        'tanggal_dibuat',
        'tanggal_event',
        'jam_mulai',
        'jam_selesai',
        'tempat_event',
        'deskripsi_event',
        'status_event'
    ];
    public $timestamps = true;
}
