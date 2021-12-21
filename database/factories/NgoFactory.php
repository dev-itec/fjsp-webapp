<?php

namespace Database\Factories;

use App\Models\Ngo;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NgoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Fundacion Juntos se Puede',
            'rut' => '901312245-5',
            'address' => 'Calle 104 #54-31, Bogotá',
            'description' => 'La Fundación Juntos se Puede es un medio de apoyo para los Venezolanos...',
            'ws_number' => '573225142181',
            'web_page' => 'https://www.juntossepuede.co/',
            'logo' => 'juntossepuede.png',
            'email' => 'info@juntossepuede.co'
        ];
    }
}
