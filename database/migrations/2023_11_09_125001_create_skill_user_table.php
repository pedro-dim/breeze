<?php

use App\Models\User;
use App\Models\Skill;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skill_user', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id');
            //  $table->unsignedBigInteger('skill_id');
            $table->timestamps();

            $table->foreignIdFor(User::class)->onDelete('cascade');
            $table->foreignIdFor(Skill::class)->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skill_user');
    }
};
