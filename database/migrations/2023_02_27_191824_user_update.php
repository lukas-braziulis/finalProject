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
        Schema::table('users', function (Blueprint $table) {
            $table->string('nickname')->unique()->nullable();
            $table->boolean('newsletter_sub')->default(0);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
