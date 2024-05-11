<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mbr_member', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('identify_number');
            $table->string('fullname');
            $table->string('photo');
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('sex');
            $table->string('occupation');
            $table->string('blood');
            $table->string('religion');
            $table->string('address');
            $table->string('province');
            $table->string('city');
            $table->string('district');
            $table->string('sub_district');
            $table->string('zip_code');
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->date('join_date')->nullable();
            $table->date('termination_date')->nullable();
            $table->string('position')->nullable();
            $table->string('shooting_field')->nullable();
            $table->string('homebase')->nullable();
            $table->string('club')->nullable();
            $table->string('is_referee')->nullable();
            $table->string('is_athlete')->nullable();
            $table->string('is_coach')->nullable();
            $table->json('created_by');
            $table->json('updated_by');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mbr_member');
    }
};
