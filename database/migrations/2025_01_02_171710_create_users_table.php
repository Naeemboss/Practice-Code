<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Name field, you could specify length if needed
            $table->string('email')->unique(); // Email field with unique constraint
            $table->string('address'); // Address field
            $table->integer('age')->nullable(); // Age field is nullable
            $table->string('city'); // City field
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users'); // Drop users table if the migration is rolled back
    }
};

