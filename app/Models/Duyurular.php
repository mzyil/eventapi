<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Duyurular extends Model
{
    protected $table = 'duyurular';

    public $timestamps = false;

    protected $fillable = [
        'duyuru_baslik',
        'duyuru_icerik',
        'duyuru_kime',
        'duyuru_tarih',
        'duyuru_ekleyen'
    ];

    protected $guarded = [];

        
}