<?php

namespace Database\Factories;

use App\Models\General;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\General>
 */
class GeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = General::class;
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
            'children_under_22_status' => 'Yes, i have',
            'education_status' => 'Yes i have studied',            
            'high_education_status'=>true,
            'education' =>json_encode([
                [
                    'programme_type'=>'Bachelors',
                    'programme_duration'=>'4 years',
                    'programme_course'=>'Web development',
                    'programme_status'=>'Yes',
                    'programme_location'=>'inside canada',
                    'programme_province'=>'Ontario',
                ]
            ]),
            'job_status' => true,
            'job' =>json_encode([
                [
                    'occupation'=>'Lawyer',
                    'job_type'=>'Full time',
                    'job_start'=>'2024-01-22',
                    'job_end'=>'2024-09-28',
                    'job_location'=>'inside canada',
                    'job_province'=>'Toronto',
                    'job_permit'=>'yes, i have',
                    'job_career_compare'=>'No', 
                ]
            ]),
            'english_listening_proficiency'=>'Competent',
            'english_speaking_proficiency'=>'Modest',
            'english_reading_proficiency'=>'Competent',
            'english_writing_proficiency'=>'Modest',
            'french_listening_proficiency'=>'Competent',
            'french_speaking_proficiency'=>'Modest',
            'french_reading_proficiency'=>'Competent',
            'french_writing_proficiency'=>'Modest',
            'express_entry_status'=>'yes',
            'express_entry_invite_status'=>'yes',
            'new_job_status'=>true,
            'new_job_title'=>$this->faker->word(),
            'new_job_LMIA_support_status'=>$this->faker->word(),
            'new_job_work_hours'=>'above '.$this->faker->randomNumber(2,true),
            'new_job_duration'=>'full time',
            'new_job_province'=>'Toronto',
            'family_in_canada_status'=>true,
            'relatives'=>json_encode([
                [
                    'family_in_canada_related'=>'Brother',
                    'family_in_canada_residence_status'=>'Yes',
                    'family_in_canada_residence'=>'Quebec',
                    'family_in_canada_duration'=>'more than 3 years',
                ]
            ]),
            'amount_available' => 'above $'.$this->faker->numberBetween(10000,100000),
            'comment' => $this->faker->paragraph(),
            'passport' => 'general/img1.jpg'
        ];
    }
}
