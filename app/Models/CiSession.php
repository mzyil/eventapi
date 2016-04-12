<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class CiSession extends Model
{
    protected $table = 'ci_sessions';

    public $timestamps = false;

    protected $fillable = [
        'ip_address',
        'timestamp',
        'data'
    ];

    protected $guarded = [];

        
}