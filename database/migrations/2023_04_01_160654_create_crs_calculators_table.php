<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crs_calculators', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('nationality');
            $table->string('residence');
            $table->integer('age');
            $table->string('marital_status');
            $table->string('canada_spouse_status');
            $table->string('educational_qualification');
            $table->boolean('canada_study_status');
            $table->string('canada_study_completion_status')->nullable();
            $table->string('canada_degree_status')->nullable();
            $table->string('in_canada_for_study_status')->nullable();
            $table->string('canada_educational_qualifiication')->nullable();
            $table->string('english_proficiency');
            $table->string('french_proficiency');              
            $table->string('skilled_work_duration');                              
            $table->string('canada_skilled_work_duration');
            $table->string('qualification_cert_status');
            $table->string('nomination_cert_status');
            $table->boolean('canada_job_status');
            $table->string('senior_role_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crs_calculators');
    }
};
