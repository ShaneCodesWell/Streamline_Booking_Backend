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
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sender_id')->nullable();
            $table->integer('receiver_id')->nullable();
            $table->text('content');
            $table->timestamp('sent_at')->useCurrent();
            $table->enum('status', ['sent', 'delivered', 'read'])->nullable()->default('sent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
