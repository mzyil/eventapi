<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class KullaniciBasvuru extends Model
{
    protected $table = 'kullanici_basvuru';

    protected $primaryKey = 'basvuru_id';

	public $timestamps = false;

    protected $fillable = [
        'basvuru_mail',
        'basvuru_tipi',
        'basvuru_aktivasyon_kod',
        'basvuru_tarihi',
        'basvuru_ip'
    ];

    protected $guarded = [];

        
}