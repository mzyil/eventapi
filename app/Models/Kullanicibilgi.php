<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Kullanicibilgi extends Model
{
    protected $table = 'kullanicibilgi';

    protected $primaryKey = 'kullanici_id';

	public $timestamps = false;

    protected $fillable = [
        'sifre'
    ];

    protected $guarded = [];

        
}