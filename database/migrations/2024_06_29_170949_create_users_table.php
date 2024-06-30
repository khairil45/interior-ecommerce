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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('membership_id')->nullable()->constrained()->onDelete('set null');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('phone_number', 15);
            $table->string('address', 100);
            $table->string('postal_code', 10);
            $table->boolean('is_whatsapp_connected')->default(false)->nullable();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
