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
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('surname');
            $table->string('other_name');
            $table->string('email')->unique();
            $table->string('position');
            $table->string('contact', 15); // Limit to standard phone number length
            $table->string('photo')->nullable(); // Nullable for optional photo uploads
            $table->text('description')->nullable(); // Nullable and supports long text
            $table->string('company');
            $table->string('state_of_origin')->nullable();
            $table->string('country')->default('Nigeria'); // Default country, if applicable
            $table->date('date_of_birth')->nullable(); // Date field
            $table->string('qualification')->nullable();
            $table->string('discipline')->nullable();
            $table->integer('experience')->nullable(); // Experience in years
            $table->timestamps(); // A
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};


// {{-- table --}}
// {{-- surname, other name, email, position, contact, photo, discription, company, state of origin, country, date of birth, qualification, discipline, experience... created_at, updated_at...btns: edit, view/show(print, download,ahare), delete --}}