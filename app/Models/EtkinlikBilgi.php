<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class EtkinlikBilgi extends Model
{
    protected $table = 'etkinlik_bilgi';

    protected $primaryKey = 'bilgi_id';

	public $timestamps = false;

    protected $fillable = [
        'etkinlik_id',
        'bilgi_key',
        'bilgi_value'
    ];

    protected $guarded = [];

        
}