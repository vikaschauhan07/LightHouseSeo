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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('department');
            $table->tinyInteger('attendance_status')->default(0); // 0 for absent, 1 for present
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
