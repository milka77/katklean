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
        Schema::table('bookings', function (Blueprint $table) {
            $table->unsignedTinyInteger('office')->default(0);
            $table->unsignedTinyInteger('hallway')->default(0);
            $table->unsignedTinyInteger('through_lounge')->default(0);
            $table->unsignedTinyInteger('flight_of_stairs')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('office');
            $table->dropColumn('hallway');
            $table->dropColumn('through_lounge');
            $table->dropColumn('flight_of_stairs');
        });
    }
};
