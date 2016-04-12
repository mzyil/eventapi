<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class AfisTalep extends Model
{
    protected $table = 'afis_talep';

    public $timestamps = false;

    protected $fillable = [
        'isim',
        'soyisim',
        'tel',
        'eposta',
        'afis',
        'kurum',
        'etkinlik',
        'onay_tarih',
        'kaldirma_tarih'
    ];

    protected $guarded = [];

        
}