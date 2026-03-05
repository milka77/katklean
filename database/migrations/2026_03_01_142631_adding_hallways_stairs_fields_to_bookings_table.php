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
        Schema::table('bookings', callback: function (Blueprint $table) {
            $table->unsignedTinyInteger('hallway')->default(0);
            $table->unsignedTinyInteger('flight_of_stairs')->default(0);
            $table->unsignedTinyInteger('property_size')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('hallway');
            $table->dropColumn('flight_of_stairs');
            $table->dropColumn('property_size');
        });
    }
};
