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
        Schema::create('productos', function ($table) {
            $table->id();
            $table->string('status');
            $table->string('name');
            $table->timestamps();
        });
        //   id, name, status, created_at, updated_at, deleted_at
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
