<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Birimler extends Model
{
    protected $table = 'birimler';

    protected $primaryKey = 'birim_id';

	public $timestamps = false;

    protected $fillable = [
        'birim_tur',
        'birim_ad',
        'birim_ust',
        'birim_siralama',
        'ilgili'
    ];

    protected $guarded = [];

        
}