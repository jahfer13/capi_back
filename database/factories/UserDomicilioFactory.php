<?php

namespace Database\Factories;

use App\Models\user_domicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = user_domicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $user_id = DB::table('users')->pluck('id');
        return [
            'user_id' => randomElement($user_id),
            'domicilio' => Str::random(10),
            'numero_exterior' => Str::random(10),
            'colonia' => Str::random(10),
            'cp' => Str::random(10),
            'ciudad' => Str::random(10),
            'fecha_nacimiento' => now()
        ];
    }
}
