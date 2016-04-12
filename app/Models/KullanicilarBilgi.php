<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class KullanicilarBilgi extends Model
{
    protected $table = 'kullanicilar_bilgi';

    protected $primaryKey = 'bilgi_id';

	public $timestamps = false;

    protected $fillable = [
        'kullanici_id',
        'bilgi_key',
        'bilgi_value'
    ];

    protected $guarded = [];

        
}