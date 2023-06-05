<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictTranslation extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
    	'district_id',
    	'province_id',
    	'name',
        'prefix',
    	'locale',
    ];

    public function ProvinceTranslation()
    {
        return $this->belongsTo(ProvinceTranslation::class, 'province_id', 'id');
    }
    public function WardTranslation()
    {
        return $this->hasMany(DistrictTranslation::class, 'district_id', 'id');
    }
    public function PostTranslation()
    {
        return $this->hasMany(PostTranslation::class, 'district_id', 'id');
    }
    
}
