<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Slider extends Model
{
    use Translatable;
    use HasFactory;
    public $timestamps = false;
    public $translatedAttributes = [
        'slider_id',
        'heading1',
        'heading2',
        'text1',
        'text2',
        'link',
        'locale',
        'note',
        'status',
    ];
    protected $fillable = [
        'user_id', 
    	'img', 
    ];

    public function SliderTranslation()
    {
        return $this->hasMany(SliderTranslation::class, 'slider_id', 'id');
    }
}
