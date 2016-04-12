<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class KulupKullaniciIliskiTemp extends Model
{
    protected $table = 'kulup_kullanici_iliski_temp';

    protected $primaryKey = 'rel_id';

	public $timestamps = false;

    protected $fillable = [
        'kulup_id',
        'kullanici_id',
        'kulup_kullanici_gorev'
    ];

    protected $guarded = [];

        
}