<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class KulupBilgi extends Model
{
    protected $table = 'kulup_bilgi';

    protected $primaryKey = 'bilgi_id';

	public $timestamps = false;

    protected $fillable = [
        'kulup_id',
        'bilgi_key',
        'BilgiValue'
    ];

    protected $guarded = [];

        
}