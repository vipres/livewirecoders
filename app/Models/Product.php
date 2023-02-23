<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;
    const PUBLICADO = 2;

    protected $guarded = ['id', 'created_at', 'updated_at'];




    //Uno a mucho inversa
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    //Relacion muchos a muchos
    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    //Uno a muchos
    public function sizes()
    {
        return $this->hasMany(Size::class);
    }

    //uno a muchos polimorfica
    //Es uno a muchos polimorfica y se hace indicando en primer lugar el modelo y en segundo el metodo al que hace referencia
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
