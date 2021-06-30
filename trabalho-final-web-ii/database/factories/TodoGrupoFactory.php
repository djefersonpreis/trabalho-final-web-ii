<?php

namespace Database\Factories;

use App\Models\TodoGrupo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TodoGrupoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TodoGrupo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => Str::random(20),
            'description' => Str::random(200)
        ];
    }
}
