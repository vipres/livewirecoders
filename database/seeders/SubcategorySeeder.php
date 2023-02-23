<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'Celulares y SmartPhones',
                'slug' => Str::slug('Celulares y SmartPhones'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Accesorios para Celulares',
                'slug' => Str::slug('Accesorios para Celulares'),

            ],

            [
                'category_id' => 1,
                'name' => 'SmartWatches',
                'slug' => Str::slug('SmartWatches'),

            ],
            /* Tv, audio y video */
            [
                'category_id' => 2,
                'name' => 'Tv y Audio',
                'slug' => Str::slug('Tv y Audio'),

            ],

            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),

            ],
            [
                'category_id' => 2,
                'name' => 'Audio para Autos',
                'slug' => Str::slug('Audio para Autos'),

            ],
            /* Consolas y Videojuegos */
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),

            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation'),

            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC'),

            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),

            ],
            /* Computación */
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),

            ],
            [
                'category_id' => 4,
                'name' => 'PC Escritorio',
                'slug' => Str::slug('PC Escritorio'),

            ],
            [
                'category_id' => 4,
                'name' => 'Almacenamiento',
                'slug' => Str::slug('Almacenamiento'),

            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios computadoras',
                'slug' => Str::slug('Accesorios computadoras'),

            ],

            /* Moda */
            [
                'category_id' => 5,
                'name' => 'Mujeres',
                'slug' => Str::slug('Mujeres'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' => 5,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
                'color' => true,
                'size' => true

            ],
            [
                'category_id' => 5,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),

            ],
            [
                'category_id' => 5,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),

            ],



        ];

        foreach ($subcategories as $subcategory) {

            Subcategory::factory(1)->create($subcategory);
        }
    }
}
