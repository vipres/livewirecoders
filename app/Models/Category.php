<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'icon'
    ];

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function brands()
    {
        return $this->belongsToMany(Brand::class);
    }

    //Uno a muchos a través Category se relaciona con Product a traves
    //de una tabla intermedia Subcategory

    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
