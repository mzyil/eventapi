<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class KulupTemp extends Model
{
    protected $table = 'kulup_temp';

    public $timestamps = false;

    protected $fillable = [
        'kulup_id',
        'kulup_ad',
        'kulup_logo',
        'kulup_aciklama',
        'kulup_kisaAd',
        'kulup_eposta',
        'kulup_eposta2',
        'kulup_eposta3',
        'duzenlenme_tarihi'
    ];

    protected $guarded = [];

        
}