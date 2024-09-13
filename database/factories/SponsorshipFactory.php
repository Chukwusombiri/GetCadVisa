<?php

namespace Database\Factories;

use App\Models\Sponsorship;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sponsorship>
 */
class SponsorshipFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sponsorship::class;
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
            'marital_status' => 'Single',
            'children_under_22_status' => true,
            'children_under_22_count'=>5,
            'sponsorship_need' => 'yes',
            'sponsor_name'=>$this->faker->name(),
            'sponsored_relative'=>$this->faker->name(),
            'social_assistance_status'=>'no',
            'sponsor_citizenship_status'=>'yes',
            'sponsor_resident_status'=>true,
            'sponsor_in_canada_residence'=>'Ontario',
            'criminal_record_status' => 'false',
            'medical_condition_status' => 'false',
            'comment' => $this->faker->paragraph(),
            'passport' => 'sponsor/img1.jpg'
        ];
    }
}
