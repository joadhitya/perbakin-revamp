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
        Schema::create('md_clubs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_homebase');
            $table->integer('id_chairman');
            $table->string('code');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->integer('province');
            $table->integer('city');
            $table->integer('district');
            $table->integer('sub_district');
            $table->integer('description')->nullable();
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
        Schema::dropIfExists('md_clubs');
    }
};
