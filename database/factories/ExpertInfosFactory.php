<?php

namespace Database\Factories;

use App\Models\ExpertInfos;
use App\Models\User;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ExpertInfos>
 */
class ExpertInfosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = fake()->unique()->userName();
       static $counter = 0;
       static $photo  =0 ;
        return [
                'expert_id' => User::factory()->create([
                    'name' => $faker,
                    'email' => 'expert'.$counter++.'@gmail.com',
                    'password' => Hash::make('123456789'),
                    'role' => 'expert'
                ])->getAttribute('id'),
                'mobile' => fake()->unique()->phoneNumber,
                'city' => fake()->city,
                'country' => fake()->country,
                'working_hours' => fake()->time,
                'description' => fake()->sentence,
                'certificate' => fake()->sentence,
                'photo' => 'https://picsum.photos/id/'.$photo++.'/5000/3333',
            ];

    }
}
