<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Etkinlikler extends Model
{
    protected $table = 'etkinlikler';

    protected $primaryKey = 'etkinlik_id';

	public $timestamps = false;

    protected $fillable = [
        'etk_adi',
        'kulup_id',
        'kullanici_id',
        'etk_turu',
        'etk_aciklama',
        'etk_katilim_turu',
        'etk_afis',
        'etkinlik_yeri',
        'baslangic_tarihi',
        'bitis_tarihi',
        'aka_dan_onay',
        'etk_krd_onay',
        'afis_onay',
        'yer-zaman_onay',
        'durum',
        'son_edit',
        'etk_tahmini',
        'etk_olusturma_tarihi'
    ];

    protected $guarded = [];

        
}