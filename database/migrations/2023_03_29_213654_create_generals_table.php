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
        Schema::create('generals', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('nationality');
            $table->string('residence');
            $table->integer('age');
            $table->string('marital_status');
            $table->string('children_under_22_status');
            $table->string('education_status');
            $table->boolean('high_education_status'); 
            $table->text('education')->nullable();          
            $table->boolean('job_status');
            $table->text('job')->nullable();
            $table->string('english_writing_proficiency');
            $table->string('english_reading_proficiency');
            $table->string('english_speaking_proficiency');
            $table->string('english_listening_proficiency');
            $table->string('french_writing_proficiency');
            $table->string('french_reading_proficiency');
            $table->string('french_speaking_proficiency');
            $table->string('french_listening_proficiency');
            $table->string('express_entry_status');
            $table->string('express_entry_invite_status');
            $table->boolean('new_job_status');
            $table->string('new_job_title')->nullable();
            $table->string('new_job_province')->nullable();
            $table->string('new_job_duration')->nullable();
            $table->string('new_job_work_hours')->nullable();
            $table->string('new_job_LMIA_support_status')->nullable();
            $table->boolean('family_in_canada_status');
            $table->text('relatives')->nullable();
            $table->string('amount_available');           
            $table->text('comment')->nullable();
            $table->string('passport');
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
        Schema::dropIfExists('generals');
    }
};
