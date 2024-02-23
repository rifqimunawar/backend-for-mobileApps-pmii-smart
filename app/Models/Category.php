<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = [];

    public function post()
    {
        return $this->hasMany(Post::class);
    }


    
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($telco) {
            $relationMethods = ['post'];

            foreach ($relationMethods as $relationMethod) {
                if ($telco->$relationMethod()->count() > 0) {
                    return false; // Menghentikan penghapusan jika ada relasi yang ada
                }
            }
        });
    }
}
