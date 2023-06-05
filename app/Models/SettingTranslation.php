<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
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
}
