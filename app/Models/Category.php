<?php

namespace App\Models;

use Illuminate\Cache\HasCacheLock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model{
    use HasFactory;

    protected $fillable = ['name','slug','image','is_active'];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        }); // Added semicolon here
    }

    public function products(){
       return $this->hasMany(Product::class);
    }
    
}
