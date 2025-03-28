<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Tag extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = [];

    public function products() {
        return $this->belongsToMany(Product::class, 'product_tag', 'tag_id', 'product_id');
    }

    

     /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'unique' => true,
                'onUpdate' => true,
                'separator' => '-',
                'includeNumbers' => true,
            ]
        ];
    }
}
