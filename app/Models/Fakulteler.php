<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Fakulteler extends Model
{
    protected $table = 'fakulteler';

    public $timestamps = false;

    protected $fillable = [
        'kulup_id',
        'dekan_id',
        'temsilci_id'
    ];

    protected $guarded = [];

        
}