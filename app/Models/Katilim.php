<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Katilim extends Model
{
    protected $table = 'katilim';

    protected $primaryKey = 'katilimci_id';

	public $timestamps = false;

    protected $fillable = [
        'kullanici_id',
        'onay',
        'etkinlik_id',
        'durum'
    ];

    protected $guarded = [];

        
}