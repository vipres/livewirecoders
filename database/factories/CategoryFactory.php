<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Category::class;


    /*
        Si faker les está dando problemas a la hora de descargar las imagenes, hagan lo siguiente.

        Abrán el siguiente archivo: vendor\fakerphp\faker\src\Faker\Provider\Image.php

        y agregen estás dos lineas de código:
        curl_setopt($ch, CURLOPT_FILE, $fp); //línea existente
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//nueva línea
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//nueva línea
        $success = curl_exec($ch) && curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200;//línea existente
*/

    public function definition()
    {

        return [

            'image' => 'categories/' . $this->faker->image('public/storage/categories', 640, 480, null, false),
        ];
    }
}
