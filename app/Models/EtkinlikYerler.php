<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class EtkinlikYerler extends Model
{
    protected $table = 'etkinlik_yerler';

    protected $primaryKey = 'yer_id';

	public $timestamps = false;

    protected $fillable = [
        'ust',
        'yer_ad',
        'listede_goster',
        'ilgili',
        'max'
    ];

    protected $guarded = [];

        
}