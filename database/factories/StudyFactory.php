<?php

namespace Database\Factories;

use App\Models\Study;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Study>
 */
class StudyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Study::class;
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
            'living_expense_capability_status'=>'Yes',
            'admission_status'=>true,
            'study_start'=>now(),
            'study_province' => 'Quebec',
            'previous_study_immigration_attempt_status'=>'Yes, i have',
            'passport'=>'study/img1.jpg',
        ];
    }
}
