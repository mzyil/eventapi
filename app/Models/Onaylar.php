<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Onaylar extends Model
{
    protected $table = 'onaylar';

    protected $primaryKey = 'onay_id';

	public $timestamps = false;

    protected $fillable = [
        'ilisik',
        'onay_from',
        'onay_to',
        'onay_tur',
        'red_mesaj',
        'olusturma_tarihi',
        'son_islem',
        'onay_durum',
        'yonlendirme'
    ];

    protected $guarded = [];

        
}