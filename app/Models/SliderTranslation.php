<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
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

    public function Slider()
    {
        return $this->hasOne(Slider::class, 'id', 'slider_id');
    }
}
