<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


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
            'url' => 'products/' . $this->faker->image('public/storage/products', 640, 480, null, false)
        ];
    }
}
