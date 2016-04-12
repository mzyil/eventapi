<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class BirimCalisanIliski extends Model
{
    protected $table = 'birim_calisan_iliski';

    protected $primaryKey = 'rel_id';

	public $timestamps = false;

    protected $fillable = [
        'birim',
        'kullanici_id',
        'birim_kullanici_gorev',
        'aktif'
    ];

    protected $guarded = [];

        
}