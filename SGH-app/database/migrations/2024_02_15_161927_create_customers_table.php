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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->char('type', 1);
            $table->string('number_id', 9);
            $table->string('civil_status');
            $table->date('birthdate');
            $table->char('nationality', 3);
            $table->string('phone');
            $table->string('occupation');
            $table->string('car_plate');
            $table->string('email')->unique();
            $table->foreignIdFor(\App\Models\Address::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
