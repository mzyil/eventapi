<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DummyClass
 */
class Kullanicilar extends Model
{
    protected $table = 'kullanicilar';

    protected $primaryKey = 'kullanici_id';

	public $timestamps = false;

    protected $fillable = [
        'ad',
        'soyad',
        'tamad',
        'okul_no',
        'eposta',
        'eposta2',
        'sifre',
        'telefon',
        'kullanici_statu',
        'son_giris_tarihi',
        'uyelik_tarihi',
        'SonIP',
        '_aktif'
    ];

    protected $guarded = [];

        
}