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
        Schema::create('sponsorships', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('telephone');
            $table->string('nationality');
            $table->string('residence');
            $table->integer('age');
            $table->string('sponsorship_need');
            $table->string('marital_status');
            $table->boolean('children_under_22_status');
            $table->integer('children_under_22_count');
            $table->string('sponsor_name');
            $table->string('sponsored_relative')->nullable();
            $table->string('social_assistance_status');
            $table->string('sponsor_citizenship_status');
            $table->boolean('sponsor_resident_status');
            $table->string('sponsor_in_canada_residence')->nullable();
            $table->string('criminal_record_status');
            $table->string('medical_condition_status');
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
        Schema::dropIfExists('sponsorships');
    }
};
