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
        Schema::create('tutorprofiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('profile_picture')->nullable();
            $table->text('bio')->nullable();
            $table->string('orcid', 19)->nullable()->index('idx_orcid');
            $table->string('field_of_study')->nullable();
            $table->string('institution')->nullable();
            $table->text('biography')->nullable();
            $table->text('research_interests')->nullable();
            $table->string('contact_phone', 20)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

            $table->index(['first_name', 'last_name'], 'idx_tutor_name');
            $table->unique(['orcid'], 'orcid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutorprofiles');
    }
};
