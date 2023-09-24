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
        //
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('visitor_name');
            $table->string('visitor_email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('visitor_phone_number');
            $table->string('visitor_address');
            $table->string('visit_purpose');
            $table->enum('visitor_status', ['In', 'Out']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('visitors');
    }
};
