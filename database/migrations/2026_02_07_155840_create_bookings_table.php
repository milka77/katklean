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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // Foreign keys
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            // Room details
            $table->unsignedTinyInteger('bed')->default(0);
            $table->unsignedTinyInteger('bath')->default(0);
            $table->unsignedTinyInteger('living')->default(0);
            $table->unsignedTinyInteger('kitchen')->default(0);
            $table->unsignedTinyInteger('other')->default(0);
            // Additional services
            $table->boolean('extra_1')->default(false);
            $table->boolean('extra_2')->default(false);
            $table->boolean('extra_3')->default(false);
            // Booking details
            $table->text('message')->nullable();
            $table->string('house_access')->nullable();
            $table->integer('duration_minutes');
            $table->date('booking_date');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            // Customer details
            $table->string('name');
            $table->string('address_line1');
            $table->string('postcode');
            $table->string('town');
            $table->string('email')->index();
            $table->string('phone');
            // Payment details
            $table->string('payment_method');
            $table->string('payment_status')->default('pending');
            $table->decimal('total_price', 8, 2);
            // Other details
            $table->boolean('own_equipment')->default(false);
            $table->string('frequency');
            // Status
            $table->string('status')->default('pending');
            // Indexes
            $table->index(['start_at', 'end_at']);
            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
