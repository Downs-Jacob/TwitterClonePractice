<?php

namespace Database\Factories;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TweetFactory extends Factory
{

    protected $model = Tweet::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'body' => $this->faker->sentence,
        ];
    }
}
