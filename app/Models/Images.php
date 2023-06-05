<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    public $timestamps = true;

    public function Post()
    {
        return $this->hasOne(Post::class, 'id', 'post_id');
    }

    public function SectionTranslation()
    {
        return $this->hasOne(SectionTranslation::class, 'id', 'section_id');
    }
}
