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
        Schema::create('md_homebases', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('sk_code');
            $table->date('sk_availability_date')->nullable();
            $table->date('sk_termination_date')->nullable();
            $table->integer('province');
            $table->integer('city');
            $table->integer('chairman')->nullable();
            $table->integer('description')->nullable();
            $table->string('organization_file')->nullable();
            $table->string('management_file')->nullable();
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
        Schema::dropIfExists('md_homebases');
    }
};
