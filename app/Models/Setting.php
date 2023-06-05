<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = false;
    public $translatedAttributes = [
        'setting_id',
        'name',
        'address',
        'hotline',
        'email',
        'facebook',
        'youtube',
        'maps',
        'img',
        'favicon',
        'title',
        'description',
        'keywords',
        'locale',
    	
    ];
    protected $fillable = [
    	'user_id', 
        'status', 
    ];
}
