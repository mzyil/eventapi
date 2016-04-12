<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Kulup extends Model
{
    protected $table = 'kulup';

    protected $primaryKey = 'kulup_id';

	public $timestamps = false;

    protected $fillable = [
        'kulup_ad',
        'kulup_logo',
        'kulup_aciklama',
        'kulup_kisaAd',
        'kulup_seflink',
        'kulup_baskan_id',
        '_aktif',
        'kulup_eposta',
        'kulup_eposta2',
        'kulup_eposta3',
        'kulup_fb',
        'kulup_tw',
        'kulup_yt',
        'kulup_ws',
        'kulup_ins'
    ];

    protected $guarded = [];

        
}