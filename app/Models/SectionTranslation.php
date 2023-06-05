<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
    	'name',
        'header',
    	'content',
        'img',
    	'section_id',
    	'post_id',
    	'view',
    ];

    public function Images()
    {
        return $this->hasMany(Images::class, 'section_id', 'id');
    }
}
