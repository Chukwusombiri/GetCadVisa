<?php

namespace Database\Factories;

use App\Models\EmailList;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmailListFactory extends Factory
{
    protected $model = EmailList::class;
    
    public function definition()
    {
        return [
            'email' => $this->faker->safeEmail(),
        ];
    }
}