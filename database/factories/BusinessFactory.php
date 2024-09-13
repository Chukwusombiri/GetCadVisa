<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Business>
 */
class BusinessFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model = Business::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'email'=>$this->faker->safeEmail(),
            'telephone' => $this->faker->phoneNumber(),
            'nationality' => $this->faker->country(),
            'residence' => $this->faker->country(),
            'age' => $this->faker->randomNumber(2,true),
            'net_worth' => 'above $'.$this->faker->numberBetween(10000,100000),
            'management_status' => true,
            'managements' => 
            json_encode([
                [
                    'management_title'=>'Manager',
                    'management_organization'=>'ABC limited',
                    'management_duration'=>'2 years',
                ]
            ]),
            'criminal_record_status' => 'No, i don\'t',
            'medical_condition_status' => 'No, i don\'t',
            'comment' => $this->faker->paragraph(),
            'passport' => 'business/img1.jpg'
        ];
    }
}
